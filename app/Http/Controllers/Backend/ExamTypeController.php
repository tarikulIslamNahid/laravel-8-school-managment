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
     * Display the specified resource.
     *
     * @param  \App\Models\ExamType  $examType
     * @return \Illuminate\Http\Response
     */
    public function show(ExamType $examType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExamType  $examType
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamType $examType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExamType  $examType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExamType $examType)
    {
        //
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