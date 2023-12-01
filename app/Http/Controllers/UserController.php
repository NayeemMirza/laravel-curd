<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users.index',[
            'users'=> Users::latest()->paginate(5)
        ]);
    }

    public function create(){
        return view('users.create');
    }
    public function store(Request $request){ 
        $this->validate($request,[
            'firstName'=> 'required',
            'lastName'=> 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'designation'=> 'required',
        ]);

        $user = new Users;
        $user->firstName = $request->firstName; 
        $user->lastName = $request->lastName; 
        $user->phone = $request->phone; 
        $user->email = $request->email; 
        $user->designation = $request->designation; 

        $user->save(); 
        return redirect('/users')->with('success','User Added Successfully');
    }

    public function edit($id){
        $user = Users::where('id',$id)->first();
        return view('users.edit',['user'=> $user]); 
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'firstName'=> 'required',
            'lastName'=> 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'designation'=> 'required',
        ]);

        $user = Users::where('id',$id)->first();
        $user->firstName = $request->firstName; 
        $user->lastName = $request->lastName; 
        $user->phone = $request->phone; 
        $user->email = $request->email; 
        $user->designation = $request->designation; 

        $user->save(); 
        return redirect('/users')->with('success','User Edited Successfully');
    }

    public function delete($id){
        $user = Users::where('id',$id)->first();
        $user->delete();
        return back()->with('success','User Deleted Successfully');
    }
}
