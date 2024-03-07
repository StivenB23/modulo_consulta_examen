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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string("external_code")->nullable();
            $table->text("type_exam")->nullable();
            $table->string("anticoagulant")->nullable();
            $table->string("or");
            $table->string("sample_type")->nullable();
            $table->date("exam_date")->nullable();
            $table->time("exam_hour")->nullable();
            $table->date("deliver_date")->nullable();
            $table->date("sample_receipt_date")->nullable();
            $table->time("sample_receipt_hour")->nullable();
            $table->string("patient_temperature")->nullable();
            $table->text("diagnostic")->nullable();
            $table->string("origin_sample")->nullable();
            $table->date("birth_date")->nullable();
            $table->text("taking_days")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
