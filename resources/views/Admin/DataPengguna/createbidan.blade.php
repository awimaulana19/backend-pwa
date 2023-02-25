@extends('Admin.Layouts.app', ['title' => 'Data Bidan'])

@section('content')
    <div class="card p-4">
        <form action="{{ route('databidan.store') }}" method="POST">
            @csrf
            <div class="row">
                <input type="text" name="is_verification" hidden value="1">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username / Nama Lengkap</label>
                        <input type="text" name="username" id="username" class=" py-md-3 py-2 ps-md-4 ps-3 form-control"
                            placeholder="Masukkan Nama Lengkap anda">
                    </div>
                    <label for="pass" class="form-label">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="pass"
                            class=" py-md-3 py-2 ps-md-4 ps-3 form-control" placeholder="Masukkan Password">
                        <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                        <span id="mybutton" onclick="lihat()" class="input-group-text" style="cursor:pointer;">
                            <i class="bi bi-eye-fill"></i>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir"
                            class=" py-md-3 py-2 ps-md-4 ps-3 form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="no_wa" class="form-label">Nomor Wa/Telp</label>
                        <input type="number" name="no_wa" id="no_wa" class=" py-md-3 py-2 ps-md-4 ps-3 form-control"
                            placeholder="Masukkan Nomor Whatsapp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class=" py-md-3 py-2 ps-md-4 ps-3 form-control"
                            placeholder="Masukkan Email Anda">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class=" py-md-3 py-2 ps-md-4 ps-3 form-control"
                            placeholder="Masukkan Alamat Anda">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-4 gap-3">
                <a href="{{ route('databidan.index') }}" class="btn btn-danger w-100">Kembali</a>
                <button class="btn btn-success w-100">Daftar</button>
            </div>
        </form>
    </div>
@endsection
