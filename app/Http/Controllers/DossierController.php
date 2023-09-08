<?php

namespace App\Http\Controllers;

use App\Http\Requests\dossiers\SearchFormRequest;
use App\Http\Requests\DossierUPRequest;
use App\Http\Requests\NoteRequest;
use App\Models\Dossier;
use App\Models\Note;
use Exception;
use Illuminate\Http\Request;

class DossierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(SearchFormRequest $request)
    {
        $query = Dossier::query();

        if ($request->validated('etat') == 'tous') {
            $query = $query;
        } elseif ($request->validated('etat')) {
            $query = $query->where('etat', '=', $request->validated('etat'));
        }

        if ($request->validated('date_entretien')) {
            $query = $query->where('date_entretien', '=', $request->validated('date_entretien'));
        }

        if ($request->validated('session_id')) {
            $query = $query->where('sessionconcour_id', '=', $request->validated('session_id'));
        }




        return view('admin.dossiers.index', [
            'dossiers' => $query->get(),
            'input' => $request->validated()
        ]);
        //
        // return view('admin.dossiers.index')->with(['dossiers' => Dossier::paginate(10)]);
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
        try {
            $dossier = Dossier::findorFail($id);
            return view('admin.dossiers.show', compact('dossier'));
        } catch (Exception $e) {
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


    public function updateNote(NoteRequest $request,  $id)
    {
        $math = $request->math;
        $ang = $request->ang;
        $fr = $request->fr;
        // dd($dossier);
        $note = Note::where('dossier_id', $id)->get()->first();
        $note->math = $math;
        $note->ang = $ang;
        $note->fr = $fr;
        $note->save();
        return to_route("dossier.show", $id);
    }
    public function updateAppreciation(DossierUpRequest $request,  $id)
    {
        $dossier = Dossier::findOrFail($id);
        $dossier->appreciation = $request->appreciation;
        $dossier->save();
        return to_route("dossier.show", $id);
    }
    public function updateDossierStatus(Request $request,  $id)
    {
        $dossier = Dossier::findOrFail($id);
        // dump($dossier->etat);
        $dossier->etat = $request->etat;
        // dd($dossier->etat);
        $dossier->save();
        return to_route("dossier.show", $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dossier = Dossier::findOrFail($id);
        $dossier->delete();
        return to_route("dossier.index", $id);
    }
}
