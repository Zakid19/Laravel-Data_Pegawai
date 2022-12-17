<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstansiRequest;
use App\Models\Instansi;
use App\Models\Pegawai;
use Illuminate\Support\Str;

class InstansiController extends Controller
{
    public function index()
    {
        $search = request('search');

        $instansis = Instansi::where('nama', 'LIKE', '%' . $search . '%')->latest()->paginate(9);

       return view('instansi.index', [
        'instansis' => $instansis,
        'search',
       ]);
    }

    public function pegawai_instansi(Instansi $instansi)
    {
        $search = request('search');

        $instansiNama = $instansi->where('nama', $instansi)->first();
        $pegawai =  Pegawai::latest()->get();
        $pegawaiInstansi = $instansi->pegawais()->where('nama_lengkap', 'LIKE', '%' . $search . '%')->paginate(7);
        $pegawaiTerkait =  Pegawai::latest()->limit(4)->get();

        return view('pegawai.pegawai_instansi', [
                    'pegawai' => $pegawai,
                    'pegawaiInstansi' => $pegawaiInstansi,
                    'pegawaiTerkait' => $pegawaiTerkait,
                    'instansi' => $instansi,
                ]);
    }

    public function create()
    {
       return view('instansi.create');
    }

    public function store(InstansiRequest $request)
    {
       Instansi::create([
        'nama' => $request->nama,
        'slug' => Str::slug($request->nama),
        'email' => $request->email,
        'tlp' => $request->tlp,
        'alamat' => $request->alamat,
       ]);

       return redirect('instansi')->with('success', 'berhasil menambahkan Instansi');;
    }

    public function edit(Instansi $instansi)
    {
        return view('instansi.edit', [
            'instansi' => $instansi,
        ]);
    }

    public function update(InstansiRequest $request, Instansi $instansi)
    {
        $instansi->update([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'email' => $request->email,
            'tlp' => $request->tlp,
            'alamat' => $request->alamat,
        ]);

        return redirect('instansi')->with('success', 'Instansi berhasil diupdate');
    }

    public function destroy(Instansi $instansi)
    {
        $instansi->delete();

        return back()->with('danger', 'Data Instansi berhasil dihapus');
    }
}
