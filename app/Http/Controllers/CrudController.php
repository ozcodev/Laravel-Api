<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json([
            'posts'=>crud::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new crud;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->description = $request->description;

        $post->save();
        return response()->json([
            'message' => 'Created',
            'status' => 'success',
            'data' => $post,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(crud $crud)
    {
        return response()->json(['member'=>$crud]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, crud $crud)
    {
        //
        $post = new crud;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->description = $request->description;

        $post->save();
        return response()->json([
            'message' => 'Updated',
            'status' => 'success',
            'data' => $post,
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(crud $crud)
    {
        $crud->delete();
        return response()->json([
            'message' => 'deleted',
            'status' => 'success',
        ]);
    }
}
