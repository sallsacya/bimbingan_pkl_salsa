<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PembayaranController extends Controller
{
    public function index()
    {
        $data = Pembayaran::paginate(10);
        return view('admin.Pembayaran.index', compact('data'));
    }
    public function tambah()
    {
        return view('admin.Pembayaran.create');
    }
    public function simpan(Request $req)
    {
        $check = Pembayaran::where('nip', $req->nip)->first();
        if ($check != null) {
            Session::flash('warning', 'nip Sudah ada');
            $req->flash();
            return back();
        } else {
            DB::beginTransaction();

            try {

                Pembayaran::create($req->all());

                DB::commit();

                Session::flash('success', 'berhasil di simpan');
                return redirect('/admin/data/Pembayaran');
            } catch (\Exception $e) {

                DB::rollback();
                Session::flash('error', 'Gagal sistem');
                return back();
            }
        }
    }
    public function edit($id)
    {
        $data = Pembayaran::find($id);
        return view('admin.Pembayaran.edit', compact('data'));
    }
    public function update(Request $req, $id)
    {
        $data = Pembayaran::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di update');

        return redirect('/admin/data/Pembayaran');
    }
    public function hapus($id)
    {
        $data = Pembayaran::find($id)->delete();
        return back();
    }
}
