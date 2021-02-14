<?php

namespace App\Http\Livewire;

use App\Models\Expense;
use Livewire\Component;

class Expenses extends Component
{
    public $expenses, $keterangan, $pemasukan, $pengeluaran, $created_at, $member_id;
    public $isModal = 0;

    public function render()
    {
        $this->expenses = Expense::orderBy('created_at', 'ASC')->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA
        return view('livewire.expenses');
    }

    public function create()
    {
        //KEMUDIAN DI DALAMNYA KITA MENJALANKAN FUNGSI UNTUK MENGOSONGKAN FIELD
        $this->resetFields();
        //DAN MEMBUKA MODAL
        $this->openModal();
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    //FUNGSI INI DIGUNAKAN UNTUK MEMBUKA MODAL
    public function openModal()
    {
        $this->isModal = true;
    }

    public function resetFields()
    {
        $this->keterangan = '';
        $this->pemasukan = '';
        $this->pengeluaran = '';   
        $this->member_id = '';
    }

    public function store()
    {
        //MEMBUAT VALIDASI
        $this->validate([
            'keterangan' => 'required',
            'pemasukan' => '',
            'pengeluaran' => '',
        ]);

        //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
        //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
        //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
        Expense::updateOrCreate(['id' => $this->member_id], [
            'keterangan' => $this->keterangan,
            'pemasukan' => $this->pemasukan,
            'pengeluaran' => $this->pengeluaran,
        ]);

        //BUAT FLASH SESSION UNTUK MENAMPILKAN ALERT NOTIFIKASI
        session()->flash('message', ' Data berhasil ditambah');
        $this->closeModal(); //TUTUP MODAL
        $this->resetFields(); //DAN BERSIHKAN FIELD
    }

    public function edit($id)
    {
        $expense = Expense::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
        //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
        $this->member_id = $id;
        $this->keterangan = $expense->keterangan;
        $this->pemasukan = $expense->pemasukan;
        $this->pengeluaran = $expense->pengeluaran;

        $this->openModal(); //LALU BUKA MODAL
    }

    //FUNGSI INI UNTUK MENGHAPUS DATA
    public function delete($id)
    {
        $expense = Expense::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
        $expense->delete(); //LALU HAPUS DATA
        session()->flash('message', 'Data berhasil dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
    }
}
