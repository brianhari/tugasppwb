<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Artikel;

class IndexArtikel extends Component
{
    protected $listeners = [
        'indexArtikel'
    ];
    
    public function render()
    {
        $art = Artikel::orderBy('id','desc')->limit(1)->get(); //pengurutan data menggunakan descending dari yang terbesar dan menampilkan data dengan metode limit ditambahkan metode get
        return view('livewire.index-artikel', ['art'=> $art]);//untuk memanggil variabel $art
    }

    public function indexArtikel($artikel)
    {

    }
}
