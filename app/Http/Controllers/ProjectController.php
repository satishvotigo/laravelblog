<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class ProjectController extends Controller
{   
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index() {
        $projects = Project::all();
        $encrypted = Crypt::encryptString('Hello world.');
        // dd($encrypted);    
        $decrypted = Crypt::decryptString($encrypted);
        // dd($decrypted);
        return view('projects.index', compact('projects'));
    }

    public function create(){
        return view('projects.create', compact('projects'));
    }

    public function store(){
        /* $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();*/
        $attributes = request()->validate([
            'title' => 'required|min:3|max:10',
            'description' => 'required|min:3|max:400'
        ]);
        Project::create($attributes);
        /* Project::create([
            'title' => request('title'),
            'description' => request('description'),
        ]); */

        return redirect('/projects');
    }

    public function show(Project $project){
        // $project = Project::find($id);
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project){
        // $project = Project::find($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project){
        // $project = Project::find($id);
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects/'.$project->id);
    }

    public function destroy(Project $project){

        $project->delete();
        return redirect('/projects/');
    }
}
