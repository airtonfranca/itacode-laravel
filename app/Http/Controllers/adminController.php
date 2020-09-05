<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\setup;
use App\categoria;
use App\content;
use App\portifolio;
use Exception;

class adminController extends Controller
{
    public function __construct()
    {
    }

    public function admin()
    {
        try {
            return view('backend.index');
        } catch (Exception $e) {
            return redirect('/')->withInput()->with('message', "Não foi possível resolver a solicitação. Erro(s):" .
                $e->getMessage());
        }
    }
    public function setups()
    {
        try {
            $data = setup::all()->first();
            return view('backend.insert.setup', ['data' => $data]);
        } catch (Exception $e) {
            return redirect('/')->withInput()->with('message', "Não foi possível resolver a solicitação. Erro(s):" .
                $e->getMessage());
        }
    }
    public function categorias()
    {
        try {
            $data = categoria::all();
            return view('backend.insert.categoria', ['data' => $data]);
        } catch (Exception $e) {
            return redirect('/')->withInput()->with('message', "Não foi possível resolver a solicitação. Erro(s):" .
                $e->getMessage());
        }
    }
    public function deletarCategoria($id)
    {
        try {
            $data = categoria::where('cid', $id)->delete();
            return redirect()->back()->with('message', 'Dados removidos com sucesso');
        } catch (Exception $e) {
            return redirect('/')->withInput()->with('message', "Não foi possível resolver a solicitação. Erro(s):" .
                $e->getMessage());
        }
    }
    public function editarCategoria($id)
    {
        try {
            $data = categoria::all();
            $maindata = categoria::where('cid', $id)->first();
            if ($maindata) {
                return view('backend.insert.categoria', ['data' => $data, 'maindata' => $maindata]);
            } else {
                return redirect('categorias');
            }
        } catch (Exception $e) {
            return redirect('/')->withInput()->with('message', "Não foi possível resolver a solicitação. Erro(s):" .
                $e->getMessage());
        }
    }
    public function novoPost()
    {
        try {
            $cats = categoria::all();
            return view('backend.insert.novopost', ['cats' => $cats]);
        } catch (Exception $e) {
            return redirect('/')->withInput()->with('message', "Não foi possível resolver a solicitação. Erro(s):" .
                $e->getMessage());
        }
    }
    public function allPosts()
    {
        try {
            $data = content::all();
            return view('backend.display.posts', ['data' => $data]);
        } catch (Exception $e) {
            return redirect('/')->withInput()->with('message', "Não foi possível resolver a solicitação. Erro(s):" .
                $e->getMessage());
        }
    }
    public function editPost($id)
    {
        try {
            $cats = categoria::where('status', 'on');
            $data = content::where('contid', $id)->first();
            return view('backend.insert.novopost', ['data' => $data, 'cats' => $cats]);
        } catch (Exception $e) {
            return redirect('/')->withInput()->with('message', "Não foi possível resolver a solicitação. Erro(s):" .
                $e->getMessage());
        }
    }
    public function deletarPost($id)
    {
        try {
            $data = content::where('contid', $id)->delete();
            return redirect()->back()->with('message', 'Dados removidos com sucesso');
        } catch (Exception $e) {
            return redirect('/')->withInput()->with('message', "Não foi possível resolver a solicitação. Erro(s):" .
                $e->getMessage());
        }
    }
    public function novoPortifolio()
    {
        try {
            return view('backend.insert.novoPortifolio');
        } catch (Exception $e) {
            return redirect('/')->withInput()->with('message', "Não foi possível resolver a solicitação. Erro(s):" .
                $e->getMessage());
        }
    }
    public function allPortifolio()
    {
        try {
            $data = portifolio::all();
            return view('backend.display.portifolio', ['data' => $data]);
        } catch (Exception $e) {
            return redirect('/')->withInput()->with('message', "Não foi possível resolver a solicitação. Erro(s):" .
                $e->getMessage());
        }
    }
    public function editPortifolio($id)
    {
        try {
            $data = portifolio::where('pid', $id)->first();
            return view('backend.insert.novoPortifolio', ['data' => $data]);
        } catch (Exception $e) {
            return redirect('/')->withInput()->with('message', "Não foi possível resolver a solicitação. Erro(s):" .
                $e->getMessage());
        }
    }
    public function deletarPortifolio($id)
    {
        try {
            $data = portifolio::where('pid', $id)->delete();
            return redirect()->back()->with('message', 'Dados removidos com sucesso');
        } catch (Exception $e) {
            return redirect('/')->withInput()->with('message', "Não foi possível resolver a solicitação. Erro(s):" .
                $e->getMessage());
        }
    }
}
