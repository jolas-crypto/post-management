<?php

namespace App\Http\Controllers;

use App\Helpers\PostedHelper;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PostedController extends Controller
{
    private $postedMethodCustom;

    public function __construct(PostedHelper $postedHelper)
    {
        $this->postedMethodCustom = $postedHelper;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->postedMethodCustom->dataPosted();

        return view('pages.posted.index', compact('data'));
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
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, string $id)
    {
        Post::where('id', $id)->update($request->all());

        return response()->json(['message' => 'Successful Rating!'], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
