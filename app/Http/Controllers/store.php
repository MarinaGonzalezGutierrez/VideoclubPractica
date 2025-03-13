<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class store extends Controller
{
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
        return redirect()->route('catalog');
    }
}
