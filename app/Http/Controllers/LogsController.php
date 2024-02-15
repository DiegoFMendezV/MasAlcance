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

    public function show(Log $log){
        return Log::find($log->id);
    }

    public function update(Request $request, Log $log){
        $log->update($request->all());
        return $log;
    }

    public function destroy(Log $log){
        $log->destroy($log->id);
    }
}
