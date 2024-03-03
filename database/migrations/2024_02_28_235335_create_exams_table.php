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
            $table->string("external_code");
            $table->text("type_exam");
            $table->string("anticoagulant");
            $table->string("or");
            $table->string("sample_type");
            $table->date("exam_date");
            $table->time("exam_hour");
            $table->date("sample_receipt_date");
            $table->time("sample_receipt_hour");
            $table->string("patient_temperature");
            $table->text("diagnostic");
            $table->string("origin_sample");
            $table->text("deliver_date");
            $table->date("birth_date");
            $table->text("taking_days");
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
