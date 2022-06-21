<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mhs;

class MhsController extends Controller
{
    public function mhs()
    {
        $mhs = Mhs::query()
        ->orderBy('id','desc')
        ->paginate(5);
        return view('mhs', ['mhs' => $mhs]);
    }
    public function pencarian(Request $request)
    {
        $cari = $request->cari;
        $mhs =Mhs::where('nama', 'like', '%'.$cari.'%')->orWhere('nim', 'like', '%'.$cari.'%')->paginate();
        return view('mhs', ['mhs' => $mhs]);
    }
    public function tambah()
    {
        return view('tambah');
    }
    public function simpan(Request $request)
    {
      $bidang_minat = implode(",", $request->bidang_minat);
      Mhs::create([
          'nim' => $request->nim,
          'nama' => $request->nama,
          'gender'=> $request->gender,
          'jurusan'=> $request->jurusan,
          'bidang_minat'=>$bidang_minat
      ]);
      return redirect('/mhs')->with('alertsimpan', 'Berhasil disimpan');
    }
    public function edit($id)
    {
        $mhs = Mhs::find($id);
        return view('edit', ['mhs' => $mhs]);
    }
    public function update($id, Request $request)
    {
      $bidang_minat = implode(",", $request->bidang_minat);
      $mhs = Mhs::find($id);
      $mhs->nim = $request->nim;
      $mhs->nama = $request->nama;
      $mhs->gender = $request->gender;
      $mhs->jurusan = $request->jurusan;
      $mhs-> bidang_minat = $bidang_minat;
      $mhs->save();
      return redirect('/mhs')->with('alertupdate', 'Berhasil diubah');
    }
    public function hapus($id)
    {
        $mhs = Mhs::find($id);
        $mhs->delete();
        return redirect('/mhs')->with('alertdel', 'Berhasil dihapus');
    }
}