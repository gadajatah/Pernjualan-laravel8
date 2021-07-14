<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costumers = Costumer::get()->all();
        return view('costumer.index',compact('costumers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('costumer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #validation
        $validated = $request->validate([
            'nama_plgn' => 'required',
            'tlp_plgn' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ]);
        Costumer::create($validated);
        return redirect()->route('costumer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $costumer = Costumer::findOrFail($id);
        return view('costumer.edit', compact('costumer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         #validation
         $validated = $request->validate([
            'nama_plgn' => 'required',
            'tlp_plgn' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ]);
        Costumer::findOrFail($id)->update($validated);
        return redirect()->route('costumer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $costumers = Costumer::findOrFail($id);
        $costumers->delete();

        return redirect()->route('costumer.index');
    }
}
