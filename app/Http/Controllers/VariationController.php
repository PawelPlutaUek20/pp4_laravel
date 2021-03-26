<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opening;

class VariationController extends Controller
{
    public function index(){

        return view('create', [
            'opening' => Opening::get(),
        ]);
    }

    public function store(){

        $data = request()->validate([
            'opening_name' => 'required',
            'name' => 'required',
            'pgn' => 'required'
        ]);

        $opening = Opening::firstOrCreate(array('name' => $data['opening_name']));
        
        $opening->variations()->create($data);

        return redirect('/opening');
    }
}
