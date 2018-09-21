<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aresta;
use App\Verticie;

class ArestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arestas = Aresta::all(); 
        return view('indexaresta',compact('arestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $verticies = Verticie::all();
        return view('createaresta',compact('verticies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!(Verticie::where('nome',$request->verticie1)->get()->isEmpty())){
            if(!(Verticie::where('nome',$request->verticie2)->get()->isEmpty())){
                $verticie1 = Verticie::where('nome',$request->verticie1)->first();
                $verticie2 = Verticie::where('nome',$request->verticie2)->first();
                $aresta = new Aresta();
                $aresta->name=$request->get('name'); 
                $aresta->tensao = $request->get('tensao');
                $aresta->exibenome= $request->get('exibenome');
                $aresta->verticie1_id = $verticie1->id;
                $aresta->verticie2_id = $verticie2->id;
                $aresta->save();
                return redirect('aresta')->with('success', 'Information has been added');
            }
        }else{
            return redirect('aresta')->with('failure', 'Information has not been added');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aresta = Aresta::find($id);
        return view('editaresta',compact('aresta','id'));
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
        $aresta= Aresta::find($id);
        $aresta->nome=$request->get('nome'); 
        $aresta->tensao = $request->get('tensao');
        $aresta->exibenome= $request->get('exibenome');

        $aresta->save();

        return redirect('aresta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aresta = Aresta::find($id);
        $aresta->delete();
        return redirect('aresta')->with('success','Information has been  deleted');
    }
}
