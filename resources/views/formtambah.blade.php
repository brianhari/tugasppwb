@extends('layouts.main') 
@section('title','mahasiswa')
@section('content')
<div class="card mt-4">
    <div class="class card-header">
        <div class="class card-body">
            <form action="/mahasiswa/simpan" method="POST">
                @csrf
                <div class="form-group w-25">
                  <label>NIM</label>
                  <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM">
                </div>
                <div class="form-group w-50">
                  <label>Nama Mahasiswa</label>
                  <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
    
                  <label>Gender</label>
                  <div class="form-check">
                    <input type="radio" name="gender" value="wanita" class="form-check-input" checked>
                  <label>Wanita</label>
                  </div>
                <div class="form-check">
                  <input type="radio" name="gender" value="pria" class="form-check-input">
                  <label>Pria</label>
                </div>
                <div class="form-group w-50">
                    <label>Jurusan</label>
                    <select name="prodi" class="form-control">
                        <option value="0">-Pilih Program Studi-</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Kedokteran">Kedokteran</option>
                    </select>                   
                </div>

                <label>Bidang minat</label>
                  <div class="form-check">
                    <input type="checkbox" name="bidang_minat[]" value="ai" class="form-check-input">
                  <label>Artifical Intelegence</label>
                  </div>
                <div class="form-check">
                  <input type="checkbox" name="bidang_minat[]" value="football" class="form-check-input">
                  <label>Football</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" name="bidang_minat[]" value="basketball" class="form-check-input">
                  <label>Basketball</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
