<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\setup;
use App\categoria;
use App\content;
use App\portifolio;
use App\visit;
use Exception;

class frontController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $setups = setup::all()->first();
        $cats = categoria::where('status', 'on')->get();
        $visita = visit::orderBy('num', 'desc')->first();
        $servico = content::where('categoria', 'servicos')->first();
        $servico->rot = categoria::where('titulo', 'Serviços')->value('rot');

        $portifolio = DB::table('portifolios')->first();

        return view('frontend.index', [
            'setups' => $setups,
            'cats' => $cats,
            'servico' => $servico,
            'visita' => $visita,
            'portifolio' => $portifolio
        ]);
    }
}
