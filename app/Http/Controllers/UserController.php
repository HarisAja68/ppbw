<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:user_show', ['only' => 'index']);
        $this->middleware('permission:user_create', ['only' => 'create', 'store']);
        $this->middleware('permission:user_update', ['only' => 'edit', 'update']);
        $this->middleware('permission:user_delete', ['only' => 'destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return view('users.index',[
        //     'users' => User::all(),
        // ]);

        $keyword = $request->keyword;
        $users = User::where('name', 'LIKE', '%'.$keyword.'%')
            ->paginate (4);
        $users->appends($request->all());
        return view('users.index',compact( 'users', 'keyword' ));
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
    public function store(UserRequest $request)
    {
        $request['role'] = Role::select('id', 'name')->find($request->role);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole($request->role);

        return redirect('users')->with('success', "Data Berhasil Ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',[
            'user' => $user,
            'roleSelected' => $user->roles->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->syncRoles($request->role);

        return redirect('users')->with('success', "Data Berhasil Diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->removeRole($user->roles->first());
        $user->delete();

        return redirect('users')->with('success', "Data Berhasil Dihapus");
    }

    public function profil()
    {
        $profil = auth()->user();
        return view('users.edit_profil', compact('profil'));
    }

    public function editProfil(Request $request)
    {
        $user = auth()->user();

        if ($request->has('password') && $request->password != "") {
            if (Hash::check($request->old_password, $user->password)) {
                if ($request->password == $request->password_confirmation) {
                    $user->password = Hash::make($request->password);
                } else {
                    return redirect('profil')->with('warning', "konfirmasi password tidak sesuai");
                }
            } else {
                return redirect('profil')->with('warning', "password lama tidak sesuai");
            }
        }

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move(public_path('/images/foto_profil'), $nama);

            $user->foto = "/images/foto_profil/$nama";
        }
        $user->update();
        return redirect('profil')->with('success', "update berhasil");
    }
}
