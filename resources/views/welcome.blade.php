@extends('layouts.user')
@section('content')
    <!-- Awal Jumbotron -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row mb-n5 mt-2">
                <div class="col-lg-12">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="app-academy">
                            <div class="card p-0 mb-4">
                                <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
                                    <div
                                        class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center">
                                        <h3 class="card-title mb-4 lh-sm px-md-5 text-center">
                                            Tentang Kami
                                        </h3>
                                        <p class="mb-4">SMK Assalaam merupakan sekolah kejuruan dengan kompetensi keahlian
                                            teknik kendaraan ringan (roda empat) plus sepeda motor dalam
                                            proses pendidikan pelatihan.
                                            Peka terhadap perubahan perkembangan teknologi baru dan tuntutan kebutuhan pasar
                                            kerja, agar lulusannya siap menghadapi perubahan.
                                        </p>
                                        <p class="mb-4">SMK Assalaam dengan penuh kesadaran berani melakukan perubahan
                                            dengan berbagai
                                            inovasi dan improvisasi,
                                            mencari terobosan untuk meraih keberhasilan bagi peserta didiknya.
                                        </p>
                                        <p class="mb-4">Tekad tersebut sebagai wujud nyata dari SMK Assalaam didukung oleh
                                            sarana praktek yang lengkap UP TO DATE,
                                            waktu praktek memadai dan praktek berstandar industri dengan pelayanan prima.
                                        </p>
                                    </div>
                                    <div class="app-academy-md-25 d-flex align-items-end justify-content-end">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Awal Home -->
    <div class="section">
        <div class="container justify-content-center">
            <div class="container-xxl flex-grow-1 container-p-y justify-content-center">
                {{-- ROW 1 --}}
                <div class="row mt-5">
                    <h2>Berita Seputar SMK ASSALAAM</h2>
                </div>
                {{-- /ROW 1 --}}
                {{-- ROW 2 --}}
                <div class="row">
                    @foreach ($artikel as $data)
                        <div class="col-4 mt-3">
                            <div class="card bg-light text-light" style="width: 18rem;">
                                <img src="{{ asset('images/artikel/' . $data->sampul) }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data->judul }}</h5>
                                    <p class="card-text">{{ $data->isi }}</p>
                                    <a href="{{ route('beranda.show', $data->id) }}" class="btn btn-primary">Lihat
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- /ROW 2 --}}
                </div>
            </div>
        </div>
        <br>
        <div id="bg2">
            <div class="container mt-n2">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row text-black">
                        <div id="text2">
                            <p class="think">
                            <h2>Sekolah berkualitas dengan program pembelajaran yang berkualitas,
                                sumber daya pengajar yang berkualitas, dan sarana prasarana yang lengkap dan mutakhir
                            </h2>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="div">
                <div class="container-xxl flex-grow-1 container-p-y mt-n5">
                    <div class="container justify-content-between">
                        <div class="row text-black mt-5">
                            <h3 class="text-center">Visi & Misi</h3>
                            <div class="col">
                                <p class="">Visi</p>
                                <p> Menjadikan SMK Assalaam sebagai sekolah IDAMAN</p>
                            </div>
                            <div class="col">
                                <p class="p">Misi</p>
                                <p class="p">
                                    <li class="p">Intelek dalam melaksanakan proses pembelajaran</li>
                                    <li class="p">Disiplin dalam segala aspek kehidupan</li>
                                    <li class="p">Amanah dalam melaksanakan tugas</li>
                                    <li class="p">Maju dan menang untuk kepentingan bersama</li>
                                    <li class="p">Aktif dalam merespon perkembangan</li>
                                    <li class="p">Norma islam sebagai landasan dalam beraktifitas</li>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Home -->

        <!-- awal footer -->

        <!-- Akhir Footer -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    @endsection
