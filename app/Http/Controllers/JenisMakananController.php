<?php

namespace App\Http\Controllers;

use App\Models\JenisMakanan;
use Exception;
use Illuminate\Http\Request;

class JenisMakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Jenis Makanan';
        
        if(request('search')){
            $jenisMakanan = JenisMakanan::where('nama_jenis_makanan', 'ilike', '%'.request('search').'%')->paginate(10);            
        }else{

            $jenisMakanan = JenisMakanan::orderBy('id', 'asc')->paginate(10);
        }

        
        return view('jenis-makanan.index', compact('title', 'jenisMakanan'));
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
        $jenisMakanan = new JenisMakanan();
        $jenisMakanan->nama_jenis_makanan = $request->nama_jenis_makanan;
        $jenisMakanan->save();

        // dd($request->all());
        session()->flash('success', 'Data jenis makanan berhasil ditambahkan');
        return to_route('jenis-makanan.index');
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
        
        $jenisMakanan = JenisMakanan::find($id);
        dd($jenisMakanan);
        
        return redirect()->route('jenis-makanan.index',  compact('jenisMakanan'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $jenisMakanan = JenisMakanan::find($id);
        // $jenisMakanan->nama_jenis_makanan = $request->nama_jenis;
        // $jenisMakanan->update();
        // session()->flash('success', 'Data jenis makanan berhasil diupdate');
        // return to_route('jenis-makanan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenisMakanan = JenisMakanan::find($id);
        $jenisMakanan->delete();

        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('jenis-makanan.index');
    }
}
