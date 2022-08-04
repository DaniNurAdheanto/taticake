<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function users()
    {
        $data = user::all();
        return view("admin.users", compact("data"));
    }

    public function deleteusers($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back()->with('message1', 'Pengguna Berhasil DiHapus');
    }

    public function deletemenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back()->with('message1', 'Menu Berhasil DiHapus');
    }

    public function foodmenu()
    {
        $data = food::all();
        return view("admin.foodmenu", compact("data"));
    }

    public function updateview($id)
    {
        $data = food::find($id);
        return view("admin.updateview", compact("data"));
    }

    public function update(Request $request, $id)
    {
        $data = food::find($id);
        $image = $request->image;
        $request->file('image')->store('menu');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/menu'), $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->Price = $request->Price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back()->with('message', 'Menu Berhasil Di Update');
    }


    public function upload(Request $request)
    {
        $data = new food;
        $image = $request->image;
        $request->file('image')->store('menu');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/menu'), $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->Price = $request->Price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back()->with('message', 'Menu Berhasil DiTambah');
    }

    public function konfirmasipayment(Request $request)
    {
        $data = new reservation();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->date = $request->date;
        $image = $request->image;
        $request->file('image')->store('konfirmasi-pembayaran');
        $imagename = date('Ymdtime') . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/konfirmasi-pembayaran'), $imagename);
        $data->image = $imagename;
        $data->message = $request->message;
        $data->save();
        Alert::success('Konfirmasi Pembayaran Berhasil', 'Mohon Tunggu Hingga Barang Sampe Di Rumah Anda');
        return redirect()->back();
    }

    public function viewkonfirmasipayment()
    {
        if (Auth::id()) {
            $data = reservation::all();
            return view("admin.adminkonfirmasipayment", compact("data"));
        } else {
            return redirect('login');
        }
    }
    public function deletekonfirmasipayment($id)
    {
        $data = reservation::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Konfirmasi Pembayaran Berhasil DiHapus');
    }

    public function viewchef()
    {
        $data = foodchef::all();
        return view("admin.adminchef", compact("data"));
    }

    public function uploadchef(Request $request)
    {
        $data = new foodchef;
        $image = $request->image;
        $request->file('image')->store('pembuat');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/pembuat'), $imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();
        return redirect()->back();
    }

    public function updatechef($id)
    {
        $data = foodchef::find($id);
        return view("admin.updatechef", compact("data"));
    }

    public function updatefoodchef(Request $request, $id)
    {
        $data = foodchef::find($id);
        $image = $request->image;
        if ($image) {
            $request->file('image')->store('pembuat');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/pembuat'), $imagename);
            $data->image = $imagename;
        }
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();
        return redirect()->back();
    }

    public function deletechef($id)
    {
        $data = foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orders()
    {
        $data = order::all();
        return view('admin.orders', compact('data'));
    }

    public function deleteorders($id)
    {
        $data = order::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Pesanan Berhasil DiHapus');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $data = order::where('name', 'Like', '%' . $search . '%')->orWhere('foodname', 'Like', '%' . $search . '%')
            ->get();
        return view('admin.orders', compact('data'));
    }

    public function cetaklaporan()
    {
        $data = order::all();
        return view('admin.cetaklaporan', compact('data'));
    }

    public function statusorders()
    {
        $data = order::all();
        return view('admin.statusorders', compact('data'));
    }

    public function waitingforpayment($id)
    {
        $data = order::find($id);
        $data->status = 'Menunggu Pembayaran';
        $data->save();
        return redirect()->back();
    }

    public function inproses($id)
    {
        $data = order::find($id);
        $data->status = 'Proses';
        $data->save();
        return redirect()->back();
    }

    public function delivery($id)
    {
        $data = order::find($id);
        $data->status = 'Pengiriman';
        $data->save();
        return redirect()->back();
    }

    public function done($id)
    {
        $data = order::find($id);
        $data->status = 'Selesai';
        $data->save();
        return redirect()->back();
    }
}
