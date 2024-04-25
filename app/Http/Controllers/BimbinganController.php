<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use Illuminate\Http\Request;

class BimbinganController extends Controller
{
    /**
     * display all bimbingan data
     */
    public function index()
    {
        // get all bimbingan data
        $bimbingans = Bimbingan::latest()->paginate(7);

        // render view
        return view('bimbingans.index',compact('bimbingans'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('bimbingans.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'condition' => 'required',
        ]);

        Bimbingan::create($request->all());

        return redirect()->route('bimbingans.index')->with('success','Post created successfully.');
    }
    public function show(Bimbingan $bimbingan)
    {
        return view('bimbingans.show',compact('bimbingan'));
    }
    public function edit(Bimbingan $bimbingan)
    {
        return view('bimbingans.edit',compact('bimbingan'));
    }
    public function update(Request $request, Bimbingan $bimbingan)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'condition' => 'required',
        ]);

        $bimbingan->update($request->all());

        return redirect()->route('bimbingans.index')->with('success','Post updated successfully');
    }
    public function destroy(Bimbingan $bimbingan)
    {
        $bimbingan->delete();

        return redirect()->route('bimbingans.index')->with('success','Post deleted successfully');
    }
}


