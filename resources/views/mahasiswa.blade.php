@extends('layouts.main')
@section('title', 'mahasiswa')
@section('content')
    @if (session('alert'))
    @endif
    <div class="card mt-4">
        <div class="card-header">
            <a href="/mahasiswa/formtambah" class="btn btn-primary" role="button"><i
                    class="bi bi-cloud-plus-fill"></i>Mahasiswa</a>
            <form action="/mahasiswa/pencarian" method="GET" class="form-inline my-2 my-lg-0 float-right">
                <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body">
            @if (session('flash'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('flash') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('primary'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>{{ session('primary') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('text'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>{{ session('text') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Bidang minat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mhs as $idx => $m)
                        <tr>
                            <th scope="row">{{ $mhs->firstItem() + $idx }}</th>
                            <td>{{ $m->nim }}</td>
                            <td>{{ $m->nama }}</td>
                            <td>{{ $m->gender }}</td>
                            <td>{{ $m->jurusan }}</td>
                            <td>{{ $m->bidang_minat }}</td>
                            <td>
                                <a href="/mahasiswa/formedit/{{ $m->nim }}" class="btn btn-success" role="button"><i
                                        class="bi bi-pencil-square"></i></a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda Yakin Menghapus Data Ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                    <a href="/mahasiswa/delete/{{ $m->nim }}" class="btn btn-danger" role="button"><i
                                                        class="bi bi-pencil-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <span class="float-right">{{ $mhs->links() }}</span>
        </div>
    </div>
@endsection
