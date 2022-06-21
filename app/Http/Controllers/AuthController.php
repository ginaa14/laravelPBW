<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function user()
    {
        $user = User::paginate(5);
        return view('user', ['user' => $user]);
    }

    public function formtambah()
    {
        return view('formtambah');
    }

    public function tambahuser()
    {
        return view('tambahuser');
    }

    public function simpanuser(Request $request)
    {
        $user = User::create([
            'nik_user' => $request->nik_user,
            'nama_user' => $request->nama_user,
            'no_hp' => $request->no_hp,
            'password' => md5($request['password']),
        ]);
      return redirect('/users')->with('alertsimpan', 'Berhasil disimpan');
    }
    
    public function hapususer($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users')->with('alertdel', 'Berhasil dihapus');
    }

    public function login()
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        $user = User::where('nik_user', $request->nik_user)
                  ->where('password',md5($request->password))
                  ->first();
        if ($user){
            Auth::login($user);
            return redirect('/mhs')->with('alertg', 'Login Gagal!');
        }
        else {
            return redirect('/login')->with('alertb', 'Login Berhasil!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('alertb', 'Anda Berhasil Logout');
    }

    public function ubahuser($id)
    {
        $user = User::find($id);
        return view('ubahuser', ['user' => $user]);
    }

    public function updateuser($id, Request $request){
        $user = User::find($id);
        $user->nik_user = $request->nik_user;
        $user->nama_user = $request->nama_user;
        $user->email = $request->email;
        $user->no_hp = $request->no_hp;
        $user->save();
        return redirect('/user')->with('alertedit', 'Data berhasil diubah');
    }
}