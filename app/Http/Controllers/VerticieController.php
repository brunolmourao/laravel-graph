<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Verticie;
use App\TipoVerticie;
class VerticieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verticies = Verticie::all(); 
        return view('indexverticie',compact('verticies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoverticies = TipoVerticie::all();
        return view('createverticie',compact('tipoverticies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!(TipoVerticie::where('tipoverticie',$request->tipoVerticie)->get()->isEmpty())){
            $tpverticie = TipoVerticie::where('tipoverticie',$request->tipoVerticie)->first();
            $verticie = new Verticie();
            $verticie->icone=$request->get('icone'); 
            $verticie->estado = $request->get('estado');
            $verticie->nome= $request->get('nome');
            $verticie->tensao = $request->get('tensao');
            $verticie->exibenome = $request->get('exibenome');
            $verticie->tipoVerticie_id = $tpverticie->id;
            $verticie->save();

            return redirect('verticie')->with('success', 'Information has been added');
        }else{
            return redirect('verticie')->with('failure', 'Information has not been added');
        }   
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
        $verticie = Verticie::find($id);
        return view('editverticie',compact('verticie','id'));
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
        $verticie= Verticie::find($id);
        $verticie->icone=$request->get('icone'); 
        $verticie->estado = $request->get('estado');
        $verticie->nome= $request->get('nome');
        $verticie->tensao = $request->get('tensao');
        $verticie->exibenome = $request->get('exibenome');
        $verticie->save();
        
        return redirect('verticie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $verticie = Verticie::find($id);
        $verticie->delete();
        return redirect('verticie')->with('success','Information has been  deleted');
    }
}
