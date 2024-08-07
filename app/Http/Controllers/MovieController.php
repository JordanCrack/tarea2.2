<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MovieController extends Controller
{
    // Listar todas las películas con opción de orden
    public function index(Request $request)
    {
        $orderBy = $request->query('order_by', 'title');
        $orderDirection = $request->query('direction', 'asc');

        $movies = Movie::orderBy($orderBy, $orderDirection)->get();

        return response()->json($movies, 200);
    }

    // Obtener una película por ID
    public function show($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['message' => 'Movie not found'], 404);
        }

        return response()->json($movie, 200);
    }

    // Agregar una nueva película
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|integer|min:1888|max:' . date('Y'),
            'studio' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id'
        ]);

        $movie = Movie::create($request->all());

        return response()->json($movie, 201);
    }

    // Modificar una película existente
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['message' => 'Movie not found'], 404);
        }

        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'year' => 'sometimes|required|integer|min:1888|max:' . date('Y'),
            'studio' => 'sometimes|required|string|max:255',
            'category_id' => 'sometimes|required|exists:categories,id'
        ]);

        $movie->update($request->all());

        return response()->json($movie, 200);
    }
}
