<?php

namespace App\Helpers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class ArchivedHelper
{
    public function dataArchived()
    {
        $userId = Auth::user()->id;
        $post = Post::with('user')->where('user_id', $userId)
        ->where('archive', config('post.archived.isArchived'))->get();

        $data = [
            'post' => $post
        ];

        return $data;
    }
}
