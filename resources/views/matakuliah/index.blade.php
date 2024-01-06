<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Matakuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12" style="margin-top: 2%">
                <h3 style="text-align: center">Data Perkuliahan STMIK MARDIRA INDONESIA</h3>
            </div>
            <div class="col-md-12" style="margin-top: 2%">
                {{-- <button type="button" class="btn btn-primary" href="#">Data Mahasiswa</button>
                &nbsp;
                <button type="button" class="btn btn-success" href="#">Data Prodi</button>
                &nbsp;
                <button type="button" class="btn btn-info" href="#">Data Mata Kuliah</button> --}}
            </div>
            <div class="col-md-12">
                <div class="card" style="margin-top: 3%">
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Matakuliah</h3>
                        </div>
                        <div class="card-body">
                            <div class="container mt-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card border-0 shadow-sm rounded">
                                            <div class="card-body">
                                                    <a href="{{ route('matakuliahs.create') }}" class="btn btn-md btn-success mb-3">Tambah Data</a>
                                                
                                                <table class="table table-bordered">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Mata Kuliah</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php $no = 1 @endphp
                                                        @foreach ($mk as $d)
                                                            <tr>
                                                                <td>{{ $no++ }}</td>
                                                                <td>{{ $d->matakuliah }}</td>
                                                                <td>
                                                                    <a href="{{ route('matakuliahs.edit', ['matakuliah' => $d->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                                                                    &nbsp;
                                                                    <form action="{{ route('matakuliahs.destroy', ['matakuliah' => $d->id]) }}" method="POST" style="display: inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>