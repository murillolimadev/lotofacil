<?php

namespace App\Http\Controllers;

use App\Models\Concurso;
use Illuminate\Http\Request;

class ConcursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Concurso::latest()->get();
        $conc = Concurso::latest()->get();
        return view('admin.pages.concurso.index', compact('data', 'conc'));
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
        Concurso::create($request->all());
        return redirect()->back()->with('msg', 'Deletado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Concurso $concurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Concurso $concurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Concurso $concurso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Concurso::destroy($id);
        return redirect()->back()->with('msg', 'Deletado com sucesso!');
    }
}
