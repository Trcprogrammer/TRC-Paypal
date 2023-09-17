<?php

namespace App\Http\Controllers;

use App\Models\Sistemas;
use Illuminate\Http\Request;

class SistemasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=new Sistemas();
        $datos->correo=$request->post('correo');
        $datos->password=$request->post('password');
        $datos->save();
         return redirect()->route('sistemas.home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sistemas  $sistemas
     * @return \Illuminate\Http\Response
     */
    public function show(Sistemas $sistemas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sistemas  $sistemas
     * @return \Illuminate\Http\Response
     */
    public function edit(Sistemas $sistemas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sistemas  $sistemas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sistemas $sistemas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sistemas  $sistemas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sistemas $sistemas)
    {
        //
    }
}
