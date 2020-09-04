<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function __construct()
    {
    }

    public function admin()
    {
        return view('backend.index');
    }
    public function setups()
    {
        $data = DB::table('setups')->first();
        if (!empty($data)) {
            $socials = explode(',', $data->social);
        } else {
            $socials = [];
        }
        return view('backend.insert.setup', ['data' => $data, 'socials' => $socials]);
    }
    public function categorias()
    {
        $data = DB::table('categorias')->get();
        return view('backend.insert.categoria', ['data' => $data]);
    }
    public function deletarCategoria($id)
    {
        $data = DB::table('categorias')->where('cid', $id)->delete();
        return redirect()->back()->with('message', 'Dados removidos com sucesso');
    }
    public function editarCategoria($id)
    {
        $data = DB::table('categorias')->get();
        $maindata = DB::table('categorias')->where('cid', $id)->first();
        if ($maindata) {
            return view('backend.edit.categoria', ['data' => $data, 'maindata' => $maindata]);
        } else {
            return redirect('categorias');
        }
    }
    public function novoPost()
    {
        $cats = DB::table('categorias')->where('status', 'on')->get();
        return view('backend.insert.novopost', ['cats' => $cats]);
    }
    public function allPosts()
    {
        $data = DB::table('contents')->get();
        return view('backend.display.posts', ['data' => $data]);
    }
    public function editPost($id)
    {
        $cats = DB::table('categorias')->where('status', 'on')->get();
        $data = DB::table('contents')->where('contid', $id)->first();
        return view('backend.edit.editpost', ['data' => $data, 'cats' => $cats]);
    }
    public function deletarPost($id)
    {
        $data = DB::table('contents')->where('contid', $id)->delete();
        return redirect()->back()->with('message', 'Dados removidos com sucesso');
    }
    public function novoPortifolio()
    {
        return view('backend.insert.novoPortifolio');
    }
    public function allPortifolio()
    {
        $data = DB::table('portifolios')->get();
        return view('backend.display.portifolio', ['data' => $data]);
    }
    public function editPortifolio($id)
    {
        $data = DB::table('portifolios')->where('pid', $id)->first();
        return view('backend.edit.editportifolio', ['data' => $data]);
    }
    public function deletarPortifolio($id)
    {
        $data = DB::table('portifolios')->where('pid', $id)->delete();
        return redirect()->back()->with('message', 'Dados removidos com sucesso');
    }
}
