<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Concurso;
use App\Models\Lotofacil;
use App\Models\Result;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result =  Result::orderBy('created_at', 'desc')->first();
        $data = Lotofacil::latest()->get();
        $conc = Concurso::latest()->get();

        // dd(Concurso::first()->lotofacil);
        return view('admin.pages.index', compact('data', 'result', 'conc'));
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
        //
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
        //
    }
}
