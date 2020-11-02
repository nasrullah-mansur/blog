<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;
use App\Mail\RegistrationMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('profile')->paginate(6);

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, array(
            'username' => ['required', 'string', 'max:255', 'unique:users', 'alpha_dash'],
            'role' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ));
        
        $user = User::create([
            'username' => $request['username'],
            'role' => $request['role'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        Profile::create([
            'user_id' => $user->id,
        ]);

        // Mail::to($request->email)->send(new RegistrationMail($request));

         

        
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.create', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($user->username == $request->username) {
            if($user->email == $request->email){
                $this->validate($request, array(
                    'username' => ['required', 'string', 'max:255', 'alpha_dash'],
                    'role' => ['required'],
                    'email' => ['required', 'string', 'email', 'max:255'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                ));

            } else {
                $this->validate($request, array(
                    'username' => ['required', 'string', 'max:255', 'alpha_dash'],
                    'role' => ['required'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                ));
            }
         } else {
            $this->validate($request, array(
                'username' => ['required', 'string', 'max:255', 'unique:users', 'alpha_dash'],
                'role' => ['required'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ));
         }



         $user->username = $request->username;
         $user->email = $request->email;
         $user->role = $request->role;
         $user->password = $request->password;

         $user->save();

        // Mail::to($request->email)->send(new RegistrationMail($request));


        return redirect()->route('user.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        $user->delete();
        return redirect()->route('user.index');

    }


}
