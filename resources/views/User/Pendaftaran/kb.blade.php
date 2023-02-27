<section id="registrasi">
    <div class="row">
        <div class="col-12">
            <p class="title">Halaman Pendaftaran</p>
            <p class="subtitle">Keluarga Berencana</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <form id="form_kb">
                @csrf
                <input type="text" name="antrian_sekarang" value="{{ $antrian_sekarang }}" hidden>
                <input type="text" name="user_id" value="{{ auth()->user()->id }}" hidden>
                <input type="text" name="periksa" value="KB" hidden>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control"
                        placeholder="Masukkan Nama Pasien">
                </div>
                <div class="mb-3">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <div class="d-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="laki-laki"
                                value="laki-laki">
                            <label class="form-check-label" for="laki-laki">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check ms-4">
                            <input class="form-check-input" type="radio" name="jk" id="perempuan"
                                value="perempuan">
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="text" id="umur" name="umur" class="form-control"
                        placeholder="Masukkan Umur Pasien">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-control"
                        placeholder="Masukkan Alamat Pasien">
                </div>
                <div class="mb-3">
                    <button class="btn py-md-2 py-2 mx-auto w-100">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</section>
<script>
    $('#form_kb').submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: '{{ route('kb_store') }}', // Ganti dengan URL yang sesuai untuk menyimpan data ke dalam database
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $.ajax({
                    type: 'GET',
                    url: '{{ route('registrasi') }}',
                    success: function(data) {
                        $('#konten_halaman').html(data);
                        history.pushState({}, null, url);
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
                // Jika data berhasil disimpan, arahkan pengguna ke halaman lain
                // window.location.href = '/registrasi';
            },
            error: function(xhr) {
                // Jika terjadi kesalahan, tampilkan pesan kesalahan
                console.log(xhr.responseText);
            }
        });
    });
</script>
