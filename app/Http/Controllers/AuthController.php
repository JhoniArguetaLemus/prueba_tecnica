<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'contrasena' => 'required|min:6',
        ]);

      
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        
        $token = Str::random(60); 

      
        $user->api_token = $token;
        $user->save();

      
        Mail::to($user->email)->send(new \App\Mail\TokenDeAcceso($token));

        return response()->json(['message' => 'Inicio de sesión exitoso, token enviado por correo'], 200);
    }
}
