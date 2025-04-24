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

    public function delete(Skill $skill)
    {

        $skill->delete();
        
        return redirect('/console/skills/list')
            ->with('message', 'Skill has been deleted!');        
    }

    public function addForm(){
        return view('skills.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'category' => 'required',
            'proficiency' => 'required',
            'description' => 'required',
        ]);

        $skill = new Skill();
        $skill->name = $attributes['name'];
        $skill->category = $attributes['category'];
        $skill->proficiency = $attributes['proficiency'];
        $skill->description = $attributes['description'];

        $skill->save();

        return redirect('/console/skills/list')
            ->with('message', 'Skill has been added!');
    }

    public function editForm(Skill $skill)
    {
        return view('skills.edit', [
            'skill' => $skill,
        ]);
    }

    public function edit(Skill $skill)
    {

        $attributes = request()->validate([
            'name' => 'required',
            'category' => 'required',
            'proficiency' => 'required',
            'description' => 'required',
        ]);

        $skill->name = $attributes['name'];
        $skill->category = $attributes['category'];
        $skill->proficiency = $attributes['proficiency'];
        $skill->description = $attributes['description'];

        $skill->save();

        return redirect('/console/skills/list')
            ->with('message', 'Skill has been updated!');
    }
}

