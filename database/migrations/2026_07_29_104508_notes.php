<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notes',function(Blueprint $table){
            $table->id(); //used to identify the id of no.of notes
            $table->string('title',length:255);
            $table->text('description');//used to get the text by the users
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();//used to connect the user and notes table using one to many and delete both when required
            $table->enum('status',['pending','completed']);
            $table->dateTime('deadline')->nullable();
            $table->softDeletes();
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
