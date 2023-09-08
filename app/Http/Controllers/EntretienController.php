<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Dossier;
use App\Models\Entretien;
use Illuminate\Http\Request;
use App\Http\Requests\EntretienRequest;

class EntretienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entretiens = Entretien::paginate(1);
        $dossiers = [];

        foreach ( $entretiens as $entretien ) {
            $dossiers[ $entretien->id ] = Dossier::orderBy("moyenne_concours", 'desc')->get()->where( 'entretien_id', $entretien->id );
            // dd($lesDossiers);
        }
        // dd($dossiers);

        return view( 'admin.entretiens.index', compact( 'entretiens', 'dossiers' ) );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.entretiens.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EntretienRequest $request)
    {
        Entretien::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $entretien = Entretien::findOrFail($id);
            $dossiers[$entretien->id] = Dossier::orderBy("moyenne_concours", 'desc')->get()->where('$entretien_id', $entretien->id);
        } catch (Exception $e) {
            return back();
        }
        return view("admin.entretiens.show", compact("entretien", "dossiers"));
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
    public function update(EntretienRequest $request, string $id)
    {
        $entretien = Entretien::findOrFail($id);
        $entretien = $request->date_entretien;
        $entretien->save();
        return to_route('entretien.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $entretien = Entretien::findOrFail($id);
        $entretien->delete();
        return to_route('entretiens', $id);
    }

    public function assignerDossier(Request $request, $id)
    {
        if ($request->all() == '' | $request->all() == null) {
            return back();
        } else {
            foreach ($request->all() as  $value) {
                $doss  = Dossier::findOrFail($value);
                $doss->entretien_id = $id;
                $doss->save();
            }
        }
        return to_route('entretien.show', $id);
    }

    public function retirerDossier(Request $request, $id)
    {
        $doss  = Dossier::findOrFail($request->dossier);
        $doss->entretien_id = null;
        $doss->save();
        return to_route('entretien.show', $id);
    }
}
