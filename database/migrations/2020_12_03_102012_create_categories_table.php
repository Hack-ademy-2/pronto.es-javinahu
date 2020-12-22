<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        
        $categories = [
            'Móviles', 'Autos', 'Electro', 'Libros', 
            'Juegos', 'Deporte', 'Ocio', 'Música', 'Mobiliario'
            ];

        foreach ($categories as $category) {
            $c = new Category();
            $c->name = $category;
            $c->save();
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
