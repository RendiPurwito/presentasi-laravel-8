@extends('layout2.main')

@section('title', 'edit')

@section('content')
<h1 class="text-center">Edit Data Pekerja</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/updatedatapekerja/{{ $data->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="cowo" name="jeniskelamin">
                                <label class="form-check-label">
                                    cowo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="cewe" name="jeniskelamin" checked>
                                <label class="form-check-label">
                                    cewe
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No. Telpon</label>
                            <input type="text" name="notelpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->notelpon }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection