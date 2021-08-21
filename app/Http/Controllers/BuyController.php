<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Item;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BuyController extends Controller
{
    public function index($id)
    {
        $item = Item::where('id', $id)->first();
        return view('guest.buy.index', compact('item'));
    }

    public function checkout($id)
    {
        $buyer = Buyer::first();
        $item = Item::where('id', $id)->first();
        $city_origin = Seller::first()->pluck('idCity');
        $city_destination = Buyer::first()->pluck('idCity');
        $weight = $item->weight;
        $price = $item->price;
        return view('guest.buy.checkout', compact(['item','city_origin','city_destination','buyer','weight','price']));
    }

    public function cart()
    {
        return view('guest.buy.cart');
    }

    public function pay($total)
    {
        $buyer = Buyer::first();
        $totals = (int)$total;
        $number = mt_rand(000, 999);
        $code = "UM".(string)($totals+$number);
        $this->_generatePaymentToken($buyer, $totals, $code);
        return Redirect::to($buyer->payment_url);
    }
    private function _generatePaymentToken($order, $totals, $code)
    {
        $this->initPaymentGateway();
        $customerDetails = [
            'first_name' => $order->name,
            'email'       => $order->user->email,
            'phone'      => $order->number,
        ];


        $params = [
            'enable_payments'     => Buyer::PAYMENT_CHANNELS,
            'transaction_details' => [
                'order_id'     => $code,
                'gross_amount' => $totals,
            ],
            'customer_details' => $customerDetails,
            'expiry'           => [
                'start_time' => date('Y-m-d H:i:s T'),
                'unit'       => Buyer::EXPIRY_UNIT,
                'duration'   => Buyer::EXPIRY_DURATION,
            ],
        ];

        $snap = \Midtrans\Snap::createTransaction($params);
        // dd($snap);exit;

        if ($snap->token) {
            $order->payment_token = $snap->token;
            $order->payment_url   = $snap->redirect_url;
        }
    }
}
