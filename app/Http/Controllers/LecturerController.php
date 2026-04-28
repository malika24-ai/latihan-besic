<?php

namespace App\Http\Controllers;

use App\Models\lecturer;
use Illuminate\Http\Request;
use App\Models\Departemen;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return view('lecturer.index', [
                'title' => 'lecturer ',
                'lecturer' => Lecturer::latest()->get(),
                'departemens' => Departemen::latest()->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lecturer.create', [
                'title' => 'Create Lecturer',
                'departemens' => Departemen::latest()->get(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validated = $request->validate([
        'name' => 'required|max:255',
        'departemen_id' => 'required|exists:departemens,id',
        
    ],[
        'name.required' => 'Nama Tidak Boleh Kosong',
        'name.max' => 'Nama Tidak Boleh Lebih Dari 255 Karakter',
        'departemen_id.required' => 'Program Studi Tidak Boleh Kosong',
        'departemen_id.exists' => 'Program Studi yang dipilih tidak ditemukan',
        
    ]);
    
        Lecturer::create($validated);
        return to_route('lecturer.index')->withSuccess('Data Berhasil Ditambahkan');
    
        return redirect('/lecturer');
    }

    /**
     * Display the specified resource.
     */
    public function show(lecturer $lecturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(lecturer $lecturer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lecturer $lecturer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lecturer $lecturer)
    {
        //
    }
}
