<?php

namespace App\Http\Controllers;

use App\Purchase;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller {

    public function __construct() {
        $this->middleware('auth');    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $purchases = Purchase::with('user')->get();
        return view('adm.purchase.index')->with(compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $products = Product::all();
        return view('membro.purchase.new')->with(compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $input = $request->only('ciente', 'qtd');
        if ($input['ciente'] === 'on') {
            $user = Auth::user();
            $purchase = Purchase::create(['user_id'=>$user->id]); 
            foreach ($input['qtd'] as $key => $value) {
                if (!is_null($value)) {
                    DB::table('product_purchase')->insert([
                        'purchase_id'=>$purchase->id,
                        'product_id'=>$key,
                        'qtd'=>$value
                            ]); 
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase) {                
        $purchased = Purchase::with(['user','products'])->get()->find($purchase->id);
        return view('adm.purchase.show')->with(compact('purchased'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase) {
        //
    }

}
