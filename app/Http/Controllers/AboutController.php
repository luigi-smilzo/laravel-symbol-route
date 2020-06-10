<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $stakeholders = [
            'John',
            'Carl',
            'Michael'
        ];

        return view('about', compact('stakeholders'));
    }
}
