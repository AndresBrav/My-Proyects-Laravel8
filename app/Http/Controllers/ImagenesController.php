<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    
    public function index(){

        $imagenes = [
            ['id' => 1, 'src' => 'images/paisaje.jpg'],
            ['id' => 2, 'src' => 'images/paisaje2.jpg'],
            ['id' => 3, 'src' => 'images/paisaje3.jpeg'],
            ['id' => 4, 'src' => 'images/paisaje4.jpeg'],
            ['id' => 5, 'src' => 'images/paisaje5.jpeg'],
            ['id' => 6, 'src' => 'images/paisaje6.webp'],
            ['id' => 7, 'src' => 'images/paisaje7.jpg'],
            ['id' => 8, 'src' => 'images/paisaje8.jpeg'],
            ['id' => 9, 'src' => 'images/paisaje9.jpeg'],
            ['id' => 10, 'src' => 'images/paisaje10.jpeg'],
            ['id' => 11, 'src' => 'images/paisaje11.png'],
            ['id' => 12, 'src' => 'images/paisaje12.jpg']
        ];

        return view('imagenes.imagen',compact("imagenes"));
    }

    public function show($id)
    {

        $imagenes = [
            ['id' => 1, 'src' => 'images/paisaje.jpg'],
            ['id' => 2, 'src' => 'images/paisaje2.jpg'],
            ['id' => 3, 'src' => 'images/paisaje3.jpeg'],
            ['id' => 4, 'src' => 'images/paisaje4.jpeg'],
            ['id' => 5, 'src' => 'images/paisaje5.jpeg'],
            ['id' => 6, 'src' => 'images/paisaje6.webp'],
            ['id' => 7, 'src' => 'images/paisaje7.jpg'],
            ['id' => 8, 'src' => 'images/paisaje8.jpeg'],
            ['id' => 9, 'src' => 'images/paisaje9.jpeg'],
            ['id' => 10, 'src' => 'images/paisaje10.jpeg'],
            ['id' => 11, 'src' => 'images/paisaje11.png'],
            ['id' => 12, 'src' => 'images/paisaje12.jpg']
        ];

        // dd($imagenes);

        $imagen="";
        foreach($imagenes as $i){
            if($id ==$i['id']){
                $imagen = $i['src'];
            }
        }

        // Aquí puedes obtener los detalles de la imagen por su ID
        // Por simplicidad, solo devolvemos la vista con el ID
        return view('imagenes.detallesimagen', compact('imagen'));
    }
}
