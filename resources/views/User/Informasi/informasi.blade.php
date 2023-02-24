@extends('User.Layouts.app', ['title' => 'Informasi'])

@section('content')
    <section id="informasi">
        <div class="row">
            <div class="col-12">
                <p class="title text-center">Bidan Praktek Swasta Dina Bantuk Kecamatan Patampanua Kabupaten Pinrang </p>
                <div class="mt-3 px-md-5 px-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15924.314502566885!2d119.63204522222517!3d-3.793049495064113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d944d06fc82a187%3A0x26030bfcc0921d32!2sPinrang%2C%20Penrang%2C%20Watang%20Sawitto%2C%20Pinrang%20Regency%2C%20South%20Sulawesi!5e0!3m2!1sen!2sid!4v1677207545124!5m2!1sen!2sid"
                        width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <p class="headtitle">Kritik dan Saran</p>
                <p class="headsubtitle">Tuliskan Kritik dan Saran untuk pelayanan ini</p>
            </div>

            <div class="col-12 mt-4">
                <form action="">
                    <div class="mb-3">
                        <label for="kritik" class="form-label">Kritik</label>
                        <textarea name="kritik" id="kritik" rows="3" class="form-control" placeholder="Masukkan Kritik Anda"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="saran" class="form-label">Saran</label>
                        <textarea name="saran" id="saran" rows="3" class="form-control" placeholder="Masukkan Saran Anda"></textarea>
                    </div>
                    <button class="btn py-md-3 py-2 mx-auto w-100">Kirim</button>
                </form>
            </div>
        </div>
    </section>
@endsection
