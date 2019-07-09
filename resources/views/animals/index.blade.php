@extends('layout')
 
@section('content')
 
<!DOCTYPE html>
<html>
<head>
   
</head>
<style>
 
 
</style>
<body>
 <br>
<h1 class="title">Tableau des animaux</h1>
 
<form action="/animals/create">
    <div class="field">
        <div class="control">
           <button type="submit" class="button is-link" >Ajouter un animal</button>
      </div>
   </div>
</form>
 
 
 <table class="table table-striped">
    <thead>
        <tr>
          <td>Nom</td>
          <td>Description</td>
          <td colspan="2">Actions</td>
            <td></td>
          
        </tr>
    </thead>
    <tbody>
        @foreach($animals as $animal)
        
            @if($animal->animal_type == "Reptile")
                <tr id="line" style="background-color: #aeff85;">
            @endif
                    
            @if($animal->animal_type == "Oiseau")
                <tr id="line" style="background-color: #a8e9ff;">
            @endif
            @if($animal->animal_type == "Mammifere")
                <tr id="line" style="background-color: #fff2a8;">
            @endif
           
                
            
            
            <td>{{$animal->animal_name}}</td>
            <td>Je suis un(e) {{$animal->animal_name}} et {{$animal->animal_skin}} {{$animal->animal_description}}</td>
            <td><form action="{{ route('animals.edit', $animal->id)}}" method="post">
                  @csrf
                  @method('GET')
                  <button type="submit">Modifier</button>
                </form></td>
            <td>
                <form action="{{ route('animals.destroy', $animal->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
     </tbody>
    </table>
    <form action="/animals/create">
    <div class="field">
        <div class="control">
           <button type="submit" class="button is-link" >Ajouter un animal</button>
      </div>
   </div>
</form>
 
 
</body>
</html>
 
 
@endsection