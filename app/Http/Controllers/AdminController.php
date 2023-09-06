<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.auth.login');
    }
    public function login(){
        return view('auth.admin');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminLoginRequest $request):RedirectResponse
    {   

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed
            return redirect()->route('admin.dashboard'); // Customize the redirect route for Admin
            // return "adminDashboard";
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {

        $request->session()->forget('user_id');
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
