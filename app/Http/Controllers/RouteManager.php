<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteManager extends Controller
{
    /**
     * Returns the presentation view.
     */
    public function showPresentation(){
        return view('presentation');
    }

    
    
}
