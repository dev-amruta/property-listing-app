
<h2>Available Properties</h2>

@foreach($properties as $property)

<div>

<h3>{{$property->title}}</h3>

<p>{{$property->price}}</p>

<a href="/property/{{$property->id}}">View Details</a>

</div>

@endforeach
