<?php

namespace App\Http\Controllers;

use App\Monster;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monsters = Monster::paginate(15);

        return view('monsters.index', compact('monsters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Monster  $monster
     * @return \Illuminate\Http\Response
     */
    public function show(Monster $monster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Monster  $monster
     * @return \Illuminate\Http\Response
     */
    public function edit(Monster $monster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Monster  $monster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monster $monster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Monster  $monster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monster $monster)
    {
        //
    }
}
