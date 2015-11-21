<?php

namespace LaraBid\Http\Controllers;

use Auth;
use Input;
use Illuminate\Http\Request;
use LaraBid\Http\Requests;
use LaraBid\Http\Controllers\Controller;

use LaraBid\Item;

class ItemController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	return response()->view('itemList', ['items' => Item::all()]);
    }

    public function user_items()
    {
	return response()->view('itemList', ['items' => Item::where('auctioneer_id', Auth::user()->id)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('addItemView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'start_bid_amount' => 'required|integer|min:10',
            'start_bid_datetime' => 'required',
            'end_bid_datetime' => 'required|different:start_bid_datetime',
        ]);
        $item = new Item;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->start_bid_amount = $request->start_bid_amount;
        $item->start_bid_datetime = date('Y-m-d H:i:s', strtotime($request->start_bid_datetime));
        $item->end_bid_datetime = date('Y-m-d H:i:s', strtotime($request->end_bid_datetime));
        $item->auctioneer()->associate(Auth::user());
        $item->save();
        return redirect()->route('item.show', ['id' => $item->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->view('itemView', ['item' => Item::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->view('updateItemView', ['item' => Item::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'start_bid_amount' => 'required|integer|min:10',
            'start_bid_datetime' => 'required',
            'end_bid_datetime' => 'required|different:start_bid_datetime',
        ]);
        $item = Item::find($request->id);
        $item->name = $request->name;
        $item->description = $request->description;
        $item->start_bid_amount = $request->start_bid_amount;
        $item->start_bid_datetime = date('Y-m-d H:i:s', strtotime($request->start_bid_datetime));
        $item->end_bid_datetime = date('Y-m-d H:i:s', strtotime($request->end_bid_datetime));
        $item->save();
        return redirect()->route('item.show', ['id' => $item->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::destroy($id);
        return redirect()->route('dashboard');
    }

    /**
     * Search for items.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $query = Input::get('query');
        $itemSearch = Item::where('name', 'LIKE', '%$query%')->get();
        return response()->view('itemList', ['items' => $itemSearch]);
    }    

}
