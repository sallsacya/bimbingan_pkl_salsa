<?php

namespace App\Http\Controllers;

use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SuratTugasController extends Controller
{
    public function index()
    {
        $data = SuratTugas::paginate(10);
        return view('admin.surattugas.index', compact('data'));
    }
    public function tambah()
    {
        return view('admin.surattugas.create');
    }
    public function simpan(Request $req)
    {
        $check = SuratTugas::where('nip', $req->nip)->first();
        if ($check != null) {
            Session::flash('warning', 'nip Sudah ada');
            $req->flash();
            return back();
        } else {
            DB::beginTransaction();

            try {

                SuratTugas::create($req->all());

                DB::commit();

                Session::flash('success', 'berhasil di simpan');
                return redirect('/admin/data/surattugas');
            } catch (\Exception $e) {

                DB::rollback();
                Session::flash('error', 'Gagal sistem');
                return back();
            }
        }
    }
    public function edit($id)
    {
        $data = SuratTugas::find($id);
        return view('admin.surattugas.edit', compact('data'));
    }
    public function update(Request $req, $id)
    {
        $data = SuratTugas::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di update');

        return redirect('/admin/data/surattugas');
    }
    public function hapus($id)
    {
        $data = SuratTugas::find($id)->delete();
        return back();
    }
}
