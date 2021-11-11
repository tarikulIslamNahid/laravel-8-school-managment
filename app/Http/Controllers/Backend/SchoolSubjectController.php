<?php


namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\schoolSubject;
use Illuminate\Http\Request;

class SchoolSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['schoolSub'] = schoolSubject::all();
        return view('backend.subject.index', $data);
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
     * @param  \App\Models\schoolSubject  $schoolSubject
     * @return \Illuminate\Http\Response
     */
    public function show(schoolSubject $schoolSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\schoolSubject  $schoolSubject
     * @return \Illuminate\Http\Response
     */
    public function edit(schoolSubject $schoolSubject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\schoolSubject  $schoolSubject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, schoolSubject $schoolSubject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\schoolSubject  $schoolSubject
     * @return \Illuminate\Http\Response
     */
    public function destroy(schoolSubject $schoolSubject)
    {
        //
    }
}