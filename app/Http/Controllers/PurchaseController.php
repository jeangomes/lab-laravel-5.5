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
        $user = Auth::user();
        if ($user->admin) {
            $purchases = Purchase::with('user')->get();
            return view('adm.purchase.index')->with(compact('purchases'));
        } else {
            $purchases = Purchase::with('user')->where('user_id', $user->id)->get();
            return view('membro.purchase.index')->with(compact('purchases'));
        }
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
        try {
            $input = $request->only('ciente', 'qtd');
            if ((int) $input['ciente'] === 1) {
                if ($this->validateQtd($input['qtd'])) {
                    $user = Auth::user();
                    $purchase = Purchase::create(['user_id' => $user->id, 'amount' => 0]);
                    $this->storeItens($input, $purchase->id);
                    $this->setAmount($purchase->id);
                    return redirect()->route('pedido.show', $purchase->id)
                                    ->with([
                                        'aviso' => 'Encomenda solicitada com sucesso.',
                                        'type' => 'success'
                    ]);
                }
                return redirect()->route('pedido.create')
                                ->with([
                                    'aviso' => 'Encomenda não solicitada. Informe ao menos 1 item.',
                                    'type' => 'danger'
                ]);
            }
        } catch (Exception $ex) {
            
        }
    }

    private function validateQtd($qtd) {
        $func = function($q) {
            return !(is_null($q));
        };
        $evento = array_map($func, $qtd);
        return !empty(array_filter($evento));
    }

    private function storeItens($input, $purchase_id) {
        foreach ($input['qtd'] as $key => $value) {
            if (!is_null($value)) {
                $unitary_price = Product::select('price')->find($key);
                DB::table('product_purchase')->insert([
                    'purchase_id' => $purchase_id,
                    'product_id' => $key,
                    'unitary_price' => $unitary_price->price,
                    'qtd' => $value,
                    'total_price' => $unitary_price->price * $value,
                ]);
            }
        }
    }

    private function setAmount($purchase_id) {
        $purchase = Purchase::find($purchase_id);
        $amount = DB::table('product_purchase')
                ->where('purchase_id', $purchase_id)
                ->sum('total_price');
        $purchase->amount = $amount;
        $purchase->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase) {
        $user = Auth::user();
        if ($user->admin) {
            $purchased = Purchase::with(['user', 'products'])->get()->find($purchase->id);
        } else {
            $purchased = Purchase::with(['user', 'products'])
                            ->where('id', $purchase->id)
                            ->where('user_id', $user->id)->first();
        }
        if (!is_null($purchased)) {
            return view('adm.purchase.show')->with(compact('purchased'));
        }
        return redirect()->route('pedido.index')
                        ->with('aviso', 'Pedido não encontrado, listando seus pedidos!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase) {

        $products = DB::table('products')
                ->select('products.*')
                ->selectRaw('(select qtd from tbl_product_purchase pp '
                        . 'where pp.product_id=tbl_products.id and pp.purchase_id=?) as qtd', [$purchase->id])
                ->get();

        $user = Auth::user();
        $purchased = Purchase::with(['user'])
                        ->where('id', $purchase->id)
                        ->where('user_id', $user->id)->first();
        if (!is_null($purchased)) {
            return view('membro.purchase.edit')->with(compact('products', 'purchased'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase) {
        try {
            $input = $request->only('ciente', 'qtd');
            if ((int) $input['ciente'] === 1) {
                if ($this->validateQtd($input['qtd'])) {
                    DB::table('product_purchase')
                            ->where('purchase_id', '=', $purchase->id)->delete();
                    $this->storeItens($input, $purchase->id);
                    $this->setAmount($purchase->id);
                    return redirect()->route('pedido.show', $purchase->id)
                                    ->with([
                                        'aviso' => 'Encomenda alterada com sucesso.',
                                        'type' => 'success'
                    ]);
                }
                return redirect()->route('pedido.edit', $purchase->id)
                                ->with([
                                    'aviso' => 'Encomenda não alterada. Informe ao menos 1 item.',
                                    'type' => 'danger'
                ]);
            }
        } catch (Exception $ex) {
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase) {
        if ($purchase->delete()) {
            return redirect()->route('pedido.index')->with(
                            [
                                'aviso' => 'Encomenda deletada.',
                                'type' => 'info'
                            ]
            );
        }
    }

}
