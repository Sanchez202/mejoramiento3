<?php

namespace App\Http\Controllers;
use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    
    public function edit(colaborador $colaborador){
       
        return view('colaborador.edit',compact('colaborador'));
 
      }

     //Update
    public function update(Request $request, colaborador $colaborador){
           
        $colaborador->nif = $request->nif;
        $colaborador->nombre = $request->nombre;
        
        $colaborador->save();
     
        return redirect()->route('colaborador.index');
     
      }
     //Destroy
     public function destroy (colaborador $colaborador){
        $colaborador->delete();
        return redirect()->route('colaborador.index');
    }

    public function show(colaborador $colaborador){

        return view('colaborador.show',compact('colaborador'));


    }
   public function index(){

        $colaborador = colaborador::orderBy('id', 'desc')->get();
        return view('colaborador.listar', compact('colaborador'));
                            
    }
    public function create(){
        return view('colaborador.create');
    }

    public function store(Request $request){
       
        $colaborador= new colaborador();
        $colaborador->nif = $request->nif;
        $colaborador->nombre = $request->nombre;
       
         
         $colaborador->save();
         return $colaborador;
    }

    
}
    
