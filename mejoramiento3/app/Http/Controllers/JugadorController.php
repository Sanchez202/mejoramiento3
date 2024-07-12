<?php

namespace App\Http\Controllers;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
     //
     public function edit(jugador $jugador){//Encuentro el Curso
       
        return view('edit',compact('jugador'));
 
      }

     //Update
    public function update(Request $request, jugador $jugador){
           
        $jugador->fecha_nacimiento = $request->fecha_nacimiento;
        $jugador->codigo = $request->codigo;
        $jugador->nombre = $request->nombre;
        $jugador->posicion = $request->posicion;
        $jugador->save();
     
        return redirect()->route('jugador.index');
     
      }
     //Destroy
     public function destroy (jugador $jugador){
        $jugador->delete();
        return redirect()->route('jugador.index');
    }

    public function show(jugador $jugador){

        return view('show',compact('jugador'));


    }
   public function index(){

        $jugador = jugador::orderBy('id', 'desc')->get();
        return view('listar', compact('jugador'));
                            
    }
    public function create(){
        return view('create');
    }

    public function store(Request $request){
       
        $jugador= new jugador();
        $jugador->fecha_nacimiento=$request->fecha_nacimiento;
        $jugador->codigo=$request->codigo;
        $jugador->nombre=$request->nombre;
        $jugador->posicion=$request->posicion;
        
     
        
         
         $jugador->save();
         return $jugador;
    }

    
}