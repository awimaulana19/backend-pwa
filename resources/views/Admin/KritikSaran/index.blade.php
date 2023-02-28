@extends('Admin.Layouts.app', ['title' => 'Keluarga Berencana'])

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
                        <th>Username</th>
                        <th>Email</th>
                        <th>Kritik</th>
                        <th>Saran</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kritikSaran as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->kritik }}</td>
                            <td>{{ $item->saran }}</td>
                            <td class="text-center">
                                <a class="btn btn-danger py-2"
                                    href="{{ Auth::user()->roles != 'admin' ? url('Kritik-Saran-Bidan/destroy/' . $item->id) : url('Kritik-Saran/destroy/' . $item->id) }}">
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
