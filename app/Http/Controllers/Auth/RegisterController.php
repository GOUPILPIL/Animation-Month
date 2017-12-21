<?php

namespace App\Http\Controllers\Auth;

use App\Calendar;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $facts = file_get_contents('https://www.chucknorrisfacts.fr/api/get?data=nb:24;tri:alea');
        $facts = json_decode($facts);

        $i = 1;
        foreach($facts as $fact)
        {
            $text = $fact->fact;
            if(isset($data['joke-'.$i.''])) {
                $text = $data['joke-'.$i.''];
            }
            Calendar::create([
                'user_id' => $user->id,
                'date_calendar' => $i,
                'content' => $text,
                'animation' => $data['animation']
            ]);
            $i++;
        }
        return $user;
    }
}
