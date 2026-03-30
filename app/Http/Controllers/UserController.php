<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view('auth.register', [
        'pageTitle' => '',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed']
        ]);
    
        // Mengubah email menjadi huruf kecil
        $validated['email'] = strtolower($validated['email']);
    
        // Hash password sebelum menyimpan ke database
        User::create([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
    
        // Opsional: login user setelah registrasi berhasil
        // event(new Registered($user));
        // Auth::login($user);
    }
    


}
