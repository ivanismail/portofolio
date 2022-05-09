<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Skill;
use App\Models\Profile;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $skill = Skill::select()->orderByDesc('id')->get();

        $getProfile = Profile::select()->get();
        foreach ($getProfile as $profile)
        {
            $name = $profile['name'];
            $first_name = explode(" ", $name);
            $phone_number = $profile['phone_number'];
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

        return view('layouts.main', compact('skill', 'name', 'phone_number', 'email', 'city', 'province', 'photo', 'twitter', 'facebook', 'linked', 'instagram', 'now', 'exp', 'first_name'));
    }
}
