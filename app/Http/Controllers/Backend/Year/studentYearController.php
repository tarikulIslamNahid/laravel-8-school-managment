<?php

namespace App\Http\Controllers\Backend\Year;

use App\Http\Controllers\Controller;
use App\Models\StudentYear;
use Illuminate\Http\Request;

class studentYearController extends Controller
{
    public function year_index(){
$years=StudentYear::all();
return view('backend.year.index',compact('years'));
    }
    public function year_create(){
return view('backend.year.create');

    }
    public function year_store(Request $request){
        $validateData =$request->validate([
            'name'=>'required|unique:student_years',
        ]);
        $years=new StudentYear;
        $years->name=$request->name;
        $years->save();
        $notification=array(
            'message'=> 'Student Year Created Sucessfully',
            'alert-type'=> 'success',
        );
        return redirect()->route('student.year')->with($notification);
    }
    public function year_delete($id){
        StudentYear::find($id)->delete();
        $dnotification=array(
            'message'=> 'Student Year Delete Sucessfully',
            'alert-type'=> 'error',
        );
        return redirect()->route('student.year')->with($dnotification);
    }

    public function year_edit($id){
        $years= StudentYear::find($id);
        return view('backend.year.edit',compact('years'));
    }

    public function year_update(Request $request,$id){
        $years=StudentYear::find($id);

        $validateData =$request->validate([
            'name'=>'required|unique:student_years,name,'.$years->id,
        ]);
        $years->name=$request->name;
        $years->save();
        $notification=array(
            'message'=> 'Student Year Updated Sucessfully',
            'alert-type'=> 'success',
        );
        return redirect()->route('student.year')->with($notification);
    }
}
