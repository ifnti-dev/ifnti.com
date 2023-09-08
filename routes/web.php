<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\EntretienController;
use App\Http\Controllers\SessionConcourController;
use App\Models\Dossier;
use GuzzleHttp\Psr7\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/login', function () {
//     redirect(route("login"));
// });


/**Vitrine */
Route::get('/', function () {
    return view('vitrine.pages.home');
})->name('accueil');
Route::get('/actualite', function () {
    return view('vitrine.pages.actualite');
})->name('actualite');
Route::get('/contact', function () {
    return view('vitrine.pages.contact');
})->name('contact');
Route::prefix("ifnti/")->name("ifnti.")->group(
    function () {
        Route::get('/', function () {
            return redirect(route('ifnti.presentation'));
        })->name('ifnti');
        Route::get('a_propos', function () {
            return view('vitrine.pages.ifnti.about');
        })->name('presentation');
        Route::get('equipe_pedagogique', function () {
            return view('vitrine.pages.ifnti.professeurs');
        })->name('professeurs');
        Route::get('etudiants', function () {
            return view('vitrine.pages.ifnti.diplome');
        })->name('etudiants');
    }
);
Route::prefix("admission/")->name("admission.")->group(
    function () {
        Route::get('', function () {
            return redirect(route("admission.concours"));
        })->name('admission');
        Route::get('frais', function () {
            return view('vitrine.pages.admission.frais');
        })->name('frais');
        Route::get('concours', function () {
            return view('vitrine.pages.admission.concours');
        })->name('concours');
    }
);
Route::prefix("formation/")->name("formation.")->group(
    function () {
        Route::get('', function () {
            return view('vitrine.pages.formation.index');
        })->name('all');
        Route::get('base_de_deonne', function () {
            return view('vitrine.pages.formation.bd');
        })->name('cours-bd');
        Route::get('architecture_des_ordinateurs', function () {
            return view('vitrine.pages.formation.ao');
        })->name('cours-ao');
        Route::get('reseaux_securite', function () {
            return view('vitrine.pages.formation.rs');
        })->name('cours-rs');
        Route::get('programmation', function () {
            return view('vitrine.pages.formation.programmation');
        })->name('cours-programmation');
        Route::get('systeme_exploitation', function () {
            return view('vitrine.pages.formation.se');
        })->name('cours-se');
        Route::get('matiere_generale', function () {
            return view('vitrine.pages.formation.general');
        })->name('general');
    }
);

Route::prefix("actu/")->name("actu.")->group(
    function () {
        Route::get('ceremoniederemisedediplomes', function () {
            return view('vitrine.pages.actu.ceremoniederemisedediplomes');
        })->name('ceremoniederemisedediplomes');
        Route::get('concoursdentree', function () {
            return view('vitrine.pages.actu.concoursdentree');
        })->name('concoursdentree');
        Route::get('journeesportesouvertes', function () {
            return view('vitrine.pages.actu.journeesportesouvertes');
        })->name('journeesportesouvertes');
        Route::get('prixmisstic', function () {
            return view('vitrine.pages.actu.prixmisstic');
        })->name('prixmisstic');
        Route::get('partenariat', function () {
            return view('vitrine.pages.actu.partenariat');
        })->name('partenariat');
        Route::get('nouvellesdecouvertes', function () {
            return view('vitrine.pages.actu.nouvellesdecouvertes');
        })->name('nouvellesdecouvertes');
    }
);
/*ADMIN*/
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/sessionConcour', [SessionConcourController::class, 'index'])->name('sessionConcours');
Route::get('/sessionConcour/go', [CandidatController::class, 'session'])->name('sessionConcours.choix');
Route::get('/dossier/{dossier}', [DossierController::class, 'show'])->name('dossier.show');
Route::put('dossier/mis_a_jours_note/{dossier}', [DossierController::class, 'updateNote'])->name("dossier.updateNote");
Route::put('dossier/mis_a_jours_appreciation/{dossier}', [DossierController::class, 'updateAppreciation'])->name("dossier.updateAppreciation");

/* -------------------------------------------------------------------------- */
/*                         Create an section route get                        */
/* -------------------------------------------------------------------------- */

Route::get('/create_session/create', [SessionConcourController::class, 'create'])->name('create_session');
Route::post('/create_session/store', [SessionConcourController::class, 'store'])->name('store_session');

/* -------------------------------------------------------------------------- */
/*                                     FIN                                    */
/* -------------------------------------------------------------------------- */
Route::put('dossier/mis_a_jours_admission/{dossier}', [DossierController::class, 'updateDossierStatus'])->name("dossier.updateAdmission");



Route::delete('dossier/{dossier}', [DossierController::class, 'destroy'])->name("dossier.destroy");
Route::get('dossiers/index', [DossierController::class, 'index'])->name("dossier.index");
Route::get('dossiers/index/search', [DossierController::class, 'index'])->name("dossier.search");
/*entretien*/

Route::delete('entretien/{entretien}', [EntretienController::class, 'destroy'])->name("entretien.destroy");
Route::get('entretien/index', [EntretienController::class, 'index'])->name("entretiens");
Route::get('entretien/{entretien}', [EntretienController::class, 'show'])->name("entretien.show");
Route::put('entretien/mise_a_jour/{entretien}', [EntretienController::class, 'update'])->name("entretien.update");
Route::get('entretien/creation', [EntretienController::class, 'create'])->name("entretien.create");
Route::get('entretien/assigner_un_dossier', [EntretienController::class, 'addDossier'])->name("entretien.addDosier");
Route::post('entretien/creation', [EntretienController::class, 'store'])->name("entretien.store");
Route::post('entretien/retirer_un_dossier/{entretien}', [EntretienController::class, 'retirerDossier'])->name("entretien.retirer");
Route::post('entretien/assigner_un_dossier/{entretien}', [EntretienController::class, 'assignerDossier'])->name("entretien.assigner");
//routes d'inscription

Route::get('dossier/formulaire/creation', [CandidatController::class, 'create'])->name("dossier.create");

Route::post('dossier/enregistrement', [CandidatController::class, 'store'])->name("dossier.store");



Route::prefix('admission/')->name('admission.')->group(function () {
    Route::get('formulaire', function () {
        return view('admission.index');
    });
});


Route::get('*', function () {
    redirect(route("accueil"));
});
