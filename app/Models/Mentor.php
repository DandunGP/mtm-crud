<?php

namespace App\Models;

use App\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentor'
    ];

    public function userCourses()
    {
        return $this->hasMany(UserCourse::class);
    }
}
