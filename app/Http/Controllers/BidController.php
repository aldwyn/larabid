<?php

namespace LaraBid\Http\Controllers;

use Auth;
use Input;
use Illuminate\Http\Request;
use LaraBid\Http\Requests;
use LaraBid\Http\Controllers\Controller;

use LaraBid\Item;
use LaraBid\Bid;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::where('bidder_id', Auth::user()->id);
        return response()->view('itemList', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Input::get('item_id');
        return response()->view('createBidView', ['item' => Item::find($id)]);
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
            'bid_amount' => 'required|integer|min:10',
        ]);
        $bid = new Bid;
        $bid->bid_amount = $request->bid_amount;
        $bid->item()->associate(Item::find($request->item_id));
        $bid->bidder()->associate(Auth::user());
        $bid->save();
        return redirect()->route('bid.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bid::destroy($id);
        return redirect()->route('dashboard');
    }
}
