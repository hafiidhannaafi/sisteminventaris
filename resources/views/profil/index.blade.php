@extends('layouts.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profil akun <?= Auth::user()->name ?> </h1>

        </div><!-- End Page Title -->

        {{-- <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">


                            <h2><?= Auth::user()->name ?></h2>
                            <h3><?= Auth::user()->roles->roles ?></h3>
                            <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div> --}}

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->


                    {{-- <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li> --}}

                    {{-- <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile</button>
                                </li> --}}

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">

                            <h5 class="card-title">Profile Akun</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nama</div>
                                <div class="col-lg-9 col-md-8"><?= Auth::user()->name ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8"><?= Auth::user()->email ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Posisi/Jabatan</div>
                                <div class="col-lg-9 col-md-8"><?= Auth::user()->posisi ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Alamat</div>
                                <div class="col-lg-9 col-md-8"><?= Auth::user()->alamat ?></div>
                            </div>


                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Telephone</div>
                                <div class="col-lg-9 col-md-8"><?= Auth::user()->telephone ?></div>
                            </div>


                        </div>



                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
        </div>
        </section>

    </main><!-- End #main -->
@endsection
