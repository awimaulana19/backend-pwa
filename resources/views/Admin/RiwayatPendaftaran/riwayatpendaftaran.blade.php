@extends('Admin.Layouts.app', ['title' => 'Riwayat Pendaftaran'])

@section('content')
<div class="card p-4">
    <div class="d-flex">
        <div class="me-auto mb-3">
            <a class="btn btn-danger py-2" href="{{Auth::user()->roles != 'admin' ? url('pendaftaran-bidan-reset') : url('pendaftaran-reset') }}">Reset Antrian
            </a>
        </div>
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
                    <th>Antrian</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Periksa</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendaftaran as $item)
                    <tr>
                        <td>{{ $item->antrian }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jk }}</td>
                        <td>{{ $item->umur }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->periksa }}</td>
                        <td class="text-center">
                            <a class="btn btn-success py-2 me-1" href="{{ Auth::user()->roles != 'admin' ? url('pendaftaran-bidan/periksa/' . $item->id) : url('pendaftaran/periksa/' . $item->id) }}">
                                <i class="fs-6 bi bi-eye-fill"></i>
                            </a>
                            <a class="btn btn-danger py-2" href="{{ Auth::user()->roles != 'admin' ? url('pendaftaran-bidan/' . $item->id) : url('pendaftaran/' . $item->id) }}">
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

