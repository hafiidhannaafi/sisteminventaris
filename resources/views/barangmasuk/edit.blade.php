@extends('layouts.master')
@section('content')

@section ('title', 'barangmasuk')
@section ('barangmasuk', 'active')
@section ('charts-nav', 'show')

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
              <h5 class="card-title">Formulir Edit Stok Masuk</h5>

                       <!-- validation Form Elements -->

              <form action="/barang-masuk/update/{{$barangmasuk->id}}" method="POST" enctype="multipart/form-data" class=" needs-validation" novalidate>
                @csrf
                {{-- <div class="row mb-3">
                  <label for="validationCustom01" class="col-sm-2 col-form-label">Kode</label>
                  <div class="col-sm-10">
                    <input type="text" id="validationCustom01" name="kode" class="form-control"  required>
                    <div class="invalid-feedback">
                      Harus di isi
                    </div>
                  </div>
                </div> --}}


                <div class="row mb-3">
                  <label for="validationTooltip06" class="col-sm-2 col-form-label">Nama Barang</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="barangs_id" id="validationTooltip06" aria-label="Default select example">
                      {{-- <option selected>Pilih Nama Barang</option>
                      --}}
                      {{-- @foreach($inputbarang as $data)
                      <option value="{{ $data->id }}">  {{ $data->kode}} - {{ $data->jenis_barangs->jenis_barang}}  {{ $data->spesifikasi}} </option>
                      @endforeach --}}

                     @foreach($inputbarang as $data)
                     <option value="{{ $data->id }}" {{ $barangmasuk['barangs_id']== $data->id?'selected':'' }}>  {{ $data->kode}} - {{ $data->jenis_barangs->jenis_barang}}  {{ $data->spesifikasi}} </option>
                     {{-- $barangmasuk['barangs_id']== $data->id?'selected':''; --}}
                     @endforeach

                    </select>
                    
                    <div class="invalid-feedback">
                      Harus di isi
                    </div>
                  </div>
                </div>

                
                {{-- <div class="row mb-3">
                  <label for="validationTooltip02" class="col-sm-2 col-form-label">Tipe/Spesifikasi</label>
                  <div class="col-sm-10">
                    <input type="text" id="validationTooltip02" name="spesifikasi" class="form-control"  required>
                    <div class="invalid-feedback">
                      Harus di isi
                    </div>
                  </div>
                </div> --}}

               
                <div class="row mb-3">
                  <label for="validationTooltip05" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                  <div class="col-sm-10">
                    <input type="date" id="validationTooltip05" value="{{$barangmasuk->tanggal_masuk}}" name="tanggal_masuk" class="form-control"  required>
                    <div class="invalid-feedback">
                      Harus di isi
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="validationTooltip04" class="col-sm-2 col-form-label">Jumlah</label>
                  <div class="col-sm-10">
                    <input type="text" id="validationTooltip04" value="{{$barangmasuk->jumlah_masuk}}" name="jumlah_masuk" class="form-control"  required>
                    <div class="invalid-feedback">
                      Harus di isi
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="validationTooltip04" class="col-sm-2 col-form-label">Supplier</label>
                  <div class="col-sm-10">
                    <input type="text" id="validationTooltip04" value="{{$barangmasuk->supplier}}" name="supplier" class="form-control"  required>
                    <div class="invalid-feedback">
                      Harus di isi
                    </div>
                  </div>
                </div>

                

                {{-- <div class="row mb-3">
                  <label for="validationTooltip06" class="col-sm-2 col-form-label">Satuan</label>
                  <div class="col-sm-10">
                    <select class="form-select"  id="validationTooltip06" aria-label="Default select example">
                      <option selected>Silakan Pilih Satuan</option>
                      @foreach($datasatuan as $data)
                      <option value="{{ $data->id }}"> {{ $data->nama_satuan}}</option>
                      @endforeach
                    </select>
                    <div class="invalid-feedback">
                      Harus di isi
                    </div>
                  </div>
                </div> --}}

                <div class="row mb-3">
                  <label for="validationTooltip06" class="col-sm-2 col-form-label">Kondisi</label>
                  <div class="col-sm-10">
                    <select class="form-select"  id="validationTooltip06" name="kondisi" aria-label="Default select example">
                      {{-- <option selected>Kondisi Barang</option> --}}
                      <option value="Baik" {{ $barangmasuk->kondisi == 'Baik'? 'selected': ''}}>Baik</option>
                      <option value="Cukup" {{ $barangmasuk->kondisi == 'Cukup'? 'selected': ''}}>Cukup</option>
                      <option value="Tidak Baik" {{ $barangmasuk->kondisi == 'Tidak Baik'? 'selected': ''}}>Tidak Baik</option>
                    </select>
                    <div class="invalid-feedback">
                      Harus di isi
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="validationTooltip04" class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" id="validationTooltip04" value="{{$barangmasuk->ket}}" name="ket" class="form-control"required>
                    <div class="invalid-feedback">
                      Harus di isi
                    </div>
                  </div>
                </div>
                
                <div  class="row mb-3">
                  <div  class="col-sm-10">
                    <button style =" float :right; background-color:   #012970; color:#FFFFFF" type="submit" class="btn btn" >Submit</button>
                  </div>
                </div>
              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>
@endsection