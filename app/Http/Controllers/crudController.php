<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class crudController extends Controller
{
    public function insertData()
    {
        $data = Request::except('_token', 'submit');
        print_r($data);
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);

        if (Request::has('social')) {
            $data['social'] = implode(',', $data['social']);
        }

        if (Request::has('titulo')) {
            $data['rot'] = $this->rot($data['titulo']);
        }

        $data['created_at'] = date('Y-m-d H:i:s');
        DB::table($tbl)->insert($data);

        Session::flash('message', 'Data inserted successfully!!!');
        return redirect()->back();
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

        if (Request::has('social')) {
            $data['social'] = implode(',', $data['social']);
        }

        if (Request::has('titulo')) {
            $data['rot'] = $this->rot($data['titulo']);
        }

        $data['updated_at'] = date('Y-m-d H:i:s');
        DB::table($tbl)->where(key($data), reset($data))->update($data);

        Session::flash('message', 'Dados atualizados successfully!!!');
        return redirect()->back();
    }
}
