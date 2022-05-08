<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $data = Skill::all();
        return view('layouts.main', compact('data'));
    }
}
