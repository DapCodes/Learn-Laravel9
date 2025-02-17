@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content:space-between;">
                  <h3>Data | <u>{{ $siswa->nama }}</u></h3>
                  <a href="{{ route('siswa.index') }}" class="mt-2">
                    <h5>&laquo; Back</h5>
                  </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('siswa.update', $siswa->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="form-group mb-3">
                            <label>NIS</label>
                            <input type="number" class="form-control" name="nis" value="{{ $siswa->nis }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2">Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki Laki" 
                                {{ $siswa->jenis_kelamin == 'Laki Laki' ? 'checked' : '' }} disabled> 
                            <label style="margin-left: 3px;">Laki-laki</label>

                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" style="margin-left: 10px" 
                                {{ $siswa->jenis_kelamin == 'Perempuan' ? 'checked' : '' }} disabled> 
                            <label style="margin-left: 3px;">Perempuan</label>
                        </div> 
                        <div class="form-group mb-3">
                            <label>Kelas</label><br>
                            <select class="form-control" name="kelas" disabled>
                                <option value="XI RPL 1">{{ $siswa->kelas }}</option>
                                <option value="XI RPL 2">XI RPL 2</option>
                                <option value="XI RPL 3">XI RPL 3</option>
                            </select>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection