<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', function () {
  $recipes = \App\Recipe::orderBy('created_at', 'asc')->get();
  return view('recipes', [
    'recipes' => $recipes
  ]);
});

Route::post('/recipe', function (Request $request) {
    $validator = Validator::make($request->all(), [
      'name' => 'required|max:255'
    ]);
    if($validator->fails()){
      return redirect('/')
        ->withInput()
        ->withErrors($validator);
    }
    $recipe = new \App\Recipe;
    $recipe->name = $request->name;
    $recipe->description = $request->description;
    $recipe->ingredient = $request->ingredient;
    $recipe->ingredient_amount = $request->ingredient_amount;
    $recipe->save();

    return redirect('/recipes');
});

Route::delete('/recipe/{recipe}', function (\App\Recipe $recipe) {
  $recipe->delete();

  return redirect('/recipes');
});