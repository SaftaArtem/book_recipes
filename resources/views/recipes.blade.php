@extends('layouts.app')
@section('content')
<div class="card-body">
  <form action="{{'recipe'}}" method="POST" class="form-horisontal">
    {{ csrf_field() }}
    <div class="row">
      <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Name</label>      
        <div class="row">
          <div class="col-sm-6">
            <input type="text" name="name" id="recipe-name" class="form-control">
          </div>
        </div>
        <label for="Recipe" class="col-sm-3 control-label">Description</label>      
        <div class="row">
          <div class="col-sm-6">
            <input type="text" name="description" id="recipe-name" class="form-control">
          </div>
        </div>
        <label for="Recipe" class="col-sm-3 control-label">Ingredient</label>      
        <div class="row">
          <div class="col-sm-6">
            <input type="text" name="ingredient" id="recipe-name" class="form-control">
          </div>
        </div>
        <label for="Recipe" class="col-sm-3 control-label">ingredient_amount</label>      
        <div class="row">
          <div class="col-sm-6">
            <input type="text" name="ingredient_amount" id="recipe-name" class="form-control">
          </div>
        </div>
        <button type="submit" class="btn btn-success">Add Recipe</button>
      </div>
    </div>
  </form>
</div>

@if(count($recipes) > 0)
  <div class="card">
    <div class="card-heading">
      Все Рецепты
    </div>
    <div class="card-body">
      <table class="table table-striped task-table">
        <thead>
          <th>Рецепт</th>
          <th>&nbsp;</th>
        </thead>

        <tbody>
          @foreach($recipes as $recipe)

            <td class="table-text">
              <div>{{ $recipe->name }}</div>
            </td>
            <td>
              <form action="{{url('recipe/'.$recipe->id)}}" method="POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button class="btn btn-danger">Delete</button>

              </form>
            </td>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endif

@endsection