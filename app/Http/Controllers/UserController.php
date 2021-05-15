<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Feedback;
use Illuminate\Http\Request;

class UserController extends Controller
{ function UserView()
    {
        $assignment=Assignment::all();
        $ldate = date('Y-m-d H:i:s');
        foreach ($assignment as $key) {

            $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $key->dead_line);
            $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i',$ldate);
            $diff_in_days = $to->diffInDays($from);
            $key->dd=$diff_in_days;
            $key->update();



           }
        return view('user.active_assignment',compact('assignment'));
    }
    public function new_assignment()
    {
        return view('user.new_assignment');
    }

    public function feedback(Request $req)
    {
        $total_rating=(int)$req->star1+(int)$req->star2+(int)$req->star3+(int)$req->star4+(int)$req->star5;
        $feedback=New Feedback();
        $feedback->user_id=$req->id;
        $feedback->review_title=$req->reviewtitle;
        $feedback->grade=$req->grade;
        $feedback->feedback=$req->feedbackwrite;
        $feedback->rating=$total_rating;
        $feedback->save();
        return redirect()->back()->with('message', 'New Assignment Added');

    }

    function Completed()
    {    $assignment=Assignment::all();
        $ldate = date('Y-m-d H:i:s');
        foreach ($assignment as $key) {

            $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $key->dead_line);
            $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i',$ldate);
            $diff_in_days = $to->diffInDays($from);
            $key->dd=$diff_in_days;
            $key->update();



           }
        return view('user.completed_assignment',compact('assignment'));
    }
    function Expired()
    {   $assignment=Assignment::all();
        $ldate = date('Y-m-d H:i:s');
        foreach ($assignment as $key) {

            $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $key->dead_line);
            $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i',$ldate);
            $diff_in_days = $to->diffInDays($from);
            $key->dd=$diff_in_days;
            $key->update();



           }
        return view('user.expired_assignment',compact('assignment'));
    }
    function Rework()
    {    $assignment=Assignment::all();
        $ldate = date('Y-m-d H:i:s');
        foreach ($assignment as $key) {

            $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $key->dead_line);
            $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i',$ldate);
            $diff_in_days = $to->diffInDays($from);
            $key->dd=$diff_in_days;
            $key->update();



           }
        return view('user.rework_assignment',compact('assignment'));
    }
    public function submitnew(Request $request)
    {


        $assignment=New Assignment();
        $assignment->email=$request->email;
        $assignment->subjects=$request->subject;
        $assignment->no_of_pages=$request->pages;
        $assignment->dead_line=$request->deadline;
        $assignment->level_of_assignment=$request->level_of_assignment;
        $assignment->refrence_of_assignment=$request->rfa;
        $assignment->phone_number=$request->phone;
        $assignment->desc=$request->desc;
        $assignment->callback_time=$request->callback_time;
        $assignment->save();
        return redirect()->back()->with('message', 'New Assignment Added');

    }
    public function onlineassignmenthelp()
    {
        return view('user.onlineassignmenthelp');
    }
    public function dissertationwrittinghelp()
    {
        return view('user.dissertationwrittinghelp');
    }
    public function a2zassignment()
    {
        return view('user.a2zassignment');
    }

    public function review()
    {
        return view('user.review');
    }
    public function review2()
    {
        return view('user.review2');
    }

    public function feature()
    {
        return view('user.feature');
    }
}
