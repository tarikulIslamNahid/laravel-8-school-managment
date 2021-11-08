<?php

namespace App\Http\Controllers\Backend\classes;

use App\Http\Controllers\Controller;
use App\Models\studentClass;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function class_index()
    {
        $classes = studentClass::all();
        return view('backend.class.index', compact('classes'));
    }
    public function class_create()
    {
        return view('backend.class.create');
    }
    public function class_store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|unique:student_classes',
        ]);
        $classes = new studentClass;
        $classes->name = $request->name;
        $classes->save();
        $notification = array(
            'message' => 'Class Created Sucessfully',
            'alert-type' => 'success',
        );
        return redirect()->route('student.class')->with($notification);
    }
    public function class_delete($id)
    {
        studentClass::find($id)->delete();
        $dnotification = array(
            'message' => 'Class Delete Sucessfully',
            'alert-type' => 'error',
        );
        return redirect()->route('student.class')->with($dnotification);
    }
    public function class_edit($id)
    {
        $classes = studentClass::find($id);
        return view('backend.class.edit', compact('classes'));
    }
    public function class_update(Request $request, $id)
    {
        $classes = studentClass::find($id);

        $validateData = $request->validate([
            'name' => 'required|unique:student_classes,name,' . $classes->id,
        ]);
        $classes->name = $request->name;
        $classes->save();
        $notification = array(
            'message' => 'Class Updated Sucessfully',
            'alert-type' => 'success',
        );
        return redirect()->route('student.class')->with($notification);
    }
}
