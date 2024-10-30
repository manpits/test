<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KontakController extends Controller
{
    public $kontaks;

    public function __construct()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        $this->kontaks = $response->json();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kontak')->with(['kontaks' => $this->kontaks]);
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
        return "Store new kontak $request";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //return "Show kontak $id";
        $kontak = collect($this->kontaks)->firstWhere('id', $id);
        return view('kontak.show')->with(['kontak' => $kontak]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kontak = collect($this->kontaks)->firstWhere('id', $id);
        return view('kontak.edit')->with(['kontak' => $kontak]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Save editing kontak $request";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Delete kontak $id";
    }
}
