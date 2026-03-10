
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

public function up(){

Schema::create('properties', function (Blueprint $table) {

$table->id();
$table->string('title');
$table->text('description');
$table->string('property_type');
$table->decimal('price',12,2);
$table->string('location');
$table->string('status')->default('available');
$table->string('image')->nullable();
$table->timestamps();

});

}

public function down(){
Schema::dropIfExists('properties');
}

};
