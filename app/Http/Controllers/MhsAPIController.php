<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class MhsAPIController extends Controller
{
    public function read()
    {
        $task = Task::all(); // all digunakan untuk menampilkan data yang terdapat dalam mahasiswa baris 13 untuk mengirimkan data dalam bentuk arrray
        return response()->json([
            'succes' => true,
            'message' => 'data berhasil ditampilkan',
            'data' => $task,
        ], 200);
    }

    public function create(Request $request)
    {
        $task = Task::create([
            'nama' => $request->nama,
            'judul_task' => $request->judul_task,
            'deskripsi_task' => $request->deskripsi_task,
        ]);

        if ($task)
        {
            return response()->json([
                'succes' => true,
                'message' => 'data berhasil ditambahkan'
            ],200);
        }
        else
        {
            return response()->json([
                'succes' => false,
                'message' => 'data gagal ditambahkan'
            ],400);
        }
    }

        public function update($id, Request $request)
        {
            $task = Task::find($id)->update([
            'nama' => $request->nama,
            'judul_task' => $request->judul_task,
            'deskripsi_task' => $request->deskripsi_task,
            ]);

            if ($task)
        {
            return response()->json([
                'succes' => true,
                'message' => 'data berhasil ditambahkan'
            ],200);
        }
        else
        {
            return response()->json([
                'succes' => false,
                'message' => 'data gagal ditambahkan'
            ],400);
        }
    }

    public function delete($id)
    {
        $task = Task::find($id)->delete();

        if ($task)
        {
            return response()->json([
                'succes' => true,
                'message' => 'data berhasil ditambahkan'
            ],200);
        }
        else
        {
            return response()->json([
                'succes' => false,
                'message' => 'data gagal ditambahkan'
            ],400);
        }

    }
    
}
