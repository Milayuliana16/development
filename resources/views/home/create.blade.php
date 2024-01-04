@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="container mt-12">
                        <div class="row">
                            <div class="col-md-12">
                
                                <div class="container">
                                    <form action="{{ route('digital.store') }}" method="POST">
                                    @csrf 
                            
                                    <div class="form-group">
                                        <label for="namalengkap">Nama:</label> 
                                        <input type="text" name="namalengkap" id="namalengkap" class="form-control" placeholder="masukkan nama"> 
                                    </div> 
                                    
                                    <div class="form-group">
                                        <label for="alamat">Alamat:</label> 
                                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="masukkan alamat"> 
                                    </div>
                                    
                                    <div class="form-group"> 
                                        <label for="kehadiran">kehadiran</label>
                                        <input type="text" name="kehadiran" id="kehadiran" class="form-control" placeholder="masukkan kehadiran">
                                        {{-- <input type="date" name="Kehadiran" id="kehadiran" class="form-control"> --}}
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Simpan</button> 
                                    <a href="{{ route('home') }}" class="btn btn-md btn-success">Kembali</a> 
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
