<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComprobarIdAlumno
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = $request->route('id');

        // Validar que el ID sea un número entero positivo
        if (!is_numeric($id) || (int)$id <= 0 || (int)$id != $id) {
            return response()->json(['error' => 'El ID debe ser un número entero positivo.'], 400);
        }
        return $next($request);
    }
}
