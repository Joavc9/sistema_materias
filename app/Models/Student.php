<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_number', 'names', 'email', 'city', 'address', 'phone', 'semester'
    ];

    protected $appends = [
        'credits'
    ];

    public function subjects(){
        return $this->hasMany(Vincule::class,'student_id');
    }

    public function getCreditsAttribute(){
        $student = Student::find($this->id);
        $credits = 0;
        foreach($student->subjects as $subject){
            $credits += $subject->subject->credits;
        }
        return $credits;
    }
}
