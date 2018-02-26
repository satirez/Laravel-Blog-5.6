<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
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
         $categories = Category::orderBy('id', 'DESC')->paginate();
       //  dd($categories); ver si todo esta bien
        return view('admin.categories.index', compact('categories'));
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
          return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        //guarda lo que se ha hecho en create
       $category = Category::create($request->all());
        return redirect()->route('categories.edit', $category->id)->with('info', 'Categoria creada con éxito');

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
        $category = Category::find($id);

            return view('admin.categories.show', compact('category'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

            return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
         $category = Category::find($id);
        $category->fill($request->all())->save();
        return redirect()->route('categories.edit', $category->id)->with('info', 'Categoria actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   // delete borra la id seleccionada
        Category::find($id)->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
