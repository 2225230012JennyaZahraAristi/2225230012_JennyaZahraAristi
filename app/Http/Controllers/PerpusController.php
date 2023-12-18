<?php

namespace App\Http\Controllers;

use App\Models\perpus;
use App\Http\Requests\StoreperpusRequest;
use App\Http\Requests\UpdateperpusRequest;
use Illuminate\View\View;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            'perpus'=> Perpus::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreperpusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreperpusRequest $request)
    {
        Perpus::create($request->all());

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function show(Perpus $perpus)
    {
        return view('show', [
            'perpus' => $perpus
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function edit(perpus $perpus)
    {
        return view('edit', [
            'perpus' => $perpus
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateperpusRequest  $request
     * @param  \App\Models\perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateperpusRequest $request, perpus $perpus)
    {
        $perpus->update($request->all());

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function destroy(perpus $perpus)
    {
        $perpus->delete();

        return redirect()->route('perpus.index');
    }
}
