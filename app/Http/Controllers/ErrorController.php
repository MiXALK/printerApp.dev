<?php

namespace App\Http\Controllers;

use App\Error;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ErrorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    return view('admin.error.index', [
		    'errors' => Error::paginate(10)
	    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    return view('admin.error.create', [
		    'error'   => []
	    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Error::create($request->all());
        return redirect()->route('admin.error.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function show(Error $error)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function edit(Error $error)
    {
        return view('admin.error.edit', [
            'error'   => $error
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Error $error)
    {
        $error->update($request->all());
        return redirect()->route('admin.error.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function destroy(Error $error)
    {
        $error->delete();
        return redirect()->route('admin.error.index');

    }
}
