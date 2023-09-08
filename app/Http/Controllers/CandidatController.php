<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Niveau;
use App\Models\Decoupage;
use App\Models\Matiere;
use App\Models\Bulletin;
use App\Models\Candidat;
use App\Models\SessionConcour;
use App\Models\Dossier;

class CandidatController extends Controller
{
    public function session( ) {
        return view('admission.session');
    }

    public function index()
    {
        $dossiers = Dossier::all();
        return view('dossiers.index',compact('dossiers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admission.index');
    }

    public function store(Request $request)
    {
        $candidat = Candidat::create($request->all());
        $session_concour = SessionConcour::create([
            'date_debut' => '2000-02-02',
            'date_fin' => '2000-02-02',
        ]);
        $dossier = Dossier::create([
            'candidat_id' => $candidat->id,
            'session_concour_id' => $session_concour->id,
        ]);

        
        //les cinq niveaux

        /*****************************Seconde*************************/
        $seconde = Niveau::create([
            'nom' => 'seconde',
            'serie' => $request->input('serie_seconde'),
            // 'systeme' => $request->input('systeme_seconde'),
            'systeme' => 'semestriel',
            //$request['annee'] => $request->input('annee_seconde'),
            'etablissement' => $request->input('etablissement_seconde'),
            'dossier_id' => $dossier->id,
        ]);

        if($seconde->systeme == 'semestriel'){
            //les bullettins sem1 et sem2
            $bullettin_seconde_semestre1 = Bulletin::create([
                'fichier' => $request->input('bullettin_seconde_semestre1'),
            ]);
            $bullettin_seconde_semestre2 = Bulletin::create([
                'fichier' => $request->input('bullettin_seconde_semestre2'),
            ]);

            $seconde_semestre1 = Decoupage::create([
                'nom' => 'semestre1',
                'niveau_id' => $seconde->id,
                'id_bulletin' => $bullettin_seconde_semestre1->id,
            ]);
            //les notes
            $math = Matiere::create([
                'nom' => 'math',
                'note' => $request->input('note_math_seconde_s1'),
                'decoupage_id' => $seconde_semestre1->id,

            ]);
            $fr = Matiere::create([
                'nom' => 'fr',
                'note' => $request->input('note_fr_seconde_s1'),
                'decoupage_id' => $seconde_semestre1->id,

            ]);
            $ang = Matiere::create([
                'nom' => 'ang',
                'note' => $request->input('note_ang_seconde_s1'),
                'decoupage_id' => $seconde_semestre1->id,

            ]);

            $seconde_semestre2 = Decoupage::create([
                'nom' => 'semestre2',
                'niveau_id' => $seconde->id,
                'id_bulletin' => $bullettin_seconde_semestre2->id,
            ]);
            //les notes
            $math = Matiere::create([
                'nom' => 'math',
                'note' => $request->input('note_math_seconde_s2'),
               'decoupage_id' => $seconde_semestre2->id,

            ]);
            $fr = Matiere::create([
               'nom' => 'fr',
                'note' => $request->input('note_fr_seconde_s2'),
               'decoupage_id' => $seconde_semestre2->id,

            ]);
            $ang = Matiere::create([
                'nom' => 'ang',
                'note' => $request->input('note_ang_seconde_s2'),
                'decoupage_id' => $seconde_semestre2->id,

            ]);
        }else{
            $bullettin_seconde_trimestre1 = Bullettin::create([
                'fichier' => $request->input('bullettin_seconde_trimestre1'),
            ]);
            $bullettin_seconde_trimestre2 = Bulletin::create([
                'fichier' => $request->input('bullettin_seconde_trimestre2'),
            ]);
            $bullettin_seconde_trimestre3 = Bulletin::create([
                'fichier' => $request->input('bullettin_seconde_trimestre3'),
            ]);

            $seconde_trimestre1 = Decoupage::create([
                'nom' => 'trimestre1',
                'niveau_id' => $seconde->id,
                'id_bulletin' => $bullettin_seconde_trimestre1->id,
            ]);
            //les notes
            $math = Matiere::create([
                'nom' => 'math',
                'note' => $request->input('note_math_seconde_trim1'),
                'decoupage_id' => $seconde_trimestre1->id,

            ]);
            $fr = Matiere::create([
                'nom' => 'fr',
                'note' => $request->input('note_fr_seconde_trim1'),
                'decoupage_id' => $seconde_trimestre1->id,

            ]);
            $ang = Matiere::create([
                'nom' => 'ang',
                'note' => $request->input('note_ang_seconde_trim1'),
                'decoupage_id' => $seconde_trimestre1->id,

            ]);

            $seconde_trimestre2 = Decoupage::create([
                'nom' => 'trimestre2',
                'niveau_id' => $seconde->id,
                'id_bulletin' => $bullettin_seconde_trimestre2->id,
            ]);
            //les notes
            $math = Matiere::create([
                'nom' => 'math',
                'note' => $request->input('note_math_seconde_trim2'),
                'decoupage_id' => $seconde_trimestre2->id,

            ]);
            $fr = Matiere::create([
                'nom' => 'fr',
                'note' => $request->input('note_fr_seconde_trim2'),
                'decoupage_id' => $seconde_trimestre2->id,

            ]);
            $ang = Matiere::create([
                'nom' => 'ang',
                'note' => $request->input('note_ang_seconde_trim2'),
                'decoupage_id' => $seconde_trimestre2->id,

            ]);

            $trimestre3 = Decoupage::create([
                'nom' => 'trimestre3',
                'niveau_id' => $seconde->id,
                'id_bulletin' => $bullettin_seconde_trimestre3->id,
            ]);
            //les notes
            $math = Matiere::create([
                'nom' => 'math',
                'note' => $request->input('note_math_seconde_trim3'),
                'decoupage_id' => $seconde_trimestre3->id,

            ]);
            $fr = Matiere::create([
                'nom' => 'fr',
                'note' => $request->input('note_fr_seconde_trim3'),
                'decoupage_id' => $seconde_trimestre3->id,

            ]);
            $ang = Matiere::create([
                'nom' => 'ang',
                'note' => $request->input('note_ang_seconde_trim3'),
                'decoupage_id' => $seconde_trimestre3->id,

            ]);

        }

        /*****************************Premiere*************************/
        $premiere = Niveau::create([
            'nom' => 'premiere',
            'serie' => $request->input('serie_premiere'),
            // 'systeme' => $request->input('systeme_premiere'),
            'systeme' => 'semestriel',
            'etablissement' => $request->input('etablissement_premiere'),
            //'annee' => $request->input('annee_premiere'),
            'dossier_id' => $dossier->id,
        ]);

        if($premiere->systeme == 'semestriel'){
            //les bullettins sem1 et sem2
            $bullettin_premiere_semestre1 = Bulletin::create([
                'fichier' => $request->input('bullettin_premiere_semestre1'),
            ]);
            $bullettin_premiere_semestre2 = Bulletin::create([
                'fichier' => $request->input('bullettin_premiere_semestre2'),
            ]);

            $premiere_semestre1 = Decoupage::create([
                'nom' => 'semestre1',
                'niveau_id' => $premiere->id,
                'id_bulletin' => $bullettin_premiere_semestre1->id,
            ]);
            //les notes
            $math = Matiere::create([
                'nom' => 'math',
                'note' => $request->input('note_math_premiere_s1'),
                'decoupage_id' => $premiere_semestre1->id,

            ]);
            $fr = Matiere::create([
                'nom' => 'fr',
                'note' => $request->input('note_fr_premiere_s1'),
                'decoupage_id' => $premiere_semestre1->id,

            ]);
            $ang = Matiere::create([
                'nom' => 'ang',
                'note' => $request->input('note_ang_premiere_s1'),
                'decoupage_id' => $premiere_semestre1->id,

            ]);

            $premiere_semestre2 = Decoupage::create([
                'nom' => 'semestre2',
                'niveau_id' => $premiere->id,
                'id_bulletin' => $bullettin_premiere_semestre2->id,
            ]);
            //les notes
            $math = Matiere::create([
                'nom' => 'math',
                'note' => $request->input('note_math_premiere_s2'),
                'decoupage_id' => $premiere_semestre2->id,

            ]);
            $fr = Matiere::create([
                'nom' => 'fr',
                'note' => $request->input('note_fr_premiere_s2'),
                'decoupage_id' => $premiere_semestre2->id,

            ]);
            $ang = Matiere::create([
                'nom' => 'ang',
                'note' => $request->input('note_ang_premiere_s2'),
                'decoupage_id' => $premiere_semestre2->id,

            ]);
        }else{
            $bullettin_premiere_trimestre1 = Bulletin::create([
                'fichier' => $request->input('bullettin_premiere_trimestre1'),
            ]);
            $bullettin_premiere_trimestre2 = Bulletin::create([
                'fichier' => $request->input('bullettin_premiere_trimestre2'),
            ]);
            $bullettin_premiere_trimestre3 = Bulletin::create([
               'fichier' => $request->input('bullettin_premiere_trimestre3'),
            ]);

            $premiere_trimestre1 = Decoupage::create([
                'nom' => 'trimestre1',
                'niveau_id' => $premiere->id,
                'id_bulletin' => $bullettin_premiere_trimestre1->id,
            ]);
            //les notes
            $math = Matiere::create([
                'nom' => 'math',
                'note' => $request->input('note_math_premiere_trim1'),
                'decoupage_id' => $premiere_trimestre1->id,

            ]);
            $fr = Matiere::create([
                'nom' => 'fr',
                'note' => $request->input('note_fr_premiere_trim1'),
                'decoupage_id' => $premiere_trimestre1->id,

            ]);
            $ang = Matiere::create([
                'nom' => 'ang',
                'note' => $request->input('note_ang_premiere_trim1'),
                'decoupage_id' => $premiere_trimestre1->id,

            ]);

            $premiere_trimestre2 = Decoupage::create([
                'nom' => 'trimestre2',
                'niveau_id' => $premiere->id,
                'id_bulletin' => $bullettin_premiere_trimestre2->id,
            ]);
            //les notes
            $math = Matiere::create([
                'nom' => 'math',
                'note' => $request->input('note_math_premiere_trim2'),
                'decoupage_id' => $premiere_trimestre2->id,

            ]);
            $fr = Matiere::create([
                'nom' => 'fr',
                'note' => $request->input('note_fr_premiere_trim2'),
                'decoupage_id' => $premiere_trimestre2->id,

            ]);
            $ang = Matiere::create([
                'nom' => 'ang',
                'note' => $request->input('note_ang_premiere_trim2'),
                'decoupage_id' => $premiere_trimestre2->id,

            ]);

            $trimestre3 = Decoupage::create([
                'nom' => 'trimestre3',
                'niveau_id' => $premiere->id,
                'id_bulletin' => $bullettin_premiere_trimestre3->id,
            ]);
            //les notes
            $math = Matiere::create([
                'nom' => 'math',
                'note' => $request->input('note_math_premiere_trim3'),
                'decoupage_id' => $premiere_trimestre3->id,

            ]);
            $fr = Matiere::create([
               'nom' => 'fr',
                'note' => $request->input('note_fr_premiere_trim3'),
                'decoupage_id' => $premiere_trimestre3->id,

            ]);
            $ang = Matiere::create([
                'nom' => 'ang',
                'note' => $request->input('note_ang_premiere_trim3'),
                'decoupage_id' => $premiere_trimestre3->id,

            ]);

        }

        /*****************************Terminale*************************/
        $terminale = Niveau::create([
            'nom' => 'terminale',
            'serie' => $request->input('serie_terminale'),
            // 'systeme' => $request->input('systeme_terminale'),
            'systeme' => 'semestriel',
            'etablissement' => $request->input('etablissement_terminale'),
            //'annee' => $request->input('annee_terminale'),
            'dossier_id' => $dossier->id,
        ]);

        if($terminale->systeme == 'semestriel'){
            //les bullettins sem1 et sem2
            $bullettin_terminale_semestre1 = Bulletin::create([
                'fichier' => $request->input('bullettin_terminale_semestre1'),
            ]);
            $bullettin_terminale_semestre2 = Bulletin::create([
                'fichier' => $request->input('bullettin_terminale_semestre2'),
            ]);

            $terminale_semestre1 = Decoupage::create([
                'nom' => 'semestre1',
                'niveau_id' => $terminale->id,
                'id_bulletin' => $bullettin_terminale_semestre1->id,
            ]);
            //les notes
            $math = Matiere::create([
                'nom' => 'math',
                'note' => $request->input('note_math_terminale_s1'),
                'decoupage_id' => $terminale_semestre1->id,

            ]);
            $fr = Matiere::create([
                'nom' => 'fr',
                'note' => $request->input('note_fr_terminale_s1'),
                'decoupage_id' => $terminale_semestre1->id,

            ]);
            $ang = Matiere::create([
                'nom' => 'ang',
                'note' => $request->input('note_ang_terminale_s1'),
                'decoupage_id' => $terminale_semestre1->id,

            ]);

            $terminale_semestre2 = Decoupage::create([
                'nom' => 'semestre2',
                'niveau_id' => $terminale->id,
                'id_bulletin' => $bullettin_terminale_semestre2->id,
            ]);
            //les notes
            $math = Matiere::create([
                'nom' => 'math',
                'note' => $request->input('note_math_terminale_s2'),
                'decoupage_id' => $terminale_semestre2->id,

            ]);
            $fr = Matiere::create([
                'nom' => 'fr',
                'note' => $request->input('note_fr_terminale_s2'),
                'decoupage_id' => $terminale_semestre2->id,

            ]);
            $ang = Matiere::create([
                'nom' => 'ang',
                'note' => $request->input('note_ang_terminale_s2'),
                'decoupage_id' => $terminale_semestre2->id,

            ]);
        }else{
            $bullettin_terminale_trimestre1 = Bulletin::create([
                'fichier' => $request->input('bullettin_terminale_trimestre1'),
            ]);
            $bullettin_terminale_trimestre2 = Bulletin::create([
                'fichier' => $request->input('bullettin_terminale_trimestre2'),
            ]);
            $bullettin_terminale_trimestre3 = Bulletin::create([
                'fichier' => $request->input('bullettin_terminale_trimestre3'),
            ]);

            $terminale_trimestre1 = Decoupage::create([
                'nom' => 'trimestre1',
                'niveau_id' => $terminale->id,
                'id_bulletin' => $bullettin_terminale_trimestre1->id,
            ]);
            //les notes
            $math = Matiere::create([
                'nom' => 'math',
                'note' => $request->input('note_math_terminale_trim1'),
                'decoupage_id' => $terminale_trimestre1->id,

            ]);
            $fr = Matiere::create([
                'nom' => 'fr',
                'note' => $request->input('note_fr_terminale_trim1'),
                'decoupage_id' => $terminale_trimestre1->id,

            ]);
            $ang = Matiere::create([
                'nom' => 'ang',
                'note' => $request->input('note_ang_terminale_trim1'),
                'decoupage_id' => $terminale_trimestre1->id,

            ]);

            $terminale_trimestre2 = Decoupage::create([
                'nom' => 'trimestre2',
                'niveau_id' => $terminale->id,
                'id_bulletin' => $bullettin_terminale_trimestre2->id,
            ]);
            //les notes
            $math = Matiere::create([
                'nom' => 'math',
                'note' => $request->input('note_math_terminale_trim2'),
                'decoupage_id' => $terminale_trimestre2->id,

            ]);
            $fr = Matiere::create([
                'nom' => 'fr',
                'note' => $request->input('note_fr_terminale_trim2'),
                'decoupage_id' => $terminale_trimestre2->id,

            ]);
            $ang = Matiere::create([
                'nom' => 'ang',
                'note' => $request->input('note_ang_terminale_trim2'),
                'decoupage_id' => $terminale_trimestre2->id,

            ]);

            $trimestre3 = Decoupage::create([
                'nom' => 'trimestre3',
                'niveau_id' => $terminale->id,
                'id_bulletin' => $bullettin_terminale_trimestre3->id,
            ]);
            //les notes
            $math = Matiere::create([
                'nom' => 'math',
                'note' => $request->input('note_math_terminale_trim3'),
                'decoupage_id' => $terminale_trimestre3->id,

            ]);
            $fr = Matiere::create([
                'nom' => 'fr',
                'note' => $request->input('note_fr_terminale_trim3'),
                'decoupage_id' => $terminale_trimestre3->id,

            ]);
            $ang = Matiere::create([
                'nom' => 'ang',
                'note' => $request->input('note_ang_terminale_trim3'),
                'decoupage_id' => $terminale_trimestre3->id,

            ]);

        }



        

        /*****************************bac1*************************/
        $bac1 = Niveau::create([
            'nom' => 'bac1',
            'serie' => $request->input('serie_bac1'),
            'systeme' => 'examen',
            'etablissement' => $request->input('etablissement_premiere'),
            //'annee' => $request->input('annee_bac1'),
            'dossier_id' => $dossier->id,
        ]);

        $releve_bac1= Bulletin::create([
            'fichier' => $request->input('releve_bac1'),
        ]);
        

        $bac1_decoupage = Decoupage::create([
            'nom' => 'bac1',
            'niveau_id' => $bac1->id,
            'id_bulletin' => $releve_bac1->id,
        ]);
        //les notes
        $math = Matiere::create([
            'nom' => 'math',
            'note' => $request->input('note_math_bac1'),
            'decoupage_id' => $bac1_decoupage->id,

        ]);
        $fr = Matiere::create([
            'nom' => 'fr',
            'note' => $request->input('note_fr_bac1'),
            'decoupage_id' => $bac1_decoupage->id,

        ]);
        $ang = Matiere::create([
            'nom' => 'ang',
            'note' => $request->input('note_ang_bac1'),
            'decoupage_id' => $bac1_decoupage->id,

        ]);



        /*****************************bac2*************************/
        $bac2 = Niveau::create([
            'nom' => 'bac2',
            'serie' => $request->input('serie_bac2'),
            'systeme' => 'examen',
            'etablissement' => $request->input('etablissement_terminale'),
            //'annee' => $request->input('annee_bac2'),
            'dossier_id' => $dossier->id,
        ]);

        $releve_bac2= Bulletin::create([
            'fichier' => $request->input('releve_bac2'),
        ]);
        

        $bac2_decoupage = Decoupage::create([
            'nom' => 'bac2',
            'niveau_id' => $bac2->id,
            'id_bulletin' => $releve_bac2->id,
        ]);
        //les notes
        $math = Matiere::create([
            'nom' => 'math',
            'note' => $request->input('note_math_bac2'),
            'decoupage_id' => $bac2_decoupage->id,

        ]);
        $fr = Matiere::create([
            'nom' => 'fr',
            'note' => $request->input('note_fr_bac2'),
            'decoupage_id' => $bac2_decoupage->id,

        ]);
        $ang = Matiere::create([
            'nom' => 'ang',
            'note' => $request->input('note_ang_bac2'),
            'decoupage_id' => $bac2_decoupage->id,

        ]);

        return redirect()->route('dossier.index');

         
        }
        

    public function show(Dossier $dossier)
    {
        return view('dossiers.show',compact('dossier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dossier $dossier)
    {
        return view('dossiers.edit',compact('dossier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dossier $dossier)
    {
       
        $dossier->candidat->update($request->all());
        $dossier->session_concour->update($request->all());
        $dossier->update($request->all());
        
        return redirect()->route('dossier.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dossier $dossier)
    {
        $dossier->delete();
        return redirect()->route('dossier.idex');
    }
}
