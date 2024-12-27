<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function koleksiproduk()
    {
        $produkModel = new ProdukModel();
        $data['barang'] = $produkModel->findAll();

        return view('admin/koleksiproduk', $data);
    }

    public function koleksiTambah()
    {
        return view('admin/Koleksiproduk-tambah');
    }

    public function createAtk()
    {
        $data = $this->request->getPost();
        $file = $this->request->getFile('gambar');

        if ($file && !$file->hasMoved()) {
            $path = $file->store();
            $data['gambar'] = $path;
        }

        $produkModel = new ProdukModel();

        if ($produkModel->insert($data, false)) {
            return redirect()->to('/admin/Koleksiproduk')->with('sukses', 'Data berhasil disimpan');
        } else {
            return redirect()->to('/admin/Koleksiproduk')->with('error', 'Data gagal disimpan!');
        }
    }

    // Fungsi untuk menampilkan halaman edit produk
    public function edit($id_produk)
    {
        // Load model
        $produkModel = new ProdukModel();
    
        // Ambil data barang berdasarkan ID
        $data['barang'] = $produkModel->find($id_produk);
    
        // Jika data tidak ditemukan
        if (!$data['barang']) {
            return redirect()->to('/admin/Koleksiproduk')->with('error', 'Barang tidak ditemukan');
        }
    
        // Tampilkan form edit
        return view('admin/Koleksiproduk-edit', $data);
    }
    
    public function update($id_produk)
    {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_barang' => 'required',
            'kategori'    => 'required',
            'harga'       => 'required|numeric',
            'gambar'      => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]'
        ]);
    
        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('error', $validation->listErrors());
        }
    
        // Load model
        $produkModel = new ProdukModel();
    
        // Data untuk di-update
        $data = [
            'merek'   => $this->request->getPost('merek'),
            'ukuran'  => $this->request->getPost('ukuran'),
            'harga'   => $this->request->getPost('harga'),
        ];
    
        // Jika ada gambar baru yang diunggah
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar && $fileGambar->isValid()) {
            $fileName = $fileGambar->getRandomName();
            $fileGambar->move('file-images', $fileName);
            $data['gambar'] = $fileName;
        }
    
        // Update data
        if ($produkModel->update($id_produk, $data)) {
            return redirect()->to('/admin/Koleksiproduk')->with('sukses', 'Data berhasil diperbarui');
        } else {
            return redirect()->to('/admin/Koleksiproduk')->with('error', 'Data gagal diperbarui');
        }
    }

    // Fungsi untuk menghapus produk
    public function hapus($id_produk)
    {
        // Load model
        $produkModel = new ProdukModel();

        // Cek apakah data dengan ID tersebut ada
        $barang = $produkModel->find($id_produk);

        if (!$barang) {
            return redirect()->to('/admin/Koleksiproduk')->with('error', 'Data tidak ditemukan');
        }

        // Hapus gambar dari folder (jika ada)
        if ($barang['gambar'] && file_exists('file-images/' . $barang['gambar'])) {
            unlink('file-images/' . $barang['gambar']);
        }

        // Hapus data dari database
        if ($produkModel->delete($id_produk)) {
            return redirect()->to('/admin/Koleksiproduk')->with('sukses', 'Data berhasil dihapus');
        } else {
            return redirect()->to('/admin/Koleksiproduk')->with('error', 'Data gagal dihapus');
        }
    }

    public function transaksi()
    {
        return view('admin/transaksi');
    }

    public function transaksiUbahStatus()
    {
        return view('admin/transaksi-ubah-status');
    }

    public function transaksiHapus()
    {
        return view('admin/transaksi-hapus');
    }

    public function pelanggan()
    {
        return view('admin/pelanggan');
    }

    public function pelangganHapus()
    {
        return view('admin/pelanggan-hapus');
    }

    public function image($folder, $file)
    {
        return $this->response->download(WRITEPATH . 'uploads/' . $folder . '/' . $file, null);
    }
}
