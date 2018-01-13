<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserAdmin;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users = UserAdmin::orderby('created_at','desc')->paginate(10);
        return view('users.index')->with('Users', $Users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'noabonado' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'noidentidad' => 'required',
            'tarifa' => 'required',
            'tipo' => 'required',
            'estadomora' => 'required',
            'tipoincidencia' => 'required'
        ]);

        // Create User
        $AdminUser = new UserAdmin;
        $AdminUser->noabonado = $request->input('noabonado');
        $AdminUser->nombre = $request->input('nombre');
        $AdminUser->apellido = $request->input('apellido');
        $AdminUser->noidentidad = $request->input('noidentidad');
        $AdminUser->telefono = $request->input('telefono');
        $AdminUser->tarifa = $request->input('tarifa');
        $AdminUser->tipo = $request->input('tipo');
        $AdminUser->estadomora = $request->input('estadomora');
        $AdminUser->tipoincidencia = $request->input('tipoincidencia');
        $AdminUser->barrio = $request->input('barrio');
        $AdminUser->save();

        return redirect('/users')->with('success', 'El usuario fue creado exitosamente');
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
    public function edit($id)
    {
        $Users = UserAdmin::find($id);
        return view('users.edit')->with('Users', $Users);
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
        $this->validate($request, [
            'noabonado' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'noidentidad' => 'required',
            'tarifa' => 'required',
            'tipo' => 'required',
            'estadomora' => 'required',
            'tipoincidencia' => 'required'
        ]);

        // Create User
        $AdminUser = UserAdmin::find($id);
        $AdminUser->noabonado = $request->input('noabonado');
        $AdminUser->nombre = $request->input('nombre');
        $AdminUser->apellido = $request->input('apellido');
        $AdminUser->noidentidad = $request->input('noidentidad');
        $AdminUser->telefono = $request->input('telefono');
        $AdminUser->tarifa = $request->input('tarifa');
        $AdminUser->tipo = $request->input('tipo');
        $AdminUser->estadomora = $request->input('estadomora');
        $AdminUser->tipoincidencia = $request->input('tipoincidencia');
        $AdminUser->barrio = $request->input('barrio');
        $AdminUser->save();

        return redirect('/users')->with('success', 'El usuario fue editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Users = UserAdmin::find($id);
        $Users->delete();
        return redirect('/users')->with('success', 'El usuario fue eliminado exitosamente');
    }
}
