
    @extends('layout2/main')

    @section('title', 'home')

    @section('content')

    <!-- <h1 class="text-center mb-4">Data Pekerja</h1> -->

    <div class="container pt-5">
        <a href="/tambahpekerja" type="button" class="btn btn-success mb-3">Tambah +</a>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telpon</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jeniskelamin }}</td>
                        <td>0{{ $row->notelpon }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td>
                            <a href="/tampilkandatapekerja/{{ $row->id }}"  class="btn btn-warning">Edit</a>
                            <a href="/deletedatapekerja/{{ $row->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>

    @endsection
    