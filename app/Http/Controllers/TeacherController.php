<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherCreateRequest;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index(){
        $teachers = Teacher::all();
        return view('teachers.index',compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function store(TeacherCreateRequest $request){
        Teacher::create($request->all());
        return redirect()->back()->with('success','El registro se ha guardado existosamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherCreateRequest $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        return redirect()->route('teacher.index')->with('success','El registro se ha actualizado existosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->route('teacher.index')->with('success','El registro se ha eliminado existosamente');
    }
}
