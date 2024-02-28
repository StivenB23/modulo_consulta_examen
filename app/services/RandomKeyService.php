<?php 

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RandomKeyService
{
    public function generateKey($length = 10)
    {
        return Hash::make(Str::random($length));
    }
}

?>
