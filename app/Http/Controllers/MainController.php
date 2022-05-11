<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use App\Models\Skill;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $skill = Skill::select()->orderByDesc('id')->get();

        $education = Education::select()->orderByDesc('id')->get();

        $getProfile = Profile::select()->get();
        foreach ($getProfile as $profile)
        {
            $name = $profile['name'];
            $first_name = explode(" ", $name);
            $phone_number = $profile['phone_number'];
            $wa = explode(" ", $phone_number);
            $email = $profile['email'];
            $city = $profile['city'];
            $province = $profile['province'];
            $photo = $profile['photo'];
            $twitter = $profile['twitter'];
            $facebook = $profile['facebook'];
            $linked = $profile['linked'];
            $instagram = $profile['instagram'];
            $start_experience = $profile['start_experience'];
            $now = Carbon::now()->year;
            $exp = $now - $start_experience;
        }

        $experiences = Experience::select()->orderByDesc('id')->get();

        $project = Project::select()->orderByDesc('id')->limit(5)->get();

        return view('layouts.main', compact('skill', 'name', 'phone_number', 'email', 'city', 'province', 'photo', 'twitter', 'facebook', 'linked', 'instagram', 'now', 'exp', 'first_name', 'education', 'experiences', 'wa', 'project'));
    }

    public function send_message(Request $request)
    {
        $name = $request->input('name');
        $email = str_replace("'", "", $request->input('email'));
        $subject = str_replace("'", "", $request->input('subject'));
        $message = $request->input('message');
        $create_at = Carbon::now();

        Contact::insert([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
            'created_at' => $create_at
        ]);

        return redirect('/');
    }
}
