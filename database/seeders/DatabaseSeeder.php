<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Droit;
use App\Models\User;
use App\Models\AA;
use App\Models\Campus;
use App\Models\Departement;
use App\Models\Engagement;
use App\Models\Evenement;
use App\Models\Groupe;
use App\Models\Inscription;
use App\Models\Local;
use App\Models\Materiel;
use App\Models\Orientation;
use App\Models\Role;
use App\Models\Section;
use App\Models\UE;

use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    

        $this->call([
            UESeeder::class,
            AASeeder::class,
            CampusSeeder::class,
            DepartementSeeder::class,
            DroitSeeder::class,
            EngagementSeeder::class,
            EvenementSeeder::class,
            GroupeSeeder::class,
            InscriptionSeeder::class,
            LocalSeeder::class,
            MaterielSeeder::class,
            OrientationSeeder::class,
            RoleSeeder::class,
            SectionSeeder::class,            
        ]);

        //Ajout user + relation user - droit
        User::factory(10)->create();

        DB::statement('UPDATE droits_users SET created_at = NOW(), updated_at = NOW();');

        //Ajout relation user - role
        $roles = Role::all();
        
        User::all()->each(function($user) use ($roles){
            $user->roles()->attach($roles->random(rand(1, 2))->pluck('id')->toArray());
        });

        DB::statement('UPDATE roles_users SET created_at = NOW(), updated_at = NOW();');

        //Ajout relation entre user - inscription - pour l'ensemble des inscriptions, relation vers user - user peut avoir entre 0 et 3 inscriptions

        $inscriptions = Inscription::all();
        $users = User::all();
        $inscriptionsCount = $inscriptions->count();

        $i = 0;
    
        foreach ($users as $user) {
            $nbInscriptions = min($inscriptionsCount - $i, 3);
            $randomInscriptions = $inscriptions->slice($i, $nbInscriptions);

            $user->inscriptions()->saveMany($randomInscriptions);

            $i += $nbInscriptions;
        }

        //Ajout relation entre engagement - user
        $engagements = Engagement::all();
        $EngagementCount = $engagements->count();

        $i = 0;
    
        foreach ($users as $user) {
            $nbEngagements = min($EngagementCount - $i, 3);
            $randomEngagement = $engagements->slice($i, $nbEngagements);

            $user->engagements()->saveMany($randomEngagement);

            $i += $nbEngagements;
        }


        //Ajout relation entre departement - campus
        $departements = Departement::all();
        Campus::all()->each(function($campus) use ($departements){
            $campus->departement()->associate($departements->random());
            $campus->save();
        });

        //Ajout relation entre campus - engagement
        $campus_all = Campus::all();
        
        Engagement::all()->each(function($engagement) use ($campus_all){
            $engagement->campus()->attach($campus_all->random(rand(1, 2))->pluck('id')->toArray());
        });

        DB::statement('UPDATE campus_engagements SET created_at = NOW(), updated_at = NOW();');

        //Ajout relation entre campus - local
        $locaux = Local::all();
        //$users = User::all();
        $locauxCount = $locaux->count();

        $i = 0;
    
        foreach ($campus_all as $campus) {
            $nbLocaux = min($locauxCount - $i, 3);
            $randomLocaux = $locaux->slice($i, $nbLocaux);

            $campus->locaux()->saveMany($randomLocaux);

            $i += $nbLocaux;
        }


        //Ajout relation entre AA - UE
        //a supprimer -> AAFactory
/*        $aas= AA::all();
        $ues = UE::all();
        $aaCount = $aas->count();

        $i = 0;
    
        foreach ($ues as $ue) {
            $nbAa = min($aaCount - $i, 3);
            $randomAa = $aas->slice($i, $nbAa);

            $ue->aas()->saveMany($randomAa);

            $i += $nbAa;
        }
*/
        //Ajout relation entre evenement - groupe
        $evenements = Evenement::all();
        
        Groupe::all()->each(function($groupe) use ($evenements){
            $groupe->evenements()->attach($evenements->random(rand(1, 2))->pluck('id')->toArray());
        });

        DB::statement('UPDATE evenements_groupes SET created_at = NOW(), updated_at = NOW();');

        //Ajout relation entre inscription - groupe

        $inscriptions = Inscription::all();
        
        Groupe::all()->each(function($groupe) use ($inscriptions){
            $groupe->inscriptions()->attach($inscriptions->random(rand(1, 2))->pluck('id')->toArray());
        });

        DB::statement('UPDATE groupes_inscriptions SET created_at = NOW(), updated_at = NOW();');

        //AJout relation entre groupe - AA
        $aas = AA::all();
        
        Groupe::all()->each(function($groupe) use ($aas){
            $groupe->aas()->attach($aas->random(rand(1, 2))->pluck('id')->toArray());
        });

        DB::statement('UPDATE aa_groupes SET created_at = NOW(), updated_at = NOW();');

        //AJout relation entre inscription - orientation
        $inscriptions = Inscription::all();
        $inscriptionsCount = $inscriptions->count();
        $orientations = Orientation::all();

        $i = 0;
    
        foreach ($orientations as $orientation) {
            $nbInscriptions = min($inscriptionsCount - $i, 5);
            $randomInscriptions = $inscriptions->slice($i, $nbInscriptions);

            $orientation->inscriptions()->saveMany($randomInscriptions);

            $i += $nbInscriptions;
        }

        //Ajout relation entre inscription - AA
        $inscriptions = Inscription::all();
        
        AA::all()->each(function($aa) use ($inscriptions){
            $aa->inscriptions()->attach($inscriptions->random(rand(1, 2))->pluck('id')->toArray());
        });

        DB::statement('UPDATE aa_inscriptions SET created_at = NOW(), updated_at = NOW();');

        //Ajout relation entre local - materiel
        $materiels = Materiel::all();
        $materielsCount = $materiels->count();
        $locaux = Local::all();

        $i = 0;
    
        foreach ($locaux as $local) {
            $nbMateriels = min($materielsCount - $i, 5);
            $randomMateriels = $materiels->slice($i, $nbMateriels);

            $local->materiels()->saveMany($randomMateriels);

            $i += $nbMateriels;
        }

        //Ajout relation entre orientation - section

        $orientations = Orientation::all();
        $sections = Section::all();
        $orientationCount = $orientations->count();

        $i = 0;
    
        foreach ($sections as $section) {
            $nbOrientation = min($orientationCount - $i, 3);
            $randomOrientation = $orientations->slice($i, $nbOrientation);

            $section->orientations()->saveMany($randomOrientation);

            $i += $nbOrientation;
        }

        //Ajout relation entre orientation - UE

        $ues = UE::all();
        $orientations = Orientation::all();
        $uesCount = $ues->count();

        $i = 0;
    
        foreach ($orientations as $orientation) {
            $nbUes = min($uesCount - $i, 3);
            $randomUes = $ues->slice($i, $nbUes);

            $orientation->ues()->saveMany($randomUes);

            $i += $nbUes;
        }
            
    }
}
