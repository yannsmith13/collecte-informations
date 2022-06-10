<?php

namespace Database\Seeders;

use App\Models\Reason;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reason::create([
            'description' => "Autres",
        ]);
        
        Reason::create([
            'description' => "Mon site est une simple carte de visite digitale, visible par ceux avec qui je le partagerai. Il ne doit contenir que des informations basiques : nom de l’entreprise, type d’activité, coordonnées, horaires et tarifs",
        ]);

        Reason::create([
            'description' => "Je dois pouvoir y montrer mon travail et mes réalisations. Il doit me servir à mettre en valeur mes compétences, mon expérience et/ou mon talent. il peut me servir de book ou de CV par exemple",
        ]);

        Reason::create([
            'description' => "Il doit me permettre de convertir des visiteurs en nouveaux clients ou prospects. J’attends des visiteurs qu’ils naviguent sur le site pour effectuer des achats, des demandes de devis ou commander des services",
        ]);

        Reason::create([
            'description' => "Il doit me permettre d’être contacté facilement et rapidement dès les premières secondes de visite sur le site (services d’urgences : ambulances, traitement des nuisibles, plombiers, serruriers…)",
        ]);

        Reason::create([
            'description' => "Mon site doit permettre la réservation ou prise de rendez-vous en ligne (médecins, praticiens, thérapeutes, gîtes, hôtels, restaurants, consultants divers…)",
        ]);

        
    }
}
