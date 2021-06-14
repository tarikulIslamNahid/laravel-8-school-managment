<?php

namespace App\Http\Controllers\Backend\group;

use App\Http\Controllers\Controller;
use App\Models\studentGroup;
use Illuminate\Http\Request;

class StudentGroupController extends Controller
{
    public function group_index(){
        $groups= studentGroup::all();
        return view('backend.group.index',compact('groups'));
    }
    public function group_create(){
        return view('backend.group.create');

    }
    public function group_store(Request $request){
        $validateData =$request->validate([
            'name'=>'required|unique:student_groups',
        ]);
        $years=new studentGroup;
        $years->name=$request->name;
        $years->save();
        $notification=array(
            'message'=> 'Student Group Created Sucessfully',
            'alert-type'=> 'success',
        );
        return redirect()->route('student.group')->with($notification);
    }

    public function group_delete($id){
        studentGroup::find($id)->delete();
        $dnotification=array(
            'message'=> 'Student Group Delete Sucessfully',
            'alert-type'=> 'error',
        );
        return redirect()->route('student.group')->with($dnotification);
    }
    public function group_edit($id){
        $groups= studentGroup::find($id);
        return view('backend.group.edit',compact('groups'));
    }

    public function group_update(Request $request,$id){
        $groups=studentGroup::find($id);

        $validateData =$request->validate([
            'name'=>'required|unique:student_groups,name,'.$groups->id,
        ]);
        $groups->name=$request->name;
        $groups->save();
        $notification=array(
            'message'=> 'Student Group Updated Sucessfully',
            'alert-type'=> 'success',
        );
        return redirect()->route('student.group')->with($notification);
    }
}
