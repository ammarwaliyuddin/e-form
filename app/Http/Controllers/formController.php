<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class formController extends Controller
{
    public function form()
    {
        return view('add_data');
    }
    public function postData(Request $request)
    {
        $data = [
            'nama'          =>  $request->input('nama'),
            'alamat'        =>  $request->input('alamat'),
            'ktp'    =>  $request->input('ktp'),
            'telp'    =>  $request->input('telp'),
            'file' => $request->file('file'),
            'size'=>$request->file('file')->getClientOriginalName(),
            'surat'=>$request->file('surat')->getClientOriginalName(),
        ];

        // $this->validate($request, [
        //     'file' => 'required',
        //     'keterangan' => 'required',
        // ]);
     
        // menyimpan data file yang diupload ke variabel $file
        // $file = $request->file('file');
     
        //       // nama file
        // echo 'File Name: '.$file->getClientOriginalName();
        // echo '<br>';
     
        //       // ekstensi file
        // echo 'File Extension: '.$file->getClientOriginalExtension();
        // echo '<br>';
     
        //       // real path
        // echo 'File Real Path: '.$file->getRealPath();
        // echo '<br>';
     
        //       // ukuran file
        // echo 'File Size: '.$file->getSize();
        // echo '<br>';
     
        //       // tipe mime
        // echo 'File Mime Type: '.$file->getMimeType();
     
        //       // isi dengan nama folder tempat kemana file diupload
        // $tujuan_upload = 'data_file';
        // $file->move($tujuan_upload,$file->getClientOriginalName());

        dd($data);
    }
    public function cetak_pdf()
{
	// $pegawai = Pegawai::all();
 //return $pdf->download('laporan-pdf.pdf');
//menjadi
// return $pdf->stream();
// return view('pdf');
	$pdf = PDF::loadview('pdf',['pegawai'=>'am']);
	// // return $pdf->download('laporan.pdf');
    return $pdf->stream();
}
}