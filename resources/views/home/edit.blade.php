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
                                    <form action="{{ route('digital.update', $guestbook->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="namalengkap">namalengkap:</label>
                                            <input type="text" name="namalengkap" id="namalengkap" class="form-control" value="{{ $guestbook->namalengkap }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat:</label>
                                            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $guestbook->alamat }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="kehadiran">kehadiran</label>
                                            <input type="text" name="kehadiran" id="kehadiran" class="form-control" value="{{ $guestbook->kehadiran }}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
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
