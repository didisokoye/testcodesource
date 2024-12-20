<?php

namespace App\Http\Controllers;

use App\Models\Ue;
use Illuminate\Http\Request;

class UeController extends Controller
{

    public function store(Request $request): void
    {
        
        Ue::create([
            'libelle' => $request->libelle,

        ]);
    }
    
}   

