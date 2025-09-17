<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $result =  Result::orderBy('created_at', 'desc')->first();
        $data = Lotofacil::latest()->orderBy('created_at', 'desc')->get();
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
