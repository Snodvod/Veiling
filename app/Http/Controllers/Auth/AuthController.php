<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Auth;

class AuthController extends Controller
{

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    protected $loginPath = '/home';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
        } catch (Exception $e) {
            return redirect('auth/facebook');
        }
        //dd($user);
 
        $authUser = $this->findOrCreateUser($user);
 
        Auth::login($authUser, true);
 
        return redirect('home');
    }

    private function findOrCreateUser($facebookUser)
    {

        $authUser = User::where('facebook_id', $facebookUser->id)->first();
        
        if ($authUser){
            return $authUser;
        }
        return User::create([
            'name' => $facebookUser->getName(),
            'email' => $facebookUser->getEmail(),
            'facebook_id' => $facebookUser->getId(),
            'avatar' => $facebookUser->getAvatar()
        ]);
    }

    public function getRegister()
    {
        return view('auth.register', ['countries' => \App\Country::All()]);
    }

    
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',
            'country' => 'required',
            'address' => 'required',
            'zip' => 'required',
            'city' =>'required',
            'phone' => 'required|numeric|digits:9'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'country' => $data['country'],
            'address' => $data['address'],
            'zip' => $data['zip'],
            'city' => $data['city'],
            'phone' => $data['code'] . $data['phone']
        ]);
    }
}
