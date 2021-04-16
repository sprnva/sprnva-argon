<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Auth;
use App\Core\Request;

class ProfileController
{
    protected $pageTitle;

    public function index()
    {
        $pageTitle = "Profile";
        $user_id = Auth::user('id');
        $user_data = App::get('database')->select("*", 'users', "id='$user_id'");

        return view('auth/profile', compact('user_data', 'pageTitle'));
    }

    public function update()
    {
        $request = Request::validate('profile', [
            'email' => 'required'
        ]);

        $user_id = Auth::user('id');

        $update_data = [
            'email' => "$request[email]",
            'fullname' => "$request[name]"
        ];

        App::get('database')->update('users', $update_data, "id = '$user_id'");
        redirect("profile");
    }

    public function changePass()
    {
        $user_id = Auth::user('id');

        $request = Request::validate('profile', [
            'old-password' => 'required',
            'new-password' => 'required',
            'confirm-password' => 'required'
        ]);

        if (md5($request["old-password"]) == Auth::user('password')) {
            if ($request["new-password"] == $request["confirm-password"]) {
                $update_pass = [
                    'password' => md5($request["new-password"]),
                    'updated_at' => date("Y-m-d H:i:s")
                ];
                App::get('database')->update('users', $update_pass, "id = '$user_id'");
                $_SESSION["RESPONSE_MSG"] = ["Password has changed.", "success"];
            } else {
                $_SESSION["RESPONSE_MSG"] = ["Passwords must match.", "danger"];
            }
        } else {
            $_SESSION["RESPONSE_MSG"] = ["Old password did not match.", "danger"];
        }

        redirect("profile");
    }

    public function delete()
    {
        $user_id = Auth::user('id');
        App::get('database')->delete('users', "id = '$user_id'");

        session_destroy();
        redirect('login');
    }
}
