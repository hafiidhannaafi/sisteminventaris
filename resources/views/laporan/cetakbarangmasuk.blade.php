{{-- @section('title', 'barangkeluar')
@section('barangkeluar', 'active')
@section('charts-nav', 'show') --}}

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet" />
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


<div class="row">
    <div class="col-lg-12">

        <!-- Default Card -->
        <div class="card">
            <div class="card-body">
                <h3>
                    <center>SISTEM INFORMASI INVENTARIS BARANG <BR> LEMBAGA PENGEMBANGAN TEKNOLOGI PEDESAAN (LPTP)
                </h3>
                <center>
                    <p>Jl. Raya Palur Km 5, Tegal Asri Rt 4/VI, Ngringo, Jaten, Karanganyar 57772, PO Box 313 Solo
                        57103
                        Phone (62) 0271-826620, 826259 (Hunting), Fax (62) 0271-825107 E-mail : lptp@lptp.or.id,
                        Website
                        : www.lptp.or.id</p>
                </center>
                <hr style="width:max;height:2px;">
                <h4><b>
                        <center>LAPORAN DATA BARANG MASUK</center>
                    </b></h4><br>


            </div>
        </div><!-- End Default Card -->


        <div class="card">
            <div class="card-body">



                <!-- Table with stripped rows -->
                <table id="example" class="table-border display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            {{-- <th scope="col">Kode</th> --}}
                            <th scope="col">Nama</th>
                            {{-- <th scope="col">Tipe/ Spesifik</th> --}}
                            <th scope="col">Tgl Masuk</th>
                            <th scope="col">Jumlah Satuan</th>
                            <th scope="col">Kondisi</th>
                            <th scope="col">Ket</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $nomor = 1;
                        ?>
                        @foreach ($data as $data)
                            <tr>
                                <th>{{ $nomor++ }}</th>
                                <td> {{ $data->barangs->kode }} -
                                    {{ $data->barangs->jenis_barangs->jenis_barang }}
                                    {{ $data->barangs->spesifikasi }} </td>
                                <td> {{ $data->tanggal_masuk }}</td>
                                <td> {{ $data->jumlah_masuk }}</td>
                                <td> {{ $data->kondisi }}</td>
                                <td> {{ $data->ket }}</td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
        </div>

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
