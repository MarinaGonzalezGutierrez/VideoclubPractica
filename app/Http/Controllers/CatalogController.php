<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class CatalogController extends Controller
{


    public function getIndex(){
		//select a las peliculas
		$peliculas = Pelicula::all();
        return view('catalog.index', array('arrayPeliculas'=>$peliculas));
    }

	public function getCreate(){
		$peliculas = Pelicula::all();
		return view('catalog.create', array('arrayPeliculas'=>$peliculas));
	}

	public function store(Request $request){
        if(!empty($request->title) && !empty($request->year) && !empty($request->director) && !empty($request->poster) && !empty($request->rented) && !empty($request->synopsis)){
            $p= new Pelicula;
            $p->title = $request->post('title');
            $p->year = $request->post('year');
            $p->director = $request->post('director');
            $p->poster = $request->post('poster');
            $p->rented = $request->post('rented');
            $p->synopsis = $request->post('synopsis');
            $p->save();

        }
        return redirect()->route('catalog.index');
    }



	

    public function getShow($id){
		
		//buscar por clave primaria
		$p = Pelicula::findOrFail($id);
		//depurador
        return view('catalog.show', array('arrayPeliculas'=> $p));  
      }

    // public function getCreate(){
    //     return view('catalog.create');
    // }

    // public function getEdit($id){
    //     return view('catalog.edit', array('id' => $id));    
    // }
}


