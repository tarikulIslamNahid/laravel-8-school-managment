<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(){

      $data['users']=User::all();
      return view('backend.user.index',$data);
   }
   public function create(){
      return view('backend.user.create');

   }
   public function store(Request $request){
    $validateData =$request->validate([
        'email' =>'required|unique:users',
        'email' =>'required',
    ]);

    $data= new User();
    $data->email=$request->email;
    $data->name=$request->name;
    $data->usertype=$request->usertype;
    $data->password=bcrypt($request->password);
    $data->save();
    $notification=array(
        'message'=> 'User Created Sucessfully',
        'alert-type'=> 'success',
    );
    return redirect()->route('user.view')->with($notification);
   }
   public function delete($id){
       User::findOrFail($id)->delete();
       $dnotification=array(
        'message'=> 'User Delete Sucessfully',
        'alert-type'=> 'success',
    );
    return redirect()->route('user.view')->with($dnotification);
   }

   public function edit($id){

      $user=User::findOrFail($id);
      return view('backend.user.edit',compact('user'));

   }
   public function update(Request $request,$id){

    $user = User::find($id);

    $user->email = $request->email;
    $user->name = $request->name;
    $user->usertype = $request->usertype;
    $user->update();
    $dnotification=array(
        'message'=> 'User Updated Sucessfully',
        'alert-type'=> 'success',
    );
    return redirect()->route('user.view')->with($dnotification);


   }
}
