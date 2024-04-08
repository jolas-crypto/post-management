<?php

namespace App\Helpers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostedHelper
{
    public function dataPosted()
    {
        $data = [
            'post' => Post::with('user')->orderBy('id', 'desc')->get(),
            'userId' => $userId = Auth::user()->id
        ];

        return $data;
    }
}
