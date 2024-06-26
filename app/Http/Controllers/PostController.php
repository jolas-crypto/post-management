<?php

namespace App\Http\Controllers;

use App\Helpers\PostHelper;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    private $postMethodHelper;

    public function __construct(PostHelper $postHelper)
    {
        $this->postMethodHelper = $postHelper;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->postMethodHelper->dataPost();

        return view('pages.posts.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $postRequest)
    {
        $post = $this->postMethodHelper->customPost($postRequest);

        return response()->json([
            'data' => $post,
            'message' => 'Post was successfully added.'
        ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        return response()->json(['message' => 'Post updated successfully'], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json(['message' => 'Successfully Deleted!'], Response::HTTP_OK);
    }


    public function archived(Request $request, string $id)
    {
        Post::where('id', $id)->update($request->all());

        return response()->json(['message' => 'Successfully Archived!'], Response::HTTP_OK);
    }
}
