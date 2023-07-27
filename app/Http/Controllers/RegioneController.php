<?php

namespace App\Http\Controllers;

use App\Models\Regione;
use Illuminate\Http\Request;

/**
 * Class RegioneController
 * @package App\Http\Controllers
 */
class RegioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regiones = Regione::paginate();

        return view('regione.index', compact('regiones'))
            ->with('i', (request()->input('page', 1) - 1) * $regiones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regione = new Regione();
        return view('regione.create', compact('regione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Regione::$rules);

        $regione = Regione::create($request->all());

        return redirect()->route('regiones.index')
            ->with('success', 'Regione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $regione = Regione::find($id);

        return view('regione.show', compact('regione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regione = Regione::find($id);

        return view('regione.edit', compact('regione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Regione $regione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regione $regione)
    {
        request()->validate(Regione::$rules);

        $regione->update($request->all());

        return redirect()->route('regiones.index')
            ->with('success', 'Regione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $regione = Regione::find($id)->delete();

        return redirect()->route('regiones.index')
            ->with('success', 'Regione deleted successfully');
    }
}
