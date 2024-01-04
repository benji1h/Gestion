<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;



class GoogleAuthController extends Controller
{

    public function home(){
        if (auth()->check()) {
            //L'utilisateur est déjà connecté -> dashboard OK
            return view('dashboard');
        }else{  //l'utilisateur n'est pas connecté -> redirect
            return view('welcome');
        } 
    }

    public function dashboard(){
        if (auth()->check()) {
            //L'utilisateur est déjà connecté -> dashboard OK
            return view('dashboard');
        }else{  //l'utilisateur n'est pas connecté -> redirect
            return redirect('/');
        }
        
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {

        //try{
            $user = Socialite::driver('google')->stateless()->user();
        
            //var_dump($user);

            if((strpos($user->getEmail(), '@he2b.be') !== false) && (strpos($user->getEmail(), '@etu.he2b.be'))){
                return redirect()->route('login')->with('error', 'Adresse e-mail non autorisée');
            }

            $authUser = $this->findOrCreateUser($user);

            Auth::login($authUser, true);

            

            return redirect('/dashboard');
        //} catch (\Throwable $th){
        //    dd('pouzer'. $th->getMessage());
        //}
        

    }

    private function findOrCreateUser($googleUser)
    {
        $authUser = User::where('email', $googleUser->getEmail())->first();

        if($authUser){
            return $authUser;
        }

        return User::create([
            'name' => $googleUser->getName(),
            'email' => $googleUser->getEmail(),
            'google_id' => $googleUser->getId(),
        ]);
    }
}
