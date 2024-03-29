@extends('Admin.Layouts.app', ['title' => 'Pemeriksaan Awal'])

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
                    @if ($periksa != null)
                        @foreach ($periksa as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->umur }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td class="text-center d-flex justify-content-center align-items-center">
                                    <form action="{{Auth::user()->roles != 'admin' ? url('pemeriksaan-awal-kehamilan-bidan.show/'.$item->id) : route('pemeriksaan-awal-kehamilan.show', $item->id)}}" method="get">
                                        @csrf
                                        <button class="btn btn-info py-2 me-2" type="submit">
                                            <i class="fs-6 bi bi-eye-fill"></i>
                                        </button>
                                    </form>

                                    <form action = "{{ Auth::user()->roles != 'admin' ? url('pemeriksaan-awal-kehamilan-bidan.destroy/'.$item->id):  route('pemeriksaan-awal-kehamilan.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @if (Auth::user()->roles != 'admin')
                                        @method('get')
                                        @else
                                        @method('delete')
                                        @endif
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
