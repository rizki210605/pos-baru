<?php
// In the app/Http/Controllers/Pos/Chasier directory

namespace App\Http\Controllers\Pos\Chasier;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PosCashierLoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate user credentials, authenticate user, etc.
        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
            $user = Auth::user();
            if (! $user->can('dashboard.data') && $user->can('sell.create')) {
                return redirect(url('/pos/cashier/login'));
            }

            if ($user->user_type == 'user_customer') {
                return redirect(url('contact/contact-dashboard'));
            }

            return redirect(url('/home'));
        } else {
            // Login failed, redirect back to login page with error message
            return redirect()->back()->withErrors(['username' => 'Invalid credentials']);
        }
    }
}