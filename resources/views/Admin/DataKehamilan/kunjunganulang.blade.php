@extends('Admin.Layouts.app', ['title' => 'Kunjungan Ulang'])

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
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Peritas</th>
                    <th>TD/BB</th>
                    <th>Umur Kehamilan</th>
                    <th>Keterangan</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($kunjungan != null)
                    @foreach ($kunjungan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->umur }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->paritas }}</td>
                            <td>{{ $item->td_bb }}</td>
                            <td>{{ $item->umur_kehamilan }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td class="text-center">
                                <a class="btn btn-danger py-2" href="{{ route('kunjungan-ulang-kehamilan.destroy' . $item->id) }}">
                                    <i class="fs-6 bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
