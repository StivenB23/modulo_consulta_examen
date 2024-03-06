<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_exam',
        'documents',
        'observation',
        'exam_id'];

    public function exam()  {
        return $this->belongsTo(Exam::class);
    }
}
