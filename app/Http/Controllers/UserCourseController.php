<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Member;
use App\Models\Mentor;
use App\Models\UserCourse;
use Illuminate\Http\Request;

class UserCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = UserCourse::all();
        return view('usercourse.index', [
            'members' => $members,
            'title' => 'UserCourse'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = Member::all();
        $course = Course::all();
        $mentor = Mentor::all();
        return view('usercourse.insert', [
            'member' => $member,
            'mentor' => $mentor,
            'course' => $course,
            'title' => 'UserCourse'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'course' => 'required',
            'mentor' => 'required',
        ]);

        $member = Member::where('id', $request->name)->first();
        $course = Course::where('id', $request->course)->first();
        $mentor = Mentor::where('id', $request->mentor)->first();

        UserCourse::create([
            'member_id' => $request->name,
            'member_name' => $member->nama,
            'course_id' => $request->course,
            'course' => $course->course,
            'mentor_id' => $request->mentor,
            'mentor' => $mentor->mentor,
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCourse  $member
     * @return \Illuminate\Http\Response
     */
    public function show(UserCourse $userCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCourse  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCourse $userCourse)
    {
        $member = Member::all();
        $course = Course::all();
        $mentor = Mentor::all();
        return view('usercourse.edit', ['usercourse' => $userCourse, 'member' => $member, 'course' => $course, 'mentor' => $mentor, 'title' => 'UserCourse']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserCourse  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserCourse $userCourse)
    {
        $request->validate([
            'name' => 'required|max:50',
            'course' => 'required',
            'mentor' => 'required',
        ]);

        $member = Member::where('id', $request->name)->first();
        $course = Course::where('id', $request->course)->first();
        $mentor = Mentor::where('id', $request->mentor)->first();

        $userCourse->update([
            'member_id' => $request->name,
            'member_name' => $member->nama,
            'course' => $course->course,
            'mentor_id' => $request->mentor,
            'mentor' => $mentor->mentor,
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCourse  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCourse $userCourse)
    {
        $userCourse->delete();
        return redirect('/');
    }
}
