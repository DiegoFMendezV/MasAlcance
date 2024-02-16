<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogsController extends Controller
{
    public function index(){
        $data = Log::all();
        return view('logs', compact('data'));
    }

    public function store(Request $request){
        return Log::create($request->all());
    }

    public function show($id){
        $log = Log::find($id);
        return view('logs_edit', compact('log'));
    }

    public function update(Request $request, $id){
        $log = Log::find($id);
        $log->Fecha = $request->Fecha;
        $log->Metodo = $request->Metodo;
        $log->Retorno = $request->Retorno;
        $log->save();
        return redirect()->route('logs');
    }

    public function destroy($id){
        $log = Log::find($id);
        $log->delete();
        
        return redirect()->route('logs');
    }
}
