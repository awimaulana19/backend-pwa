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
                            <td class="text-center d-flex align-items-center">
                                <form action="{{route('kunjungan-ulang-kehamilan.show', $item->id)}}" method="get">
                                    @csrf
                                    <button class="btn btn-info py-2 me-1" type="submit">
                                        <i class="fs-6 bi bi-eye-fill"></i>
                                    </button>
                                </form>
                                <form action = "{{ route('kunjungan-ulang-kehamilan.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger py-2">
                                        <i class="fs-6 bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
