@extends('Admin.Layouts.app', ['title' => 'Data Pasien'])

@section('content')
    <div class="card p-4">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="username" class="form-label">Username / Nama Lengkap</label>
                    <input type="text" name="username" id="username" class=" py-md-3 py-2 ps-md-4 ps-3 form-control"
                        disabled value="{{ $user->username }}">
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" id="tgl_lahir" class=" py-md-3 py-2 ps-md-4 ps-3 form-control"
                        disabled value="{{ $user->tgl_lahir }}">
                </div>
                <div class="mb-3">
                    <label for="no_wa" class="form-label">Nomor Wa/Telp</label>
                    <input type="text" name="no_wa" id="no_wa" class=" py-md-3 py-2 ps-md-4 ps-3 form-control"
                        disabled value="{{ $user->no_wa }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class=" py-md-3 py-2 ps-md-4 ps-3 form-control"
                        disabled value="{{ $user->email }}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class=" py-md-3 py-2 ps-md-4 ps-3 form-control"
                        disabled value="{{ $user->alamat }}">
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4 gap-3">
                <div class="w-100">
                    <form action="{{ route('updateStatus', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @if ($user->is_verification != 1)
                            <button type="submit" class="btn btn-success w-100">
                                Verifikasi Akun
                            </button>
                        @endif
                    </form>
                </div>
                <a href="{{ route('datapasien.index') }}" class="btn btn-danger w-100">Kembali</a>
            </div>
        </div>

    </div>
@endsection
