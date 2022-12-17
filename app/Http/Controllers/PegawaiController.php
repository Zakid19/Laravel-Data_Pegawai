<?php

namespace App\Http\Controllers;

use App\Http\Requests\PegawaiRequest;
use App\Models\Instansi;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
use Codedge\Fpdf\Facades\Fpdf;

class PegawaiController extends Controller
{
    public function index()
    {
        $search = request('search');

        $pegawais = Pegawai::where('nama_lengkap', 'LIKE', '%' . $search . '%')->paginate(7);

       return view('pegawai.index', [
        'pegawais' => $pegawais,
        'search',
       ]);
    }

    public function create()
    {
        return view('pegawai.create', [
            'instansis' => Instansi::all(),
        ]);
    }

    public function store(PegawaiRequest $request)
    {
        // dd($request->all());
        $image = $request->file('image')->store('public/image/pegawai');

        $pegawai = Pegawai::create([
            'nip' => $request->nip,
            'nama_lengkap' => $request->nama_lengkap,
            'slug' => Str::slug($request->nama_lengkap),
            'image' => $image,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'tgll' => $request->tgll,
            'jenis_kelamin'  => $request->jenis_kelamin,
            'gol' => $request->gol,
            'eselon' => $request->eselon,
            'jabatan' => $request->jabatan,
            'tempat_tugas' => $request->tempat_tugas,
            'agama' => $request->agama,
            'instansi_id' => $request->instansi,
            'no_hp' => $request->no_hp,
            'npwp' => $request->npwp
        ]);

        // if ($request->has('instansis')) {
        //     $pegawai->instansis()->attach($request->instansis);
        // }

        return redirect('pegawai')->with('success', 'Data pegawai berhasil ditambahkan');
    }

    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit' , [
            'pegawai' => $pegawai,
            'instansis' => Instansi::get(),
        ]);
    }

    public function update(PegawaiRequest $request, Pegawai $pegawai)
    {
        $image = $pegawai->image;

        if ($request->hasFile('image')){
            Storage::delete($pegawai->image);
            $image = $request->file('image')->store('public/image/pegawai');
        }

        $pegawai->update([
            'nip' => $request->nip,
            'nama_lengkap' => $request->nama_lengkap,
            'slug' => Str::slug($request->nama_lengkap),
            'image' => $image,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'tgll' => $request->tgll,
            'jenis_kelamin'  => $request->jenis_kelamin,
            'gol' => $request->gol,
            'eselon' => $request->eselon,
            'jabatan' => $request->jabatan,
            'tempat_tugas' => $request->tempat_tugas,
            'agama' => $request->agama,
            'instansi_id' => $request->instansi,
            'no_hp' => $request->no_hp,
            'npwp' => $request->npwp
        ]);

        // if ($request->has('instansis')) {
        //     $pegawai->instansis()->sync($request->instansis);
        // }

        return redirect('pegawai')->with('success', 'Data pegawai berhasil diubah');
    }

    public function destroy(Pegawai $pegawai)
    {
        Storage::delete($pegawai->image);
        $pegawai->delete();
        return back()->with('danger', 'Data pegawai berhasil dihapus');
    }

    public function cetak_pdf()
    {
        $pegawai = Pegawai::all();

        $pdf = PDF::loadView('cetak_pdf', ['pegawai' => $pegawai])->setPaper('a4', 'landscape')->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        return $pdf->download('laporan-pegawai');
        return $pdf->stream();
    }

    public function cetak()
    {
        $pegawai = Pegawai::all();
       return view('cetak_pdf', [
            'pegawai' => $pegawai,
        ]);
    }

    public function createPdf()
    {
        $pegawai = Pegawai::all();
        // share data to view
        view()->share('pegawai',$pegawai);
        $pdf = PDF::loadView('cetak_pdf', array('pegawai' => $pegawai));
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
        return $pdf->stream();
    }

    // Cetak PDF Alternatif Kedua
    public function laporanPdf()
    {
        $pdf = new Fpdf("L","cm","A4");
        $pdf::AddPage();
        $pdf::SetFont('Arial', 'B', 18);
        $pdf::Cell(185,7,'Laporan Daftar Pegawai',0,1,'C');
        $pdf::SetFont('Arial', '', 12);
        $pdf::Cell(185,5,'Indonesia',0,1,'C');
        $pdf::SetFont('Arial', '', 12);
        $pdf::Cell(185,5,"Telepon : 085625437867 ",0,1,'C');
        $pdf::Line(10,30,190,30);
        $pdf::Line(10,31,190,31);
        $pdf::Cell(30,10,'',0,1);
        $pdf::SetFont('Arial', 'B', 14);
        $pdf::Cell(185,5,'Daftar Pegawai',0,0,'C');
        $pdf::Cell(30,10,'',0,1);
        $pdf::Cell(40,7,'Nama',1,0);
        $pdf::Cell(40,7,'Tempat Lahir',1,0);
        $pdf::Cell(40,7,'Tanggal Lahir',1,0);
        $pdf::Cell(38,7,'Jenis Kelamin',1,0);
        $pdf::Cell(30,7,'Jabatan',1,1);
        $pegawais = Pegawai::get();
        foreach($pegawais as $item){
            $pdf::Cell(40,7,$item->nama_lengkap,1,0);
            $pdf::Cell(40,7,$item->ttl,1,0);
            $pdf::Cell(40,7,$item->tgll,1,0);
            $pdf::Cell(38,7,$item->jenis_kelamin,1,0);
            $pdf::Cell(30,7,$item->jabatan,1,1);
       }

        $pdf::Output();
        exit;
    }
}
