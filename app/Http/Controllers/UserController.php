<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select( 'id', 'name', 'email', 'created_at' )
            ->where( 'id', '!=', auth()->user()->id )
            ->latest()
            ->paginate( 10, ['*'], 'pagina' );

        // dd( $users );

        return view( 'dashboard.index', [
            'users' => $users,
        ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view( 'dashboard.create', [
            'user' => new User(),
        ] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request    $request
     * @return \Illuminate\Http\Response
     */
    public function store( UserRequest $request )
    {
        $data = $request->validated();

        $data['password'] = bcrypt( $data['password'] );

        $user = User::create( $data );

        return to_route( 'dashboard.index' )->with( 'success', 'Usuario creado correctamente' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User            $user
     * @return \Illuminate\Http\Response
     */
    public function show( User $user )
    {
        //
        return view( 'dashboard.show', [
            'user' => $user,
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User            $user
     * @return \Illuminate\Http\Response
     */
    public function edit( User $user )
    {
        return view( 'dashboard.edit', [
            'user' => $user,
        ] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request    $request
     * @param  \App\Models\User            $user
     * @return \Illuminate\Http\Response
     */
    public function update(
        UserRequest $request,
        User $user
    ) {
        $data = $request->validated();

        $data['password'] = bcrypt( $data['password'] );

        $user->update( $data );

        return to_route( 'dashboard.index' )->with( 'success', 'Usuario actualizado correctamente' );

    }

    /**
     * Remove the specified resource from storage.
     * Eliminar usuario mediante axios
     * @param  \App\Models\User            $user
     * @return \Illuminate\Http\Response
     */
    public function destroy( User $user )
    {
        //
        $user->delete();

        return response()->json( [
            'success' => 'Usuario eliminado correctamente',
        ] );
    }
}
