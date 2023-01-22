<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index(){
        $students = Student::all();
        return view('students.index',compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function store(StudentCreateRequest $request){
        Student::create($request->all());
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
        $student = Student::findOrFail($id);
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentCreateRequest $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('student.index')->with('success','El registro se ha actualizado existosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index')->with('success','El registro se ha eliminado existosamente');
    }
}
