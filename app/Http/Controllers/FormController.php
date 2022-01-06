<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
class FormController extends Controller
{
    public function save(Request $request){
        $form = new Form;
        $form->title = $request['title'];
        $form->type = $request['type'];
        $form->user_id = auth()->user()->id;
        $form->save();
        return redirect('/forms');
    }
    public function get(){
            return Form::all();
        
        
    }
}
