<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cofigTema;

class DashboardController extends Controller
{
    public function index()
    {
        return view('cms.admin.janelas.dashboard');
    }
    public function configTemaIndex()
    {
        $modelos = cofigTema::get();
        return view('cms.admin.janelas.configTema',compact('modelos'));
    }
    public function config_tema(Request $request)
    {
        $config_salvar = new cofigTema;
        return redirect()->route('config.tema');
    }

}
