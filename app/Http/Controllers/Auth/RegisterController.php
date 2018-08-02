<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


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
    protected $redirectTo = '/home';

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
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/diyafa-9a44e-firebase-adminsdk-vs5iq-a5d4a8c161.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://diyafa-9a44e.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();
        $newPost = $database
            ->getReference('users')
            ->push([
                'country' => 'country101',
                  'email' => $data['email'],
                  "firstName" => "firstName1",
                  "lastName" => $data['name'],
                  "password" => "password101",
                  "id" => null,
                  "phone" => "phone101",
                  "region" => "region101",
                  "residence" => "residence101",
                  "userName" => "userName101"
            ]);
        $newid = $newPost->getKey();
        $database->getReference('users/'.$newid.'/id')->set($newid);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
