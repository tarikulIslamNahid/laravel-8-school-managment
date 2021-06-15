<?php

namespace App\Http\Controllers\Backend\fee;

use App\Http\Controllers\Controller;
use App\Models\studentClass;
use App\Models\studentFeeAmount;
use App\Models\studentFeeCategory;
use Illuminate\Http\Request;

class studentFeeAmountController extends Controller
{
public function fee_amount_index(){
    // $data['stu_fee_cat_amount']= studentFeeAmount::all();
    $data['stu_fee_cat_amount']= studentFeeAmount::select('fee_cat_id')->groupBy('fee_cat_id')->get();
    return view('backend.fee.feecatamount.index',$data);
}
public function fee_amount_create(){

    $data['classes']=studentClass::all();
    $data['fee_cat']=studentFeeCategory::all();
    return view('backend.fee.feecatamount.create',$data);

}
public function fee_amount_store(Request $request){
    $countClass=count($request->class_id);
    if($countClass !=null){
        for ($i=0; $i < $countClass ; $i++) {
           $fee_amount=new studentFeeAmount();
           $fee_amount->fee_cat_id=$request->fee_cat_id;
           $fee_amount->class_id=$request->class_id[$i];
           $fee_amount->amount=$request->amount[$i];
           $fee_amount->save();

        }
    }

    $notification=array(
        'message'=> 'Student Fee Amount Created Sucessfully',
        'alert-type'=> 'success',
    );
    return redirect()->route('student.fee.amount')->with($notification);

}
}
