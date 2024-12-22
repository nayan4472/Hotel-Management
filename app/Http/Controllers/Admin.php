<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\register;

class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ahome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $req->validate(
            [
                'username'=> 'required',
                'email'=> 'required|email',
                'password'=> 'required|confirmed',
                'password_confirmation'=> 'required',
            ]
        );

        $data=DB::table('register')->where('email',$req->email)->get();
        if($data->isNotEmpty())
        {
            Alert::error('Error Title', 'Email is already exist.');
            return redirect()->back();
        }
        else
        {
            $register = new register;
            $register->username=$req->username;
            $register->email=$req->email;
            $register->password=$req->password;
            $register->cpassword=$req->password_confirmation;
            $register->save();
            return view('index');   
        }  
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=register::find($id);
        return view('aedit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $res,string $id)
    {
        $data=register::find($res->id);
        $data->email=$res->email;
        $data->username=$res->username;
        $data->password=$res->password;
        $data->cpassword=$res->cpassword;
        $data->role=$res->role;  
        $data->update();
        return redirect("aregister");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=register::find($id);
        $data->delete();
        return redirect('aregister');
    }
}
