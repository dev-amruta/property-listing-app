
@extends('layouts.admin')

@section('content')

<h2>Properties</h2>

<a href="/admin/properties/create" class="btn btn-primary mb-3">Add Property</a>

<table class="table table-bordered">

<tr>
<th>Title</th>
<th>Price</th>
<th>Location</th>
<th>Action</th>
</tr>

@foreach($properties as $property)

<tr>

<td>{{$property->title}}</td>
<td>{{$property->price}}</td>
<td>{{$property->location}}</td>

<td>

<a href="/admin/properties/{{$property->id}}/edit" class="btn btn-warning btn-sm">Edit</a>

<form action="/admin/properties/{{$property->id}}" method="POST">
@csrf
@method('DELETE')
<button class="btn btn-danger btn-sm">Delete</button>
</form>

</td>

</tr>

@endforeach

</table>

@endsection
