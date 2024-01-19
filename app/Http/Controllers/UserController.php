<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios', compact('usuarios'));
    }

    public function show($id)
    {
        
    }

    public function store(Request $request)
    {
        // Validacion simple
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'estado' => 'boolean',
        ]);

        // Crear usuario
        Usuario::create([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'estado' => $request->input('estado', false),
        ]);

        
        return redirect('/usuarios');
    }

    public function update(Request $request, $id)
    {
        //actualizar un recurso 
    }

    public function destroy($id)
    {
        //eliminar un recurso
    }

    
}
