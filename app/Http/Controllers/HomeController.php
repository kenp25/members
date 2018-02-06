<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('home', ['members' => $members]);
    }

    public function getMember($id){
        $member = Member::find($id);
        return view('member-profile', ['member' => $member]);

    }
}
