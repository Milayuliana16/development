<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12" style="margin-top: 2%">
                <h3 style="text-align: center">Data Perkuliahan <br>STMIK MARDIRA INDONESIA</h3>
            </div>
            <div class="col-md-12" style="margin-top: 2%">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Data Mahasiswa</a>
                        &nbsp;
                        <a href="{{ route('prodi.index') }}" class="btn btn-success">Data Prodi</a>
                        &nbsp;
                        <a href="{{ route('matakuliah.index') }}" class="btn btn-info">Data Mata Kuliah</a>
                    </div>
                    <div>
                        <a href="{{ route('actionlogout') }}" class="btn btn-warning">Logout</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="card" style="margin-top: 3%">
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Dosen</h3>
                        
                        </div>
                        <div class="card-body">
                            <div class="container mt-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card border-0 shadow-sm rounded">
                                            <div class="card-body">
                                                    <a href="{{ route('dosens.create') }}" class="btn btn-md btn-success mb-3">Tambah Data</a>
                                                
                                                <table class="table table-bordered">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Dosen</th>
                                                            <th>Mahasiswa</th>
                                                            <th>Mata Kuliah</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php $no = 1 @endphp
                                                        @foreach ($dosen as $d)
                                                            <tr>
                                                                <td>{{ $no++ }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->mahasiswa->nama }}</td>
                                                                <td>{{ $d->matakuliah->matakuliah }}</td>
                                                                <td>
                                                                    <a href="{{ route('dosens.edit', ['dosen' => $d->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                                                                    <form action="{{ route('dosens.destroy', ['dosen' => $d->id]) }}" method="POST" style="display: inline;">
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