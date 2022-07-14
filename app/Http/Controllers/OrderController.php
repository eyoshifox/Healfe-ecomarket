<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::where('orders.user', Auth::user()->id)
        ->orderBy('orders.created_at', 'desc')
        ->get();

        return view('myorder', [
            'orders' => $orders
        ]);
    }
    
    static function status($status)
    {
        switch($status) {
            case 'Новый':
                return '<span class="text-success">'.$status.'</span>';
            case 'В доставке':
                return '<span class="text-warning">'.$status.'</span>';
            case 'Выполнен':
                return '<span class="text-secondary">'.$status.'</span>';
            case 'Отменен':
                return '<span class="text-danger">'.$status.'</span>';
        }
    }

    static function countItem($order)
    {
        return Cart::where('carts.order', $order)->sum('count');
    }

    public function deleteOrder($id)
    {
        Order::where('id', $id)->delete();

        return redirect()->back();
    }

    public function order(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'password' => 'required|string|current_password:web'
        ]);

        if($validator->fails()) return response()->json($validator->errors(), 400);

        $order = Order::create([
            'user' => Auth::user()->id
        ]);

        $cart = Cart::where('status', 'В корзине')->where('user', Auth::user()->id)->get();

        foreach($cart as $c) {
            $c->status = 'Заказан';
            $c->order = $order->id;
            $c->save();

            $item = Item::find($c->item);

            $item->amount = $item->amount - $c->count;
            $item->save();
        }
        return response()->json(['success' => 'success'], 200);
    }
}
