
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{

public function index(){
$properties = Property::latest()->paginate(10);
return view('admin.properties.index',compact('properties'));
}

public function create(){
return view('admin.properties.create');
}

public function store(Request $request){

$request->validate([
'title'=>'required',
'description'=>'required',
'price'=>'required|numeric',
'location'=>'required'
]);

Property::create($request->all());

return redirect('/admin/properties');
}

public function edit($id){
$property = Property::findOrFail($id);
return view('admin.properties.edit',compact('property'));
}

public function update(Request $request,$id){
$property = Property::findOrFail($id);
$property->update($request->all());
return redirect('/admin/properties');
}

public function destroy($id){
Property::destroy($id);
return redirect('/admin/properties');
}

public function publicIndex(){
$properties = Property::where('status','available')->paginate(6);
return view('properties.index',compact('properties'));
}

public function show($id){
$property = Property::findOrFail($id);
return view('properties.show',compact('property'));
}

}
