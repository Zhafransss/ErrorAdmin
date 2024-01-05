<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        # membuat variabel untuk menampung data product
        $data = Kategori::all();
            

        # mengembalikan ke dalam template dengan membawa variabel
        return view('backend.trayek.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        # membuat template create product
        return view('backend.trayek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi request dari form 
        $request->validate([
            'asal' => 'required',
            'tujuan' => 'required',
            'Jam_Keberangkatan' => 'required',
            'Jam_Sampai' => 'required',
            'tanggal' => 'required',
            'Harga' => 'required|numeric',
            'kendaraan' => 'required'
        ], [
            'asal.required' => 'Wajib di isi',
            'tujuan.required' => 'Wajib di isi',
            'jam_keberangkatan' => 'Wajib di isi ',
            'jam_sampai.required' => 'Wajib di isi',
            'tanggal.required' => 'Wajib di isi',
            'harga.numeric' => 'Harga Wajib Angka',
            'kendaraan.required' => 'Wajib di isi'
        ]);

        # membuat variabel baru untuk penamaan file image kita menggunakan time() agar unique tidak sama dengan gambar lain
       

        # gunakan query untuk update data baru kedalam database dengan memanggil model product

        # awal query
        
        Kategori::create([
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'jam_keberangkatan' => $request->jam_keberangkatan,
            'jam_sampai' => $request->jam_sampai,
            'tanggal' => $request->tanggal,
            'harga' => $request->harga,
            'kendaraan' => $request->kendaraan,
            'slug' => str_replace(' ', '-', $request->title)
        ]);
        # akhir query


        // balikan ke halaman list product
        return redirect()->route('trayek.index')->with('success', 'Product Berhasil di tambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        # membuat variabel untuk menampung data produk dari where by Id
        $data = Kategori::find($id);

        # gunakan if kondisi jika data diatas kosong atau ID tidak sesuai pada database
        if (empty($data)) {
            # jika data kosong empty() maka 
            return redirect()->route('trayek.index')->with('galat', 'product not found');
            # fungsi with() adalah untuk membawa notifikasi dengan session yang berupa pemberitahuan
        }

        # jika variabel data ada tidak kosong maka kita kembalikan kedalam view edit untuk mengubah data tersebut
        return view('backend.trayek.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        # membuat variabel untuk cek apakah id tersebut ada atau tidak menggunakan find / where by id 
        $data = Kategori::find($id);

        # membuat if satu kondisi dimana jika kosong data tersebut akan di kembalikan
        if (empty($data)) {
            # kembalikan ke halaman list product dengan notifikasi with
            return redirect()->route('trayek.index')->with('galat', 'product not found');
        }

        # membuat validasi kembali dari request yang didapatkan dari form update
        $request->validate([
            'asal' => 'required',
            'tujuan' => 'required',
            'Jam_Keberangkatan' => 'required',
            'Jam_Sampai' => 'required',
            'tanggal' => 'required',
            'Harga' => 'required|numeric',
            'kendaraan' => 'required'
        ], [
            'asal.required' => 'Wajib di isi',
            'tujuan.required' => 'Wajib di isi',
            'jam_keberangkatan' => 'Wajib di isi ',
            'jam_sampai.required' => 'Wajib di isi',
            'tanggal.required' => 'Wajib di isi',
            'harga.numeric' => 'Harga Wajib Angka',
            'kendaraan.required' => 'Wajib di isi'
        ]);
        
        
        

        # kembalikan hasil controller ini ke halaman list product
        return redirect()->route('trayek.index')->with('success', 'Product Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        # membuat variabel untuk cek apakah id tersebut ada atau tidak menggunakan find / where by id 
        $data = Kategori::find($id);
        // dd($data);

        # membuat if satu kondisi dimana jika kosong data tersebut akan di kembalikan
        if (empty($data)) {
            # kembalikan ke halaman list product dengan notifikasi with
            return redirect()->route('trayek.index')->with('galat', 'product not found');
        }

        # gunakan fitur unlink untuk menghapus gambar pada folder penyimpanan kita sesuai dengan nama file pada database
        # unlink(public_path('img/' . $data->image));

        # gunakan query delete orm untuk menghapus data pada tabel

        # awal query
        $data->delete();
        # akhir query

        # kembalikan hasil controller ini ke halaman list product
        return redirect()->route('trayek.index')->with('success', 'Product Berhasil di Hapus');
    }
}
