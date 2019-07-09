@extends('layout')
 
@section('content')
 
<!DOCTYPE html>
<html>
<head>
<style>
a:link, a:visited {
  background-color: #05ba16;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
 
a:hover, a:active {
  background-color: red;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
 
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
 
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
 
<br>
 
<h1 class="title" > Détail de l'animal </h1>
 
<table>
  <tr>
    <td>Nom: {{ $animal->animal_name }}</td>
  </tr>
 
  <tr>
     <td>Type: {{ $animal->animal_type }}</td>
  </tr>  
  <tr>
     <td>Peau: {{ $animal->animal_skin }}</td>
  </tr>
    <tr>
     <td>Description {{ $animal->animal_description }}</td>
  </tr>
 
 </table> 
 
<br>
<p>
 
    <a href="/animals/{{ $animal->id }}/edit"> Modifier </a>
 
</p>
 
@endsection