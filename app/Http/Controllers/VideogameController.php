<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videogame;
use App\Models\Category;
use App\Http\Requests\StoreVideoGame;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videogames = Videogame::orderBy('id', 'desc')->get();
        $categories = Category::all();
        return  view('videogames.index', compact('videogames', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('videogames.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideoGame $request)
    {   

        /* $request->validate([
            'name' => 'required',
            'category_id' => 'required'
        ]); */

        $request = Videogame::create($request->all());  

        return redirect()->route('videogames.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Videogame $videogame)
    {
        $categories = Category::where('id', $videogame->category_id)
        ->get();

       return view('videogames.show', compact('videogame', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Videogame $videogame)
    {
        $categories = Category::pluck('name', 'id');
        return view('videogames.edit', compact('videogame', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videogame $videogame)
    {
        $videogame->update($request->all());

        return redirect()->route('videogames.show', $videogame);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function help($name_game, $categoria = null)
    {
        if ($categoria) {
            return 'Bienvenido a la página del juego: '.$name_game.' de la categoría: '.$categoria;
        } else {
            return 'Bienvenido a la página del juego: '.$name_game;
        }
        
    }


   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videogame $videogame)
    {
        $videogame->delete();

        return redirect()->route('videogames.index')->with('info', 'Videojuego eliminado satisfactoriamente');
    }

}
