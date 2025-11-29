<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Concurso;
use App\Models\Lotofacil;
use App\Models\Result;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Lotofacil::latest()->get();
        $result = Result::orderby('id', 'DESC')->first();
        $total = 0;
        foreach($data as $item){
            if($result->n01 == $item->n01){
                $valor = +1;
            }
            if($result->n02 == $item->n02){
                $valor = +1;
            }
            if($result->n03 == $item->n03){
                $valor+1;
            }
            if($result->n04 == $item->n04){
                $valor+1;
            }
            if($result->n05 == $item->n05){
                $valor+1;
            }
        }
        dd($valor);

    
        return view('admin.pages.index', compact('data', 'result'));
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
