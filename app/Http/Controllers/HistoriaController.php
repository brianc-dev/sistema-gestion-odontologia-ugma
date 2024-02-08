<?php

namespace App\Http\Controllers;

use App\Models\Historia;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HistoriaController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Historia::class, 'historia');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->role_id == 0) {
            return view('pages.admin.historia');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.historia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Historia $historia)
    {
        if (Auth::user()->role_id == 0) {
            return view('pages.admin.historia.show', ['historia' => $historia]);
        }
        return view('pages.historia.show', ['historia' => $historia]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Historia $historia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Historia $historia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Historia $historia)
    {
        //
    }
}
