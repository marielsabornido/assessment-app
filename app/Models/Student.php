<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];  
    
    protected $table = 'student';

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    public function getReverseNameAttribute()
    {
        return $this->last_name . ', ' . $this->first_name;
    }
    public function getFormattedDateEnrolledAttribute()
    {
        return Carbon::parse($this->date_enrolled)->format('Y-m-d\TH:i');
    }
}
