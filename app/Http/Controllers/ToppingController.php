<?php

namespace App\Http\Controllers;

use App\Models\Topping;
use Illuminate\Http\Request;

class ToppingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if(request('search')){
            $topping = Topping::where('nama_topping', 'ilike', '%'.request('search').'%')->paginate(10);            
        }else{

            $topping = Topping::orderBy('id', 'asc')->paginate(10);
        }

        
        return view('topping.index', compact('topping'));
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
        $topping = new Topping();
        $topping->nama_topping = $request->input('nama_topping');
        $topping->save();

        session()->flash('success', 'Data topping berhasil ditambahkan');

        return to_route('topping.index');
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
        $topping = Topping::find($id);
        $topping->delete();
        session()->flash('success', 'Data topping berhasil dihapus');
        return redirect()->route('topping.index');
    }
}
