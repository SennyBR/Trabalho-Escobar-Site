<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;

class PublicController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::paginate(6); 

        return view('publico.index', compact('veiculos'));
    }
}
