@extends('Admin.Layouts.app', ['title' => 'Data Pasien'])

@section('content')
    <div class="card p-4">
        <div class="d-flex">
            <div class="ms-auto mb-3">
                {{-- searching --}}
                <form action="" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Cari Nama">
                        <button class="btn btn-light" type="submit" id="search"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap / Username</th>
                        <th>Nomor Wa/Telp</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->no_wa }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <p class="badge badge-danger mb-0" {{ $item->is_verification == 0 ? '' : 'hidden' }}>Belum
                                    Aktif</p>
                                <p class="badge badge-success mb-0" {{ $item->is_verification == 1 ? '' : 'hidden' }}>Aktif
                                </p>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-info py-2 me-1" href="{{ url('datapasien/show/' . $item->id) }}">
                                    <i class="fs-6 bi bi-eye-fill"></i>
                                </a>
                                <a class="btn btn-danger py-2" href="{{ url('datapasien/' . $item->id) }}">
                                    <i class="fs-6 bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
