<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;
use DataTables;

class dataController extends Controller
{
    public function chargeData(Request $request){

        /* $data = User::with('roles')->take(5);
        //var_dump($data);
        
        exit;*/

        if ($request->ajax()) {

            $data = User::with('roles', 'droits', 'inscriptions', 'engagements')->get();
            
            return Datatables::of($data)
                    ->addIndexColumn()

                    ->addColumn('roles', function (User $user) {
                        return $user->roles->map(function($role) {
                            return $role->acro;
                        })->implode("\n");
                    })

                    ->addColumn('droits', function (User $user) {
                        return $user->droits->map(function($droit) {
                            return $droit->type;
                        })->implode("\n");
                    })

                    ->addColumn('inscriptions', function (User $user) {
                        return $user->inscriptions->map(function($inscription) {
                            return ("Debut: ".$inscription->date_debut." - Fin: ".$inscription->date_fin." - Etat:".$inscription->etat);
                        })->implode("\n");
                    })

                    ->addColumn('engagements', function (User $user) {
                        return $user->engagements->map(function($engagement) {
                            return ("Debut: ".$engagement->debut." - Fin: ".$engagement->fin." - Etat:".$engagement->type);
                        })->implode("\n");
                    })

                    ->addColumn('action', function($row){
       
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('data');
    }
}
