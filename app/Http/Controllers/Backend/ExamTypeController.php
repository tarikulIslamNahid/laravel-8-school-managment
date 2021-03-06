<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ExamType;
use Illuminate\Http\Request;

class ExamTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['examtype'] = ExamType::all();
        return view('backend.examtype.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.examtype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|unique:exam_types',
        ]);
        $classes = new ExamType;
        $classes->name = $request->name;
        $classes->save();
        $notification = array(
            'message' => 'Exam Type Created Sucessfully',
            'alert-type' => 'success',
        );
        return redirect()->route('student.examtype.index')->with($notification);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExamType  $examType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ExamTypes = ExamType::find($id);
        return view('backend.examtype.edit', compact('ExamTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExamType  $examType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ExamType = ExamType::find($id);

        $validateData = $request->validate([
            'name' => 'required|unique:exam_types,name,' . $ExamType->id,
        ]);
        $ExamType->name = $request->name;
        $ExamType->save();
        $notification = array(
            'message' => 'Exam Type Updated Sucessfully',
            'alert-type' => 'success',
        );
        return redirect()->route('student.examtype.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamType  $examType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ExamType::findOrFail($id)->delete();
        $dnotification = array(
            'message' => 'Exam Type Delete Sucessfully',
            'alert-type' => 'error',
        );
        return redirect()->back()->with($dnotification);
    }
}
