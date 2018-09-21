<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoVerticie;

class TipoVerticieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoverticies = TipoVerticie::all(); 
        return view('indextpverticie',compact('tipoverticies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createtpverticie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $tipoverticie = new TipoVerticie();
        $tipoverticie->tipoVerticie=$request->get('tipoVerticie'); 
        $tipoverticie->manobravel = $request->get('manobravel');
        $tipoverticie->iconeSemTensao= $request->get('iconeSemTensao');
        $tipoverticie->iconeComTensao = $request->get('iconeComTensao');

        $tipoverticie->save();
        return redirect('tipoverticie')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoverticie = TipoVerticie::find($id);
        return view('edittpverticie',compact('tipoverticie','id'));
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
        $tipoverticie= TipoVerticie::find($id);
        $tipoverticie->tipoVerticie=$request->get('tipoVerticie'); 
        $tipoverticie->manobravel = $request->get('manobravel');
        $tipoverticie->iconeSemTensao= $request->get('iconeSemTensao');
        $tipoverticie->iconeComTensao = $request->get('iconeComTensao');

        $tipoverticie->save();

        return redirect('tipoverticie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoverticie = TipoVerticie::find($id);
        $tipoverticie->delete();
        return redirect('tipoverticie')->with('success','Information has been  deleted');
    }
}
