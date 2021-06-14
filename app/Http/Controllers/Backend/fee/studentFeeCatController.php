<?php

namespace App\Http\Controllers\Backend\fee;

use App\Http\Controllers\Controller;
use App\Models\studentFeeCategory;
use Illuminate\Http\Request;

class studentFeeCatController extends Controller
{
    public function fee_cat_index(){
        $fee_categories=studentFeeCategory::all();
        return view('backend.fee.feecat.index',compact('fee_categories'));
    }

    public function fee_cat_create(){
        return view('backend.fee.feecat.create');

            }

    public function fee_cat_store(Request $request){
        $validateData =$request->validate([
            'name'=>'required|unique:student_fee_categories',
        ]);
        $fee_categories=new studentFeeCategory;
        $fee_categories->name=$request->name;
        $fee_categories->save();
        $notification=array(
            'message'=> 'Student Fee Category Created Sucessfully',
            'alert-type'=> 'success',
        );
        return redirect()->route('student.fee.category')->with($notification);
    }


    public function fee_cat_delete($id){
        studentFeeCategory::find($id)->delete();
        $notification=array(
            'message'=> 'Student Fee Category Delete Sucessfully',
            'alert-type'=> 'error',
        );
        return redirect()->route('student.fee.category')->with($notification);
    }

    public function fee_cat_edit($id){
        $fee_categories= studentFeeCategory::find($id);
        return view('backend.fee.feecat.edit',compact('fee_categories'));
    }

    public function fee_cat_update(Request $request,$id){
        $fee_categories=studentFeeCategory::find($id);

        $validateData =$request->validate([
            'name'=>'required|unique:student_fee_categories,name,'.$fee_categories->id,
        ]);
        $fee_categories->name=$request->name;
        $fee_categories->save();
        $notification=array(
            'message'=> 'Student shift Updated Sucessfully',
            'alert-type'=> 'success',
        );
        return redirect()->route('student.fee.category')->with($notification);
    }
}
