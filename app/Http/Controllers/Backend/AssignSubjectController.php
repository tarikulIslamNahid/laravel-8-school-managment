<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\assignSubject;
use Illuminate\Http\Request;

class AssignSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['assignSubjects'] = assignSubject::select('class_id')->groupBy('class_id')->get();
        return view('backend.subjectassign.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\assignSubject  $assignSubject
     * @return \Illuminate\Http\Response
     */
    public function show(assignSubject $assignSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\assignSubject  $assignSubject
     * @return \Illuminate\Http\Response
     */
    public function edit(assignSubject $assignSubject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\assignSubject  $assignSubject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, assignSubject $assignSubject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\assignSubject  $assignSubject
     * @return \Illuminate\Http\Response
     */
    public function destroy(assignSubject $assignSubject)
    {
        //
    }
}
