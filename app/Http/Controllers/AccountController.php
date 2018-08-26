<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Api\User;

use App\Events\AccountActivated;

use Validator;

class AccountController extends Controller
{
    public function activate(Request $request) {
         $validator = Validator::make(
            $request->all(),
            ['token' => 'required|exists:users,confirmation_code']
         );

        if ($validator -> fails()) {
            return view('activate')
                -> withErrors($validator);
        }

        $token = $request -> input("token");

        $user = User::where('confirmation_code', $token) -> first();

        $user -> status = 1;
        $user -> confirmation_code = null;
        $user -> save();

        // Send account "activated successfully" notification
        // event(new AccountActivated($user));

        return view('activate');
    }
}
