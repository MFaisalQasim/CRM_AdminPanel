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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class, 'user_id');
            $table->string('name')->nullable();
            $table->text('detail')->nullable(); 
            $table->longText('description')->nullable();
            $table->float('amount')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('pivority')->default(0);
            $table->integer('type')->default(0);
            $table->text('signed_to')->nullable(); 
            $table->text('project_of')->nullable(); 
            $table->text('no_of_tasks')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};