<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Mentor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_name', 'course_id', 'course', 'mentor_id', 'mentor', 'member_id'
    ];

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }

    public function mentors()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function members()
    {
        return $this->belongsTo(Member::class);
    }
}
