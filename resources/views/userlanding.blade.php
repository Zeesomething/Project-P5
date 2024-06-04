@extends('layouts.user')
@section('content')
    {{-- CONTENT --}}
    {{-- <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Selamat datang di Dashboard</h1>
                    </div>
                </div>
            </div>
        </div> --}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="app-academy">
                            <div class="card p-0 mb-4">
                                <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
                                    <div
                                        class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center">
                                        <h3 class="card-title mb-4 lh-sm px-md-5 text-center">
                                            Selamat datang, pengunjung yang terhormat
                                        </h3>
                                        <img src="{{ asset('/admin1/images/logo-custom (1).png') }}" alt=""
                                            width="50%">
                                        <p class="mb-4">
                                            SMK Assalaam merupakan sekolah kejuruan dengan kompetensi keahlian teknik kendaraan ringan (roda empat) plus sepeda motor dalam proses pendidikan pelatihan. Peka terhadap perubahan perkembangan teknologi baru dan tuntutan kebutuhan pasar kerja, agar lulusannya siap menghadapi perubahan.
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
@endsection
<!-- /#wrapper -->
