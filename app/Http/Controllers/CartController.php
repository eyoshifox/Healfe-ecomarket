<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Cart;
use App\Models\Item;
use App\Models\Order;

class CartController extends Controller
{
    public function cart()
    {
        $cart = Cart::select('items.photo as photo', 'items.name as name', 'items.model as model', 'carts.count as count', 'items.price as price', 'carts.id as id')
        ->join('items', 'items.id', 'carts.item')
        ->where('carts.user', Auth::user()->id)
        ->where('carts.status', 'В корзине')
        ->get();
        
        $sum = Cart::selectRaw('SUM(carts.count * items.price) as count')
        ->join('items', 'items.id', 'carts.item')
        ->where('carts.user', Auth::user()->id)
        ->where('carts.status', 'В корзине')
        ->first();
        
        return view('cart', [
            'cart' => $cart,
            'sum' => $sum
        ]);
    }
    
    public function delete($id)
    {
        Cart::where('id', $id)->delete();
        
        return redirect()->back();
    }
    
    public function addToCart(Request $r)
    {
        $item = Item::find($r->id);
        $cart = Cart::where('item', $r->id)->where('user', Auth::user()->id)->where('status', 'В корзине')->first();
        
        
        if(is_null($cart)) {
            Cart::create([
                'item' => $r->id,
                'user' => Auth::user()->id,
            ]);
        } else {
            if($cart->count + 1 <= $item->amount) {
                $cart->count = $cart->count + 1;
                $cart->save();
            } else {
                return response()->json(['error' => 'amount'], 400);
            }
        }
        
        return response()->json(['success' => 'success'], 200);
    }
    
    public function setCountCart(Request $r)
    {
        $cart = Cart::find($r->id);
        $item = Item::find($cart->item);
        
        switch ($r->action) {
            case 'add':
                if($cart->count < $item->amount) {
                    $cart->count = $cart->count + 1;
                }
            break;
                
            case 'remove':
                if($cart->count > 1) {
                    $cart->count = $cart->count - 1;
                }
            break;
        }
        $cart->save();

        $sum = Cart::selectRaw('SUM(carts.count * items.price) as count')
        ->join('items', 'items.id', 'carts.item')
        ->where('carts.user', Auth::user()->id)
        ->where('carts.status', 'В корзине')
        ->first();

        return response()->json([
            'count' => $cart->count,
            'sumItem' => $cart->count * $item->price,
            'sum' => $sum->count
        ], 200);
    }

}
