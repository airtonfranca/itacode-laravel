<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Exception;

class crudController extends Controller
{
    public function insertData()
    {
        /**
         * @param  Request  $request
         */

        $data = Request::except('_token', 'submit');
        print_r($data);
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);

        $validator = Validator::make($data, [
            'titulo' => 'required|unique:categorias|max:255',
        ]);

        if (Request::has('titulo')) {
            $data['rot'] = $this->rot($data['titulo']);
        }
        if ($tbl == 'categorias') {
            if ($validator->fails()) {
                return redirect('categorias')
                    ->withErrors($validator, 'titulo')
                    ->withInput(Request::all())->with('message', 'O Título da Categoria é obrigatorio');
            }
        }
        try {
            $data['created_at'] = date('Y-m-d H:i:s');
            $exception = DB::table($tbl)->insert($data);
            Session::flash('message', 'Data inserted successfully!!!');
            return redirect()->back();
        } catch (Exception $e) {
            return back()->withInput()->with('message', "Ocorreu um ou mais erros ao tentar fazer algo. Erro(s):" .
                $e->getMessage());
        }
    }
    private function rot($string)
    {
        $string = strtolower(trim($string));
        $string = preg_replace('/\s+/', '-', $string);
        $string = preg_replace('/[^a-z0-9-]/', '-', $string);
        $string = preg_replace('/-+/', '-', $string);
        return rtrim($string, '-');
    }
    public function updateData()
    {
        $data = Request::except('_token', 'submit');
        print_r($data);
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);

        if (Request::has('titulo')) {
            $data['rot'] = $this->rot($data['titulo']);
        }

        $data['updated_at'] = date('Y-m-d H:i:s');
        DB::table($tbl)->where(key($data), reset($data))->update($data);

        Session::flash('message', 'Dados atualizados successfully!!!');
        return redirect()->back();
    }
}
