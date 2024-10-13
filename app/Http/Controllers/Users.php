<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Notifications\EmailVerifyNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    function index()
    {
        return view('Form_Page');
    }

    function store(StoreUserRequest $request)
    {

        $validated = $request->validated();

        // hash paswword before store it
        $password = Hash::make($validated['password']);

        // store validated request data


        $user = User::create([
            'name'      => $validated['name'],
            'email'     => $validated['email'],
            'password'  => $password

        ]);

        //send notification to verify email
        $user->notify(new EmailVerifyNotification());


        // check store is success or not

        if ($user) {
            return redirect()->back()->with('message', 'user email is  subscrib');;
        } else {
            return
                redirect()->back()->with('message', 'user email is not subscrib');
        }
    }


    // form to access user to check if he is admin or not
    public function log_in()
    {
        return view('log_in');
    }
    // check if user is admin or not
    public function sign_in(Request $request)
    {

        $users = DB::select("SELECT * from users ");
        $email = $request['email'];

        $user = DB::select("SELECT * from users where email = '$email'");

        if ($user[0]->name == 'admin') {
            return view('EmailList', compact('users'));
        } else {
            return redirect()->back();
        }
    }
}
