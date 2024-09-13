<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\FormModel;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail; // Import the Mail facade
use App\Mail\FormSubmitted; // Assuming you'll create this mail class

class FormController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
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
            if(Mail::to('contact@enernew.in')->send(new FormSubmitted($data))){
                return "Success";
            }else{
                return "Failed";
            };
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
