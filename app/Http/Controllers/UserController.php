<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        //add($users);
        return view ('test')->with('users',$users);

        //retorna la vista inyectando todos los usuarios
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::all();

       //retornar las vista elements.users

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;

        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if($request->hasFile('photo')){
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('image/profiles',$files));
            $user->photo = 'image/profile/'.$file;
        }
    
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;

        if($user->save()){
            dd($user);

           //retorna la vista
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        dd($user);

        //retorna la vista con la informacion del  elemento

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find(id);
           //retorno la vista con el formulario de edicion del usuario
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find(id);

        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if($request->hasFile('photo')){
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('image/profiles',$files));
            $user->photo = 'image/profile/'.$file;
        }
    
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;

        if($user->save()){
            dd($user);

           //actualiza la infomacion
        }
      
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if($user->delete()){
            //retorne la vista index con el mensaje que pudo eliminar 
        }
        
    }
}
