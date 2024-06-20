<?php

namespace App\Http\Controllers;
use App\Models\User;
// use App\Models\Personel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index()
    {
        // $backusers = Backuser::orderBy('id','desc')->paginate();
        $users = DB::table('users')
            ->select('users.*')
            ->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required'
        ]);
        
        User::create($request->post());

        return redirect()->route('users.index')->with('success','User has been created successfully.');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(Request $request,User $user)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required'
        ]);
        
        $user->fill($request->post())->save();

        return redirect()->route('users.index')->with('success','User Has Been updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','User has been deleted successfully');
    }

    
}
