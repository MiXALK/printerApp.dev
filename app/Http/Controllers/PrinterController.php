<?php

namespace App\Http\Controllers;

use App\Printer;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.printer.index', [
        'printers' => Printer::paginate(10)
	    ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.printer.create', [
            'printer'   => []
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
        Printer::create($request->all());
        return redirect()->route('admin.printer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function show(Printer $printer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function edit(Printer $printer)
    {
        return view('admin.printer.edit', [
            'printer'   => $printer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Printer $printer)
    {
        $printer->update($request->all());
        return redirect()->route('admin.printer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Printer $printer)
    {
        $printer->delete();
        return redirect()->route('admin.printer.index');
    }
}
