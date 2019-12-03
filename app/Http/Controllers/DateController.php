<?php

namespace App\Http\Controllers;

use App\Date;
use Illuminate\Http\Request;

class DateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth',['except' => ['create','store']]);
    }
    public function index()
    {
        $dates = Date::orderBy('id','DESC')->paginate();

        return view('admin.dates.index',compact('dates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.citas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $date = request()->validate([
            'nomcliente' => 'required',
            'appcliente' => 'required',
            'fechacita' => 'required',
            'horacita' => 'required',
            'tipomascota' => 'required',
            'nommascota' => 'required',
            'observacion' => 'required|min:3',
        ]);

        $date = new Date;
        $date->nomcliente = $request->input('nomcliente');
        $date->appcliente = $request->input('appcliente');
        $date->fechacita = $request->input('fechacita');
        $date->horacita = $request->input('horacita');
        $date->tipomascota = $request->input('tipomascota');
        $date->nommascota = $request->input('nommascota');
        $date->observacion = $request->input('observacion');

        $date->save();

        // return 'Cita creada con éxito';

        return redirect()->route('citas') ->with('info','Cita creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $date = Date::find($id);
        return view('admin.dates.show', compact('date'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $date = Date::find($id);

        return view('admin.dates.edit', compact('date'));
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
        $date = Date::find($id);

        $date->fill($request->all())->save();
        return redirect()->route('dates.edit',$date->id)
            ->with('info','Cita actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $date = Date::find($id)->delete();

        return back()->with('info','Eliminada correctamente la cita');
    }
}
