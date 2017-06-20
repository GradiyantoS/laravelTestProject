<?php

namespace App\Http\Controllers;

use App\Cultivation;
use Illuminate\Http\Request;
use Validator;

class CultivationController extends Controller
{
    //
    public function index(){
        $data = Cultivation::all();
        return view('cultivation.mainCultivation')->with('data',$data);
    }
    public function search(Request $request){
        $desc = $request->input('description');

        if($desc != null){
            $data = Cultivation::where('description','=',$desc)->get();

        }else{
            $data = Cultivation::all();
        }
        return view('cultivation.mainCultivation')->with('data',$data);
    }
    public function addCultivation(){
        return view('cultivation.addCultivation');
    }

    public function insertCultivation(Request $request){
        $desc = $request->input('description');
        $input = array(
            'description' => $desc
        );
        $rules = array(
            'description'       => 'required'
        );
        $validator = Validator::make($input, $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect('addCultivation')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $cultivation = new Cultivation;
            $cultivation->description =  $desc;
            $cultivation->save();

            // redirect
            return Redirect('cultivation');
        }
    }

    public function editCultivation($id){
        $data = Cultivation::find($id);
        return view('cultivation.editCultivation')->with('data',$data);
    }
    public function updateCultivation(Request $request){
        $id = $request->input('id');
        $desc = $request->input('description');
        $desc = $request->input('description');
        $input = array(
            'description' => $desc
        );
        $rules = array(
            'description'       => 'required'
        );
        $validator = Validator::make($input, $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect('cultivation')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $cultivation = Cultivation::find($id);
            $cultivation->description =  $desc;
            $cultivation->save();
            // redirect
            return Redirect('cultivation');
        }
    }

    public function deleteCultivation($id){
        $cultivation = Cultivation::find($id);
        $cultivation->delete();
        return Redirect('cultivation');
    }
}
