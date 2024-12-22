<?php

namespace App\Http\Controllers;
use App\Models\feedback;
use Illuminate\Support\Facades\DB;
use App\Models\rooms;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class admincontroller extends Controller
{
    public function index()
    {
        return view('ahome');
    }

    public function add_room(Request $req){

        $req->validate(
            [
                'img_name'=> 'required',
                'room_name'=> 'required',
                'price'=> 'required',
            ]
        );

        $data=DB::table('rooms')->where('img_name',$req->img_name)->get();
        if($data->isNotEmpty())
        {
            Alert::error('Error Title', 'Room is already exist....!');
            return redirect()->back();
        }
        else
        {
            $rooms = new rooms;
            $rooms->img_name=$req->img_name;
            $rooms->room_name=$req->room_name;
            $rooms->price=$req->price;
            $rooms->save();
            return redirect('abook');   
        }       
    }

    public function show_rooms()
    {
        $data=rooms::all();
        return view('abook',['data'=>$data]);
    }

    public function del_img($id)
    {
        $data=rooms::find($id);
        $data->delete();
        return redirect('abook');
    }

    public function edit_img($id)
    {
        $data=rooms::find($id);
        return view('update_img',['data'=>$data]);
    }

    public function update_room(Request $res)
    {
          $data=rooms::find($res->id);
            $data->img_name=$res->nimg_name;
            $data->room_name=$res->nroom_name;
            $data->price=$res->nprice;
            $data->save();
            return redirect("abook");
    }

    
    
}