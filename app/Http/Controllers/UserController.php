<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Daftar User';
                
        if(request('search')){
            $users = User::where('name', 'ilike', '%'.request('search').'%')->paginate(10);
        }else{
            $users = User::orderBy('id', 'asc')->paginate(10);
        }    
        
        return view('user.index', compact('title',  'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->jenis_kelamin = $request->jk;
        $user->status = $request->has('status') ? 1 : 0;
        $user->save();

        session()->flash('success', 'Data berhasil disimpan');

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = 'Detail User';
        $user = User::find($id);

        if (!$user) {
            abort(404);
        }
        
        return view('user.show', compact('title', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->jenis_kelamin = $request->jk;
        $user->status = $request->has('status') ? 1 : 0;
        $user->update();        

        session()->flash('success', 'Data berhasil diubah');

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('user.index');
    }
}
