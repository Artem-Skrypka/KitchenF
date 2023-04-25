<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Http\Requests\RecipeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\MassCounter;

class RecipeController extends Controller
{

    public function index()
    {
        return view('home'); 
    }

    public function showAll(Recipe $recipe)
    {
        $recipes = $recipe->all();
        return view('recipes', compact('recipes')); 
    }

    public function store(Request $request)
    {
        if ($request->has('addRecipe')) {
            $recipe = [
                'title' => $request['recipeName'],
                'slug' => '',
                'ingredients' => $request['ingredients'],
                'description' => $request->input('description'),
            ];
    
            // foreach ($request['ingredients'] as $ingredient) {
            //     $recipe['ingredients'][$ingredient['name']] = $ingredient['mass'];
            // }
            
            if (true) {
                // Recipe::create($recipe);
                return redirect('/')->with('success', 'Recipe created successfully!');
            } else {
                return redirect('/')->with('error', 'You must be logged in to create a recipe.');
            }
        }

        if ($request->has('calculateNewProportion')) {
            return back()->with('messages', 'This is your new Proportion');
        }
        
        
    }

    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('single-recipe', compact('recipe'));
    }

    public function showEditForm($id)
    {
        $recipe = Recipe::find($id);
        return view('edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function updateRecipe(RecipeRequest $request, $id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->title = $request['recipeName'];
        $recipe->description = $request->input('description');
        $recipe->ingredients = $request['ingredients'];

        // Save the updated recipe
        $recipe->save();

        return back()->with('message', 'Recipe update successfully!');
    }
}
