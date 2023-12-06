<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('image_name')->nullable();
            $table->updated_at();
            $table->delete_at();
            $table->created_at();
        });
    }
    public function down()
    {
        Schema::dropIfExists('images');
    }
};