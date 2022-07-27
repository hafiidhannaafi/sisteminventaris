@extends('layouts.master')
@section('content')

@section('title', 'barangkeluar')
@section('barangkeluar', 'active')
@section('charts-nav', 'show')

<main id="main" class="main">

    <div class="pagetitle">
        {{-- <h1>Data Jenis Aset</h1> --}}
        {{-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav> --}}
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Barang Keluar</h5>

                        <a href="/barang-keluar/form" type="button" class="btn btn-sm"
                            style="background-color:  #012970; color:#FFFFFF">Tambah</a>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    {{-- <th scope="col">Kode</th> --}}
                                    <th scope="col">Nama</th>
                                    {{-- <th scope="col">Tipe/ Spesifik</th> --}}
                                    <th scope="col">Tgl keluar</th>
                                    <th scope="col">Jumlah Satuan</th>
                                    <th scope="col">Kondisi</th>
                                    <th scope="col">Ket</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $nomor = 1;
                                ?>
                                @foreach ($barangkeluar as $data)
                                    <tr>
                                        <th>{{ $nomor++ }}</th>
                                        <td> {{ $data->barangs->kode }} -
                                            {{ $data->barangs->jenis_barangs->jenis_barang }}
                                            {{ $data->barangs->spesifikasi }} </td>
                                        <td> <?php echo date('d F Y', strtotime($data->tanggal_keluar)); ?></td>
                                        <td> {{ $data->jumlah_keluar }}</td>
                                        <td> {{ $data->kondisi }}</td>
                                        <td> {{ $data->ket }}</td>
                                        <td>

                                            @if ($data->status == 0)
                                                <a href="/barang-keluar/status_keluar/{{ $data->id }}"
                                                    type="button" class="btn btn-success btn-sm"><i
                                                        class="bi bi-check-lg"></i></a>
                                            @else
                                            @endif
                                            <a href="/barang-keluar/edit/{{ $data->id }}" type="button"
                                                class="btn btn-sm" style="background-color: #05b3c3; color:#FFFFFF"><i
                                                    class="bi bi-pencil delete"></i></a>
                                            <a href="/barang-keluar/hapus/{{ $data->id }}"
                                                onclick="return confirm('Hapus Data?')" type="button"
                                                class="btn btn-danger btn-sm"><i class="bi bi-trash delete"></i></a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
