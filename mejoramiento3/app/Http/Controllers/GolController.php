<?php

namespace App\Http\Controllers;
use App\Models\Gol;
use Illuminate\Http\Request;

class GolController extends Controller
{

    public function edit(gol $gol){
       
        return view('gol.edit',compact('gol'));
 
      }

     //Update
    public function update(Request $request, gol $gol){
           
        $gol->minuto = $request->minuto;
        $gol->descuento = $request->descuento;
        $gol->codigo = $request->codigo;
       
        $gol->save();
     
        return redirect()->route('gol.index');
     
      }
     //Destroy
     public function destroy (gol $gol){
        $gol->delete();
        return redirect()->route('gol.index');
    }

    public function show(gol $gol){

        return view('gol.show',compact('gol'));


    }
   public function index(){

        $gol = gol::orderBy('id', 'desc')->get();
        return view('gol.listar', compact('gol'));
                            
    }
    public function create(){
        return view('gol.create');
    }

    public function store(Request $request){
       
        $gol= new gol();
        $gol->minuto = $request->minuto;
        $gol->descuento = $request->descuento;
        $gol->codigo = $request->codigo;
        
     
        
         
         $gol->save();
         return $gol;
    }

    
}
    
