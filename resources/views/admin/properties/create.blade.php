
@extends('layouts.admin')

@section('content')

<h2>Add Property</h2>

<form action="/admin/properties" method="POST">

@csrf

<input type="text" name="title" placeholder="Title" class="form-control mb-2">

<textarea name="description" class="form-control mb-2"></textarea>

<input type="text" name="property_type" placeholder="Type" class="form-control mb-2">

<input type="number" name="price" placeholder="Price" class="form-control mb-2">

<input type="text" name="location" placeholder="Location" class="form-control mb-2">

<button class="btn btn-success">Save</button>

</form>

@endsection
