<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opening;


class OpeningController extends Controller
{

    public function index(){

        $opening = Opening::get();

        return view('opening', [
            'opening' => $opening,
        ]);
    }

    public function show($opening){

        $opening = Opening::findOrFail($opening);

        return view('visualizer', [
            'opening' => $opening,
        ]);
    }

}
