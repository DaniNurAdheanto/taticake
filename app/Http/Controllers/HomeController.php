<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Cart;
use App\Models\Order;
use phpDocumentor\Reflection\PseudoTypes\False_;
use phpDocumentor\Reflection\Types\Null_;
use phpDocumentor\Reflection\Types\Nullable;
use PhpParser\Node\Stmt\Return_;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            return redirect('redirects');
        } else

            $data = food::all();
        $data2 = foodchef::all();
        return view("home", compact("data", "data2"));
    }

    public function redirects()
    {
        $data = food::all();
        $data2 = foodchef::all();
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {

            $total_menu = food::all()->count();
            $total_user = user::all()->count();
            $total_orders = order::all()->count();
            $order = order::all();
            $total_income = 0;
            foreach ($order as $order) {
                $total_income = $total_income + $order->price;
            }
            $total_inproses = Order::where('status', '=', 'Proses')->get()->count();
            $total_done = Order::where('status', '=', 'Selesai')->get()->count();

            return view('admin.adminhome', compact('total_menu', 'total_user', 'total_orders', 'total_income', 'total_inproses', 'total_done'));
        } else {
            $user_id = Auth::id();
            $count = cart::where('user_id', $user_id)->count();
            return view('home', compact('data', 'data2', 'count'));
        }
    }

    public function addcart(Request $request, $id)
    {

        if (Auth::id()) {
            $user_id = Auth::id();
            $foodid = $id;
            $quantity = $request->quantity;
            $cart = new cart;
            $cart->user_id = $user_id;
            $cart->food_id = $foodid;
            $cart->quantity = $quantity;
            $cart->save();
            Alert::success('Barang Berhasil Masuk Keranjang', 'Success Memasukan Barang Ke Keranjang');
            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }

    public function showcart(Request $request, $id)
    {
        if (Auth::id() == $id) {
            $count = cart::where('user_id', $id)->count();
            $data2 = cart::select('*')->where('user_id', '=', $id)->get();
            $data = cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();
            return view('showcart', compact('count', 'data', 'data2'));
        } else {
            return redirect()->back();
        }
    }

    public function remove($id)
    {
        $data = cart::find($id);
        $data->delete();
        Alert::success('Barang Berhasil Di Hapus', 'Success Menghapus Barang');
        return redirect()->back();
    }

    public function orderconfirm(Request $request)
    {
        $validatedata = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required',
            'address' => 'required',
        ]);
        foreach ($request->foodname as $key => $foodname) {
            $data = new order;
            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->status = 'Menunggu Pembayaran';
            $data->user_id = Auth::user()->id;
            Alert::success('Barang Berhasil DiCheckout', 'Silakan Selesaikan Pembayaran 1 X 24 Jam Di Halaman Pesanan');
            $data->save();
        }
        return redirect()->back();
    }

    public function myorders(Request $request, $id)
    {
        if (Auth::id() == $id) {
            $userid = Auth::user()->id;
            $order = order::where('user_id', $userid)->get();
            return view('myorders', compact('order'));
        } else {
            return redirect()->back();
        }
    }
    public function payment(Request $request, $id)
    {
        if (Auth::id() == $id) {
            $userid = Auth::user()->id;
            $order = order::where('user_id', $userid)->where('status', '!=', 'Selesai')->where('status', '!=', 'Pengiriman')->where('status', '!=', 'Proses')->get();
            return view('payment', compact('order', 'userid',));
        } else {
            return redirect('payment');
        }
    }
}
