<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use Ramsey\Uuid\Uuid;

class ProjectController extends Controller
{
    //
    public function index(){
        $data = Project::All();


        return view('project.mainProject')->with('data',$data);

    }
    public function add(Request $request){
        return view('project.addProject');

    }
    public function insert(Request $request){
        $input = array(
            'title' => $request->input('title'),
            'cultivation_id' => $request->input('cultivation_id'),
            'start_at' => $request->input('start_at'),
            'end_at' => $request->input('end_at'),
            'image_url' => $request->input('image_url'),
        );
        $rules = array(
            'title' => 'required',
            'cultivation_id' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'image_url' => 'required',
        );
        $validator = Validator::make($input, $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect('addProject')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $project = new Project;
            $project->id =  Uuid::uuid4()->toString();
            $project->title =  $input('title');
            $project->start_at =  $input('start_at');
            $project->end_at =  $input('end_at');
            $project->image_url =  $input('image_url');
            $project->save();

            // redirect
            return Redirect('project');
        }
    }
    public function edit(Request $request){

    }
    public function update(Request $request){

    }

    public function delete($id){
        $project = Project::find($id);
        $project->delete();
    }
}
