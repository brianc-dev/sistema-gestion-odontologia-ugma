<?php

namespace App\Http\Controllers;

use App\Models\Historia;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HistoriaController extends Controller
{
    private const NUMERO_HISTORIA_PATTERN = '/^T-[\d]{4}-[\d]{4}$/';
    // Regex to match T-0000-0000
    // /^T-[\d]{4}-[\d]{4}$/
    public function __construct()
    {
        $this->authorizeResource(Historia::class, 'historia');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Historia::class);

        if (Auth::user()->estudiante->historias->count() >= 5) {
            return redirect()->back()->with(['message' => 'No puedes crear mas de 5 historias.']);
        }

        $current_year = date('Y');

        // Generamos el numero de la historia
        $latest_historia = Historia::latest()->first();
        if (isset($latest_historia)) {
            $historia_next_number = $latest_historia->id + 1;
        } else {
            $historia_next_number = 1;
        }

        $historia_next_number = str_pad($historia_next_number, 4, "0", STR_PAD_LEFT);
        $historia_number = 'T-' . $historia_next_number . '-' . $current_year;

        $validator = Validator::make(
            [
                'current_year' => $current_year,
                'historia_number' => $historia_number
            ],
            [
                'current_year' => ['required', 'numeric', 'integer'],
                'historia_number' => ['required', 'string', 'regex:/^T-[\d]{4}-[\d]{4}$/']
            ]);

        if ($validator->fails()) {
            die(500);
        }

        $valid = $validator->validated();

        $estudiante_id = Auth::user()->estudiante->id;

        $historia = Historia::create([
            'numero_historia' => $valid['historia_number'],
            'ano_creacion' => $valid['current_year'],
            'estudiante_id' => $estudiante_id
        ]);

        return view('pages.historia.create', ['numero_historia' => $historia->numero_historia]);
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
