<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Skill;

class SkillsController extends Controller
{
    //
    public function list(){
        return view('skills.list', [
            'skills' => Skill::all()
        ]);
    }
}
