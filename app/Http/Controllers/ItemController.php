<?php

namespace LaraBid\Http\Controllers;

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
        return view('index', ['items' => Item::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addItemView');
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
        $item = Item::create([
            'name' => $request->name,
            'description' => $request->description,
            'start_bid_amount' => $request->start_bid_amount,
            'start_bid_datetime' => $request->start_bid_datetime,
            'end_bid_datetime' => $request->end_bid_datetime,
        ]);
        return redirect()->route('item', ['id' => $item->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('itemView', ['item' => Item::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('updateItemView', ['item' => Item::findOrFail($id)]);
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
        $item = Item::create([
            'name' => $request->name,
            'description' => $request->description,
            'start_bid_amount' => $request->start_bid_amount,
            'start_bid_datetime' => $request->start_bid_datetime,
            'end_bid_datetime' => $request->end_bid_datetime,
        ]);
        return redirect()->route('item', ['id' => $item->id]);
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
        return redirect()->route('item');
    }
}
