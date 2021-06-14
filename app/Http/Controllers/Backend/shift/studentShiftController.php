<?php

namespace App\Http\Controllers\Backend\shift;

use App\Http\Controllers\Controller;
use App\Models\studentShift;
use Illuminate\Http\Request;

class studentShiftController extends Controller
{
    public function shift_index(){
        $shifts=studentShift::all();
        return view('backend.shift.index',compact('shifts'));
    }

    public function shift_create(){
        return view('backend.shift.create');

            }

    public function shift_store(Request $request){
        $validateData =$request->validate([
            'name'=>'required|unique:student_shifts',
        ]);
        $shifts=new studentShift;
        $shifts->name=$request->name;
        $shifts->save();
        $notification=array(
            'message'=> 'Student Shift Created Sucessfully',
            'alert-type'=> 'success',
        );
        return redirect()->route('student.shift')->with($notification);
    }


    public function shift_delete($id){
        studentShift::find($id)->delete();
        $notification=array(
            'message'=> 'Student Shift Delete Sucessfully',
            'alert-type'=> 'error',
        );
        return redirect()->route('student.shift')->with($notification);
    }

    public function shift_edit($id){
        $shifts= studentShift::find($id);
        return view('backend.shift.edit',compact('shifts'));
    }

    public function shift_update(Request $request,$id){
        $shifts=studentShift::find($id);

        $validateData =$request->validate([
            'name'=>'required|unique:student_shifts,name,'.$shifts->id,
        ]);
        $shifts->name=$request->name;
        $shifts->save();
        $notification=array(
            'message'=> 'Student shift Updated Sucessfully',
            'alert-type'=> 'success',
        );
        return redirect()->route('student.shift')->with($notification);
    }
}
