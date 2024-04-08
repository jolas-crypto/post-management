<?php

namespace App\Http\Controllers;

use App\Helpers\RegistrationHelper;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    private $registrationMethodCustom;

    public function __construct(RegistrationHelper $registrationHelper)
    {
        $this->registrationMethodCustom = $registrationHelper;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.auth.registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegistrationRequest $registrationRequest)
    {
        $this->registrationMethodCustom->storeCustom($registrationRequest);

        return redirect()->route('post.index')
        ->withSuccess('You have successfully registered & logged in!');
    }
}
