<?php

namespace App\Http\Controllers;
use App\Models\register;
use App\Models\book;
use App\Models\rooms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

use Session;
class c1 extends Controller
{
    public function login(Request $req)
    {
        $data=DB::table('register')->where('email',$req->email)->where('password',$req->password)->get();
        if($data->isNotEmpty())
        {
            $role=DB::table('register')->where('email',$req->email)->where('role','LIKE','1')->get();
            if($role->isNotEmpty())
            {
                $uname=DB::table('register')->where('email',$req->email)->get('username');
                $req->session()->put('user',$data[0]->username);
                $req->session()->put('email',$data[0]->email);
                return redirect('ahome');
            }
            else
            {
                $req->session()->put('user',$data[0]->username);
                $req->session()->put('email',$data[0]->email);
                return redirect('home');
            }
        }
        else
        {
            Alert::warning('Warning Title', 'Invalid Email OR Password..!');
            return redirect()->back()->withErrors(['failure'=>'Invalide Email or Password.']);
        }
    }


    public function show()
    {
        $data=register::all();
        return view('aregister',['data'=>$data]);
    }

    public function disp_rooms()
    {
        $data=rooms::all();
        return view('book',['data'=>$data]);
    }

    public function Insert_feedback(Request $req){
        if(session('user'))
        {
            $req=DB::table('feedback')->insert(['name'=>$req->name,'email'=>$req->email,'message'=>$req->message]);
            return redirect('contact');
        }
        else
        {
            Alert::error('Error Title', 'Your are not login so you can not Give Feedback');
            return redirect('contact');
        }      
    }

    public function disp_feed(Request $req)
    {
        $data=DB::table('feedback')->get();
        return view('afeedback',['data'=>$data]);
    }

    public function flush(Request $req)
    {
        $r=$req->session()->flush();
        return redirect('home');
    }

    public function check($id)
    {
        if(session('user'))
        {
            $data=rooms::find($id);
            return view('booking',['data'=>$data]);
        }
        else
        {
            Alert::error('Error Title', 'Your are not login so you can not Booking');
            return redirect('home');
        }
    }

    public function add_booking(Request $req)
    {
        $req->validate(
            [
                'phone'=> 'required|numeric|digits:10'
            ]
        );
        $book = new book;
            $book->fname=$req->fname;
            $book->lname=$req->lname;
            $book->email=$req->email;
            $book->phone=$req->phone;
            $book->address=$req->address;
            $book->room_name=$req->room_name;
            $book->room_price=$req->room_price;
            $book->check_in=$req->check_in;
            $book->check_out=$req->check_out;
            $book->adult=$req->adult;
            $book->children=$req->child;
            $book->additional_requests=$req->additional;
            $book->save();
            Alert::success('Success Title', 'BOOKING Success Full');
            return redirect('book');
    }

    public function show_booking()
    {
        $data=DB::table('book')->where('fname',session('user'))->get();
        if($data->isNotEmpty())
        {
            return view('my_booking',['data'=>$data]);
        }
        else
        {
            Alert::warning('Warning Title', 'Tame booking nahi kariyu');
            return redirect('book');
        }
        
    }

    public function show_all_booking()
    {
        $data=book::all();
        return view('show_booking',['data'=>$data]);
    }

    public function delete_booking($id)
    {
        $data=book::find($id);
        $data->delete();
        Alert::success('Success Title', 'Your Booking SuccessFulli Cancel');
        return redirect('Home');
    }
}
