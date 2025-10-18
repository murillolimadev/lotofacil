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
        $total = 0;
        foreach($data as $item){
            if($item->n01 = $result->n01){
                $total++;
            };
            if($item->n02 = $result->n02){
                $total++;
            };
            if($item->n03 = $result->n03){
                $total++;
            }
            if($item->n04 = $result->n04){
                $total++;
            };
            if($item->n05 = $result->n05){
                $total++;
            };
            if($item->n06 = $result->n06){
                $total++;
            };
            if($item->n07 = $result->n07){
                $total++;
            };
            if($item->n08 = $result->n08){
                $total++;
            };
            if($item->n09 = $result->n09){
                $total++;
            };
            if($item->n10 = $result->n10){
                $total++;
            };
            if($item->n11 = $result->n11){
                $total++;
            };
            if($item->n12 = $result->n12){
                $total++;
            };
            if($item->n13 = $result->n13){
                $total++;
            };
            if($item->n14 = $result->n14){
                $total++;
            };
            if($item->n15 = $result->n15){
                $total++;
            };
            if($item->n16 = $result->n16){
                $total++;
            };
            if($item->n17 = $result->n17){
                $total++;
            };
            if($item->n18 = $result->n18){
                $total++;
            };
            if($item->n19 = $result->n19){
                $total++;
            };
            if($item->n20 = $result->n20){
                $total++;
            };
            if($item->n21 = $result->n21){
                $total++;
            };
            if($item->n22 = $result->n22){
                $total++;
            };
            if($item->n23 = $result->n23){
                $total++;
            };
            if($item->n24 = $result->n24){
                $total++;
            };
            if($item->n25 = $result->n25){
                $total++;
            };
        };
       
        return view('admin.pages.index', compact('data', 'result', 'conc', 'total'));
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
