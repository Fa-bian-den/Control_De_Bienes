<?php

namespace App\Http\Controllers;

use App\Models\Getin;
use Illuminate\Http\Request;

/**
 * Class GetinController
 * @package App\Http\Controllers
 */
class GetinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getins = Getin::paginate();

        return view('getin.index', compact('getins'))
            ->with('i', (request()->input('page', 1) - 1) * $getins->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getin = new Getin();
        return view('getin.create', compact('getin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Getin::$rules);

        $getin = Getin::create($request->all());

        return redirect()->route('getins.index')
            ->with('success', 'Entrada creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getin = Getin::find($id);

        return view('getin.show', compact('getin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getin = Getin::find($id);

        return view('getin.edit', compact('getin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Getin $getin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Getin $getin)
    {
        request()->validate(Getin::$rules);

        $getin->update($request->all());

        return redirect()->route('getins.index')
            ->with('success', 'Entrada actualizada exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $getin = Getin::find($id)->delete();

        return redirect()->route('getins.index')
            ->with('success', 'Entrada eliminada exitosamente.');
    }
}
