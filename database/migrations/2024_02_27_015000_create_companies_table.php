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
        // Creación de tabla Compañias en la base de datos
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string("nit")->nullable();
            $table->string("name");
            $table->string("email")->nullable();
            $table->string("password");
            $table->string("alternative_email")->nullable();
            $table->boolean('confirm_company_status')->default(false);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
