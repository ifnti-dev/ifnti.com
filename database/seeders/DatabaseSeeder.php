<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Candidat;
use App\Models\Decoupage;
use App\Models\Dossier;
use App\Models\Entretien;
use App\Models\Matiere;
use App\Models\Niveau;
use App\Models\SessionConcour;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Candidat::factory()
            ->count(5)
            ->has(
                Dossier::factory()
                    ->hasNote()
                    ->for(SessionConcour::factory()->state(
                        [
                            'date_debut' => Date::create(2023, 7, 10),
                            'date_fin' => Date::create(2023, 7, 14),
                        ]
                    ))
                    ->for(Entretien::factory())
                    ->has(Niveau::factory()
                        ->count(5)
                        ->has(
                            Decoupage::factory()
                                ->count(3)
                                ->hasBulletin()
                                ->has(
                                    Matiere::factory()
                                        ->count(3)
                                        ->state(
                                            new Sequence(
                                                [
                                                    'nom' => "math",

                                                ],
                                                [
                                                    'nom' => "ang",
                                                ],
                                                [
                                                    'nom' => "fr",
                                                ]
                                            )
                                        )
                                )
                                ->state(
                                    new Sequence(
                                        [
                                            'nom' => "Tim 1",

                                        ],
                                        [
                                            'nom' => "Trim 2",
                                        ],
                                        [
                                            'nom' => "Trim 3",
                                        ],

                                    )
                                )
                        )
                        ->state(
                            new Sequence(
                                [
                                    'nom' => "2nde",

                                ],
                                [
                                    'nom' => "1ere",
                                ],
                                [
                                    'nom' => "Tle",
                                ],
                                [
                                    'nom' => "proba",
                                ],
                                [
                                    'nom' => "bac",
                                ]
                            )
                        ))
            )
            ->create();
        Candidat::factory()
            ->count(5)
            ->has(
                Dossier::factory()
                    ->hasNote()
                    ->for(SessionConcour::factory()->state(
                        [
                            'date_debut' => Date::create(2023, 8, 10),
                            'date_fin' => Date::create(2023, 9, 14),
                        ]
                    ))
                    ->for(Entretien::factory())
                    ->has(Niveau::factory()
                        ->count(5)
                        ->has(
                            Decoupage::factory()
                                ->count(3)
                                ->hasBulletin()
                                ->has(
                                    Matiere::factory()
                                        ->count(3)
                                        ->state(
                                            new Sequence(
                                                [
                                                    'nom' => "math",

                                                ],
                                                [
                                                    'nom' => "ang",
                                                ],
                                                [
                                                    'nom' => "fr",
                                                ]
                                            )
                                        )
                                )
                                ->state(
                                    new Sequence(
                                        [
                                            'nom' => "Tim 1",

                                        ],
                                        [
                                            'nom' => "Trim 2",
                                        ],
                                        [
                                            'nom' => "Trim 3",
                                        ],

                                    )
                                )
                        )
                        ->state(
                            new Sequence(
                                [
                                    'nom' => "2nde",

                                ],
                                [
                                    'nom' => "1ere",
                                ],
                                [
                                    'nom' => "Tle",
                                ],
                                [
                                    'nom' => "proba",
                                ],
                                [
                                    'nom' => "bac",
                                ]
                            )
                        ))
            )
            ->create();

        Candidat::factory()
            ->count(5)
            ->has(
                Dossier::factory()
                    ->hasNote()
                    ->for(SessionConcour::factory()->state(
                        [
                            'date_debut' => Date::create(2023, 9, 10),
                            'date_fin' => Date::create(2023, 9, 14),
                        ]
                    ))
                    // ->for(Entretien::factory())
                    ->has(Niveau::factory()
                        ->count(5)
                        ->has(
                            Decoupage::factory()
                                ->count(3)
                                ->hasBulletin()
                                ->has(
                                    Matiere::factory()
                                        ->count(3)
                                        ->state(
                                            new Sequence(
                                                [
                                                    'nom' => "math",

                                                ],
                                                [
                                                    'nom' => "ang",
                                                ],
                                                [
                                                    'nom' => "fr",
                                                ]
                                            )
                                        )
                                )
                                ->state(
                                    new Sequence(
                                        [
                                            'nom' => "Tim 1",

                                        ],
                                        [
                                            'nom' => "Trim 2",
                                        ],
                                        [
                                            'nom' => "Trim 3",
                                        ],

                                    )
                                )
                        )
                        ->state(
                            new Sequence(
                                [
                                    'nom' => "2nde",

                                ],
                                [
                                    'nom' => "1ere",
                                ],
                                [
                                    'nom' => "Tle",
                                ],
                                [
                                    'nom' => "proba",
                                ],
                                [
                                    'nom' => "bac",
                                ]
                            )
                        ))
            )
            ->create();
        $this->call(
            [
                AdminSeeder::class,
            ]
        );
    }
}
