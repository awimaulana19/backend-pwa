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
                    <th>Periksa</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kb as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->baru }}</td>
                        <td>{{ $item->lama }}</td>
                        <td>
                            @if ($item->status === 0)
                                <a class="btn btn-success py-2 me-1"
                                    href="{{ url('kb/selesai/' . $item->id) }}">
                                    <i class="fs-6 bi bi-check2"></i>
                                </a>
                            @else
                            Selesai
                            @endif
                        </td>
                        <td class="text-center">
                            <a class="btn btn-info py-2 me-1" href="{{ url('kb/show/' . $item->id) }}">
                                <i class="fs-6 bi bi-eye-fill"></i>
                            </a>
                            <a class="btn btn-danger py-2" href="{{ url('kb/' . $item->id) }}">
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
