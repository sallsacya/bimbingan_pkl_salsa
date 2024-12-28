<?php

namespace App\Http\Controllers;

use App\Models\Sppd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SppdController extends Controller
{
    public function index()
    {
        $data = Sppd::paginate(10);
        return view('admin.sppd.index', compact('data'));
    }
    public function tambah()
    {
        return view('admin.sppd.create');
    }
    public function simpan(Request $req)
    {
        $check = Sppd::where('nip', $req->nip)->first();
        if ($check != null) {
            Session::flash('warning', 'nip Sudah ada');
            $req->flash();
            return back();
        } else {
            DB::beginTransaction();

            try {

                Sppd::create($req->all());

                DB::commit();

                Session::flash('success', 'berhasil di simpan');
                return redirect('/admin/data/sppd');
            } catch (\Exception $e) {

                DB::rollback();
                Session::flash('error', 'Gagal sistem');
                return back();
            }
        }
    }
    public function edit($id)
    {
        $data = Sppd::find($id);
        return view('admin.sppd.edit', compact('data'));
    }
    public function update(Request $req, $id)
    {
        $data = Sppd::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di update');

        return redirect('/admin/data/sppd');
    }
    public function hapus($id)
    {
        $data = Sppd::find($id)->delete();
        return back();
    }
}
