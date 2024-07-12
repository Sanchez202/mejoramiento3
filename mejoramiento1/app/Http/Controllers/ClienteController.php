<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
    public function edit(cliente $cliente){
       
        return view('cliente.edit',compact('cliente'));
 
      }

     //Update
    public function update(Request $request, cliente $cliente){
           
        $cliente->telefono = $request->telefono;
        $cliente->num_social = $request->num_social;
        $cliente->codigo = $request->codigo;
        $cliente->domicilio = $request->domicilio;
        $cliente->save();
     
        return redirect()->route('cliente.index');
     
      }
     //Destroy
     public function destroy (cliente $cliente){
        $cliente->delete();
        return redirect()->route('cliente.index');
    }

    public function show(cliente $cliente){

        return view('cliente.show',compact('cliente'));


    }
   public function index(){

        $cliente = cliente::orderBy('id', 'desc')->get();
        return view('cliente.listar', compact('cliente'));
                            
    }
    public function create(){
        return view('cliente.create');
    }

    public function store(Request $request){
       
        $cliente= new cliente();
        $cliente->telefono = $request->telefono;
        $cliente->num_social = $request->num_social;
        $cliente->codigo = $request->codigo;
        $cliente->domicilio = $request->domicilio;
        
         
         $cliente->save();
         return $cliente;
    }

    
}
    
