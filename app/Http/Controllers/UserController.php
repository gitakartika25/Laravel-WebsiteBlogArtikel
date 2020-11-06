<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\User;


class UserController extends Controller
{
   public function __construct()
{
 $this->middleware('auth');
 $this->middleware(function($request, $next){
 if(Gate::allows('manage-articles')) return $next($request);
 abort(403, 'Anda tidak memiliki cukup hak akses');
 });

}

 public function usersView() {
        $user = User::all();
        return view('manageusers', ['user' => $user]);
    }

    // user registration
    public function register() {
        return view('addUser');
    }

    public function create(Request $request) {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'roles' => 'User'
        ]);
        
        return redirect('/manageusers');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('editUser', ['user' => $user]);
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->roles = $request->roles;
        $user->save();

        return redirect('/manageusers');
    }

    public function drop($id) {
        $user = User::find($id);
        $user->delete();

        return redirect('/manageusers');
    }
}
