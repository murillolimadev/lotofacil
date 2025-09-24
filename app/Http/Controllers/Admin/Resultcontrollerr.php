<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Concurso;
use App\Models\Lotofacil;
use App\Models\Result;
use Illuminate\Http\Request;

class Resultcontrollerr extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =  Result::latest()->get();
        $conc = Concurso::latest()->get();
        return view('admin.pages.result.index',compact('data','conc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Result::create($request->all());
       return redirect()->back()->with('msg', 'Salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Result::destroy($id);
        return redirect()->back()->with('msg', 'Deletado com sucesso!');
    }
}
