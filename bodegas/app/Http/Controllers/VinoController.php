<?php

namespace App\Http\Controllers;

use App\Models\Vino;
use Illuminate\Http\Request;

/**
 * Class VinoController
 * @package App\Http\Controllers
 */
class VinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vinos = Vino::paginate();

        return view('vino.index', compact('vinos'))
            ->with('i', (request()->input('page', 1) - 1) * $vinos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vino = new Vino();
        return view('vino.create', compact('vino'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Vino::$rules);

        $vino = Vino::create($request->all());

        return redirect()->route('vinos.index')
            ->with('success', 'Vino created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vino = Vino::find($id);

        return view('vino.show', compact('vino'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vino = Vino::find($id);

        return view('vino.edit', compact('vino'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vino $vino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vino $vino)
    {
        request()->validate(Vino::$rules);

        $vino->update($request->all());

        return redirect()->route('vinos.index')
            ->with('success', 'Vino updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vino = Vino::find($id)->delete();

        return redirect()->route('vinos.index')
            ->with('success', 'Vino deleted successfully');
    }
}
