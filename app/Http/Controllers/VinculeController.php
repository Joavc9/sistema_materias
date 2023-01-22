<?php

namespace App\Http\Controllers;

use App\Http\Requests\VinculeCreateRequest;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Vincule;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\pdf;

class VinculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index(){
        $students = Student::all();
        $subjects = Subject::all();
        $teachers = Teacher::all();
        return view('asigned.index',compact('students','subjects','teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function store(VinculeCreateRequest $request){
        $student = Student::find($request->student_id);
        $teacher_subject_name = false;
        if($student){
            $subjects = $student->subjects;
            if(!empty($subjects)){
                foreach($subjects as $subject){
                    if($subject->subject_id == $request->subject_id){
                        if($subject->teacher){
                            $teacher_subject_name = $subject->teacher->names;
                            break;
                        }
                    }
                }
            }
            if($teacher_subject_name){
                return redirect()->back()->with('danger','Esta materia ya la tiene el profesor: '.$teacher_subject_name);
            }elseif($student->credits <= 7){
                Vincule::create($request->all());
                return redirect()->back()->with('success','El registro se ha guardado existosamente, el estudiante debe tener como minímo 7 créditos y solo tiene '.$student->credits);
            }else{
                Vincule::create($request->all());
                return redirect()->back()->with('success','El registro se ha guardado existosamente');
            }
        }
    }

    /**
     * export PDF.
     *
     * @return \Illuminate\Http\Response
    */
    public function export(){
        $students = Student::all();
        $pdf = Pdf::loadView('asigned.export',compact('students'));
        return $pdf->download('subjects.pdf');
    }
}
