<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    public function index(){
        return view('children.index');
    }

    public function create(Request $request){
        $request->validate([
        'child_num_id'=>'required|numeric',
        'full_name_children'=>'required|string',
        'birthday'=>'required|date',
        'admission'=>'required|date',
        'address'=>'required|string',
        'full_name_mother'=>'required|string',
        'phone_number_mother'=>'required|string',
        'pass_mother'=>'required|string',
        'full_name_father'=>'required|string',
        'phone_number_father'=>'required|string',
        'pass_father'=>'required|string',
        'phone_number_home'=>'required|string',
        'another_address'=>'nullable|string',
        'photo_of_child'=>'nullable|string'
        ]);

        return Children::create($request->all());
    }

    public function show(Request $request){
        return Children::findOrFail($id);
    }

    public function update(Request $request, $id){
        $child = Children::findOrFail($id);

        $request->validate([
            'child_num_id'=>'required|numeric',
            'full_name_children'=>'required|string',
            'birthday'=>'required|date',
            'admission'=>'required|date',
            'address'=>'required|string',
            'full_name_mother'=>'required|string',
            'phone_number_mother'=>'required|string',
            'pass_mother'=>'required|string',
            'full_name_father'=>'required|string',
            'phone_number_father'=>'required|string',
            'pass_father'=>'required|string',
            'phone_number_home'=>'required|string',
            'another_address'=>'nullable|string',
            'photo_of_child'=>'nullable|string'
            ]);

        $child->update($request->all());

        return $child;
    }

    public function destroy($id)
    {
        $child = Children::findOrFail($id);
        $child->delete();
        return response()->json(null, 204);
    }
}
