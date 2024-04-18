<?php

namespace App\Helpers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostHelper
{
    public function dataPost()
    {
        $userId = Auth::user()->id;

        $data = [
            'post' => Post::with('user')->where('user_id', $userId)->orderBy('id', 'Desc')->get()
        ];

        return $data;
    }

    public function customPost($request)
    {
        $userId = Auth::user()->id;
        
        $request = $request->all();
        $request['user_id'] = $userId;

        return Post::create($request);
    }
}
