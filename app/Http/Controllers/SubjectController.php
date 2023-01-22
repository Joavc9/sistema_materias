<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectCreateRequest;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index(){
        $subjects = Subject::all();
        return view('subjects.index',compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function store(SubjectCreateRequest $request){
        Subject::create($request->all());
        return redirect()->back()->with('success','El registro se ha guardado existosamente');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $subject = Subject::findOrFail($id);
        return view('subjects.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubjectCreateRequest $request, $id){
        $subject = Subject::findOrFail($id);
        $subject->update($request->all());
        return redirect()->route('subject.index')->with('success','El registro se ha actualizado existosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $subject = Subject::findOrFail($id);
        $subject->delete();
        return redirect()->route('subject.index')->with('success','El registro se ha eliminado existosamente');
    }
}
