@extends('mahasiswas.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Mahasiswa
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('mahasiswas.update', $Mahasiswa->nim) }}"
                        enctype="multipart/form-data" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" name="nim" class="form-control" id="nim"
                                value="{{ $Mahasiswa->nim }}" aria-describedby="nim">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama"
                                value="{{ $Mahasiswa->nama }}" aria-describedby="nama">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir (yyyy-mm-dd)</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir"
                                value="{{ $Mahasiswa->tanggal_lahir }}" aria-describedby="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label for="foto_mhs">Foto</label>
                            <input type="file" class="form-control" required="required" name="foto_mhs" value="{{$Mahasiswa->foto_mhs}}" placeholder="{{$Mahasiswa->foto_mhs}}"></br>
                            <img src="{{asset('storage/'.$Mahasiswa->foto_mhs)}}" alt="foto_mhs" style="height: 100px; width: 100px; overflow: hidden; object-fit: cover;">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select name="kelas" class="form-control">
                                @foreach ($kelas as $Kelas)
                                <option value="{{$Kelas->id}}">{{$Kelas->nama_kelas}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="jurusan" name="jurusan" class="form-control" id="jurusan"
                                value="{{ $Mahasiswa->jurusan }}" aria-describedby="jurusan">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                value="{{ $Mahasiswa->email }}" aria-describedby="email">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No_Handphone</label>
                            <input type="no_hp" name="no_hp" class="form-control" id="no_hp"
                                value="{{ $Mahasiswa->no_hp }}" aria-describedby="no_hp">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
