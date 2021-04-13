<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
//use App\User;
use App\Models\User;

class GithubController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGithub ()
    {
        return Socialite::driver('github')->redirect();
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGithubCallback()
    {
        try {
            //$user = Socialite::driver('google')->user();
            $user = Socialite::driver('github')->stateless()->user();
    	    $finduser = User::where('github_id', $user->id)->first();

            if($finduser){
                Auth::login($finduser);
                return redirect('/home');
            }else{
                $newUser = User::create([
                    //'name' => $user->name,
                    'name' => $user->email,
                    'email' => $user->email,
                    'github_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);

                Auth::login($newUser);
                return redirect('/home');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

