@extends('layouts.main')
@section('title', 'Mahasiswa')
@section('content')
<div class="card mt-4">
    <div class="class card-header">
        <div class="class card-body">
            @php
                $bidang_minat = explode(',',$mhs->bidang_minat);
            @endphp
            <form action="/mahasiswa/update/{{ $mhs->nim }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group w-25">
                  <label>NIM</label>
                  <input type="number" name="nim" class="form-control" value="{{ $mhs->nim }}" readonly>
                </div>
                <div class="form-group w-50">
                  <label>Nama Mahasiswa</label>
                  <input type="text" name="nama" class="form-control" value="{{ $mhs->nama }}">
                </div>
    
                  <label>Gender</label>
                  <div class="form-check">
                    <input type="radio" name="gender" value="wanita" class="form-check-input" {{ ($mhs->gender == 'wanita') ? 'checked':'' }}>
                  <label>Wanita</label>
                  </div>
                <div class="form-check">
                  <input type="radio" name="gender" value="pria" class="form-check-input" {{ ($mhs->gender == 'pria') ? 'checked':'' }}>
                  <label>Pria</label>
                </div>
                <div class="form-group w-50">
                    <label>Jurusan</label>
                    <select name="prodi" class="form-control">
                        <option value="0">-Pilih Program Studi-</option>
                        <option value="Sistem Informasi" {{ ($mhs->jurusan == 'Sistem Informasi') ? 'Selected':'' }}>Sistem Informasi</option>
                        <option value="Teknik Informatika" {{ ($mhs->jurusan == 'Teknik Informastika') ? 'Selected':'' }}>Teknik Informatika</option>
                        <option value="Kedokteran" {{ ($mhs->jurusan == 'Kedokteran') ? 'Selected':'' }}>Kedokteran</option>
                    </select>                   
                </div>

                <label>Bidang minat</label>
                  <div class="form-check">
                    <input type="checkbox" name="bidang_minat[]" value="ai" class="form-check-input" {{ in_array('ai', $bidang_minat) ? 'checked':'' }}>
                  <label>Artifical Intelegence</label>
                  </div>
                <div class="form-check">
                  <input type="checkbox" name="bidang_minat[]" value="football" class="form-check-input" {{ in_array('football', $bidang_minat) ? 'checked':'' }}>
                  <label>Football</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" name="bidang_minat[]" value="basketball" class="form-check-input" {{ in_array('basketball', $bidang_minat) ? 'checked':'' }}>
                  <label>Basketball</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection