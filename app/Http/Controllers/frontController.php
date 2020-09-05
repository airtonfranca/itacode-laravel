<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frontController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $setups = DB::table('setups')->first();
        if (!empty($data)) {
            $socials = explode(',', $data->social);
        } else {
            $socials = [];
        }
        $cats = DB::table('categorias')->where('status', 'on')->get();

        $servico = DB::table('contents')->where('categoria', 'servicos')->first();
        $servico->rot = DB::table('categorias')->where('titulo', 'Serviços')->value('rot');
        $visita = DB::table('visits')->orderBy('num', 'desc')->first();
        $portifolio = DB::table('portifolios')->first();

        return view('frontend.index', [
            'setups' => $setups,
            'socials' => $socials,
            'cats' => $cats,
            'servico' => $servico,
            'visita' => $visita,
            'portifolio' => $portifolio
        ]);
    }
}
