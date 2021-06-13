<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\RequestGuard;
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

    public function passedit(){
        return view('backend.profile.passreset');

    }
    public function passupdate(Request $request){
        // $validateData =$request->validate([
        //     'oldpass' =>'required',
        //     'newpass' =>'required|confirmed',
        // ]);
        $dbPass =Auth::user()->password;
        if(Hash::check($request->oldpass, $dbPass)){

            $user=User::find(Auth::id());
            $user->password=Hash::make($request->newpass);
            $user->save();
            Auth::logout();
            return redirect()->route('login');
        }else{
            $notification=array(
                'message'=> 'Password reset Failed',
                'alert-type'=> 'error',
            );
            return redirect()->back()->with($notification);
        }

    }

}
