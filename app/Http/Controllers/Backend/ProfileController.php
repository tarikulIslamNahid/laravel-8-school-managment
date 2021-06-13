<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){

        $id=Auth::user()->id;
        $user=User::find($id);
        return view('backend.profile.index',compact('user'));

    }
    public function edit(){
        $id=Auth::user()->id;
        $user=User::find($id);
        return view('backend.profile.edit',compact('user'));
    }
    public function update(Request $request){
        $id=Auth::user()->id;
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->address=$request->address;
        $user->phone=$request->phone;
        $user->gander=$request->gander;
        if($request->file('profile_photo_path')){
            $file=$request->file('profile_photo_path');
            @unlink(public_path('storage/profile-photos/'.$user->profile_photo_path));
            $fileName=date('YmdHi').$file->getClientOriginalExtension();
            $file->move(public_path('storage/profile-photos'),$fileName);
            $user['profile_photo_path']=$fileName;
        }
        $user->update();
        $dnotification=array(
            'message'=> 'User Profile Updated Sucessfully',
            'alert-type'=> 'success',
        );
        return redirect()->route('profile.view')->with($dnotification);

    }
}
