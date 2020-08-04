<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $first_name = "first_name";
    protected $last_name = "last_name";
    protected $email_address = "email_address";
    protected $password = "password";

    protected $primaryKey = 'email_address';

    public function createUser($fn, $ln, $em, $pw) {
        $checkUser = App\User::where('email_address', $em)->get();

        if($checkUser) {
            return false;
        }
        else {
            $newUser = New User;
            $newUser->first_name = $fn;
            $newUser->last_name = $ln;
            $newUser->email_address = $em;
            $newUser->password = $pw;
            $newUser->save();
        }
    }
}
