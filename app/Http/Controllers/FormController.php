<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\FormModel;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        if($request->validate([
            'form_name' => 'required|string',
            'form_fields' => 'required|array',
        ])){
            $data = new FormModel;
            $data->name = $request->input('form_name');
            $data->fields = json_encode($request->input('form_fields'));
            $data->save();
    
            return $data;
        }else{
            return "Input is not valid";
        };


    }
    public function show(Request $request) {
        // return FormModel::all();
        return view('auth.forms', ['data' => FormModel::all()]);
    }
}
