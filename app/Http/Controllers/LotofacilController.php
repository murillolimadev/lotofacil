<?php

namespace App\Http\Controllers;

use App\Models\Lotofacil;
use Illuminate\Http\Request;

class LotofacilController extends Controller
{
    private $lotofacil;
    public function __construct(Lotofacil $lotofacil)
    {
        $this->lotofacil = $lotofacil;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.index');
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
        Lotofacil::create([
            'cod' => $request->cod,
            'n01' => $request->n01,
            'n02' => $request->n02,
            'n03' => $request->n03,
            'n04' => $request->n04,
            'n05' => $request->n05,
            'n06' => $request->n06,
            'n07' => $request->n07,
            'n08' => $request->n08,
            'n09' => $request->n09,
            'n10' => $request->n10,
            'n11' => $request->n11,
            'n12' => $request->n12,
            'n13' => $request->n13,
            'n14' => $request->n14,
            'n15' => $request->n15,
            'n16' => $request->n16,
            'n17' => $request->n17,
            'n18' => $request->n18,
            'n19' => $request->n19,
            'n20' => $request->n20,
            'n21' => $request->n21,
            'n22' => $request->n22,
            'n23' => $request->n23,
            'n24' => $request->n24,
            'n25' => $request->n25,
        ]);
        return redirect()->back()->with('msg', 'Jogo salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lotofacil $lotofacil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lotofacil $lotofacil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lotofacil $lotofacil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Lotofacil::destroy($id);
        return redirect()->back()->with('msg', 'Deletado com sucesso!');
    }
}
