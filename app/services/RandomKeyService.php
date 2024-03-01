<?php 

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RandomKeyService
{
    public function generateKey($length = 10)
    {
        return Str::random($length);
    }
    public function encryptText($text)
    {
        return Hash::make($text);
    }
}

?>
