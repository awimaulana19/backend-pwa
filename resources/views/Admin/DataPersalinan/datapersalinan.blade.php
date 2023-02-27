@extends('Admin.Layouts.app', ['title' => 'Data Persalinan'])

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
                        <th>No. Regist</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Hari</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($persalinan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->no_registrasi }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->umur }}</td>
                            <td>{{ $item->hari }}</td>
                            <td class="text-center">
                                <a class="btn btn-info py-2 me-1" href="{{ Auth::user()->roles != 'admin' ? url('persalinan-bidan/show/'.$item->id) : url('persalinan/show/' . $item->id) }}">
                                    <i class="fs-6 bi bi-eye-fill"></i>
                                </a>
                                <a class="btn btn-danger py-2" href="{{ Auth::user()->roles != 'admin' ? url('persalinan-bidan/'.$item->id) : url('persalinan/' . $item->id) }}">
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
