
@extends('layouts.admin')

@section('content')

<h2>Edit Property</h2>

<form action="/admin/properties/{{$property->id}}" method="POST">

@csrf
@method('PUT')

<input type="text" name="title" value="{{$property->title}}" class="form-control mb-2">

<textarea name="description" class="form-control mb-2">{{$property->description}}</textarea>

<input type="number" name="price" value="{{$property->price}}" class="form-control mb-2">

<input type="text" name="location" value="{{$property->location}}" class="form-control mb-2">

<button class="btn btn-primary">Update</button>

</form>

@endsection
