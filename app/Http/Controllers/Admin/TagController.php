<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;
use App\Http\Controllers\Controller;
use App\Tag;

class TagController extends Controller
{

    public function __construct()
    {   

        // NECESITAS REALIZAR INICIO DE SESION PARA VER Y PODER HACER ESTOS CAMBOS
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       // Ordena todas las etiquetas
         $tags = Tag::orderBy('id', 'DESC')->paginate();
       //  dd($tags); ver si todo esta bien
        return view('admin.tags.index', compact('tags'));
       //lo manda a la vista index
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {      
        // va al formulario
          return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagStoreRequest $request)
    {
        //guarda lo que se ha hecho en create
       $tag = Tag::create($request->all());
        return redirect()->route('tags.edit', $tag->id)->with('info', 'Etiqueta creada con éxito');

        //with es para alertas
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find busca la id seleccionada
        $tag = Tag::find($id);

            return view('admin.tags.show', compact('tag'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);

            return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagUpdateRequest $request, $id)
    {
         $tag = Tag::find($id);
        $tag->fill($request->all())->save();
        return redirect()->route('tags.edit', $tag->id)->with('info', 'Etiqueta actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   // delete borra la id seleccionada
        Tag::find($id)->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
