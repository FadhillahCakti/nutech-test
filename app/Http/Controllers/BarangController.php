<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barang;

class BarangController extends Controller
{
	public function index(){
		$barang = Barang::paginate(10);
		return view('barang',['barang' => $barang]);
	}

	public function tambah()
    {
    	return view('barangtambah');
    }

	public function store(Request $request){
		$this->validate($request, [
			'foto_barang' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'nama_barang' => 'required|unique:barang',
			'harga_beli' => 'required',
			'harga_jual' => 'required',
			'stok' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('foto_barang');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		Barang::create([
			'foto_barang' => $nama_file,
			'nama_barang' => $request->nama_barang,
			'harga_beli' => $request->harga_beli,
			'harga_jual' => $request->harga_jual,
			'stok' => $request->stok,
		]);

    	return redirect('/');
	}

	public function cari(Request $request){
    // menangkap data pencarian
    $cari = $request->cari;
     // mengambil data dari table barang sesuai pencarian data
    $barang = Barang::where('nama_barang','like',"%".$cari."%")->paginate(10);
     // mengirim data barang ke view index
    return view('barang',['barang' => $barang]);
	}

	public function edit($id)
	{
   		$barang = Barang::find($id);
   		return view('barangedit', ['barang' => $barang]);
	}

	public function update($id, Request $request)
	{
		$this->validate($request, [
			'foto_barang' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'nama_barang' => 'required|unique:barang',
			'harga_beli' => 'required',
			'harga_jual' => 'required',
			'stok' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('foto_barang');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
		
		
    	$barang = Barang::find($id);
		$barang->foto_barang = $nama_file;
		$barang->nama_barang = $request->nama_barang;
    	$barang->harga_beli = $request->harga_beli;
		$barang->harga_jual = $request->harga_jual;
		$barang->stok = $request->stok;
    	$barang->save();
    	return redirect('/');
	}

	public function hapus($id)
	{
		Barang::find($id)->delete();
		return back()->with('success','Data sudah terhapus');
	}
	
}