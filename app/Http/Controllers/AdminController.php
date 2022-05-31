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
        return redirect()->back()->with('message1', 'User Berhasil DiHapus');
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
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
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
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->Price = $request->Price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back()->with('message', 'Menu Berhasil DiTambah');
    }

    public function reservation(Request $request)
    {
        $data = new reservation();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->date = $request->date;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('payment_confirmation', $imagename);
        $data->image = $imagename;
        $data->message = $request->message;
        $data->save();
        Alert::success('Konfirmasi Pembayaran Berhasil', 'Mohon Tunggu Hingga Barang Sampe Di Rumah Anda');
        return redirect()->back();
    }

    public function viewreservation()
    {
        if (Auth::id()) {
            $data = reservation::all();
            return view("admin.adminreservation", compact("data"));
        } else {
            return redirect('login');
        }
    }
    public function deletereservation($id)
    {
        $data = reservation::find($id);
        $data->delete();
        return redirect()->back();
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
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->speciality = $request->spaciality;
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
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('chefimage', $imagename);
            $data->image = $imagename;
        }

        $data->name = $request->name;
        $data->speciality = $request->spaciality;
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
        $data->status = 'Waiting For Payment';
        $data->save();
        return redirect()->back();
    }

    public function inproses($id)
    {
        $data = order::find($id);
        $data->status = 'In Proses';
        $data->save();
        return redirect()->back();
    }

    public function delivery($id)
    {
        $data = order::find($id);
        $data->status = 'Delivery';
        $data->save();
        return redirect()->back();
    }

    public function done($id)
    {
        $data = order::find($id);
        $data->status = 'Done';
        $data->save();
        return redirect()->back();
    }
}
