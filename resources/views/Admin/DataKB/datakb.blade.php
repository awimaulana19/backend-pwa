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
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Baru</th>
                    <th>Lama</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kb as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>@if ($item->baru == 'iya')
                            <span class="badge bg-success py-2">
                                <i class="fs-5 bi bi-check-circle"></i>
                            </span>
                            @else
                            <span class="badge bg-danger py-2">
                                <i class="fs-5 bi bi-x-circle"></i>
                            </span>
                            @endif</td>
                            <td>@if ($item->lama == 'iya')
                                <span class="badge bg-success py-2">
                                    <i class="fs-5 bi bi-check-circle"></i>
                                </span>
                                @else
                                <span class="badge bg-danger py-2">
                                    <i class="fs-5 bi bi-x-circle"></i>
                                </span>
                        @endif</td>
                        <td class="text-center">
                            <a class="btn btn-info py-2 me-1" href="{{ Auth::user()->roles != 'admin' ? url('kb-bidan/show/'.$item->id) : url('kb/show/' . $item->id) }}">
                                <i class="fs-6 bi bi-eye-fill"></i>
                            </a>
                            <a class="btn btn-danger py-2" href="{{ Auth::user()->roles != 'admin' ? url('kb-bidan/'.$item->id):url('kb/' . $item->id) }}">
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
