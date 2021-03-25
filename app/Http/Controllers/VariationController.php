<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariationController extends Controller
{
    public function index(){

        return view('create');
    }

    public function store(){

        $data = request()->validate([
            'opening_name' => 'required',
            'name' => 'required',
            'pgn' => 'required'
        ]);

        $opening = \App\Models\Opening::firstOrCreate(array('name' => $data['opening_name']));
        
        $opening->variations()->create($data);

        return back();

        // $variation = \App\Models\Variation::create($data);

        // $variation->opening()->create($data);

        // return back();
    }
}
