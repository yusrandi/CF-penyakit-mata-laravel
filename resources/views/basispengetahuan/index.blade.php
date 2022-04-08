@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendors/toastify/toastify.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">
@endsection
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Basis Pengetahuan</h3>
                    <p class="text-subtitle text-muted">Give textual form controls like input upgrade with
                        custom styles,
                        sizing, focus states, and more.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Basis Pengetahuan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="basic-modals">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Data Basis Pengetahuan
                            </h4>
                        </div>

                        <div class="card-body">

                            <!-- button trigger for  Vertically Centered modal -->
                            <button type="button" class="btn btn-outline-primary block mb-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter">
                                Tambah Basis Pengetahuan
                            </button>



                            <table class="table table-hover" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Penyakit</th>
                                        <th>Nama Penyakit</th>
                                        <th>Kode Gejala</th>
                                        <th>Nama Gejala</th>
                                        <th class="text-end">Bobot</th>
                                        <th class="text-end">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->penyakit->penyakit_kode }}</td>
                                            <td>{{ $item->penyakit->penyakit_nama }}</td>
                                            <td>{{ $item->gejala->gejala_kode }}</td>
                                            <td>{{ $item->gejala->gejala_nama }}</td>
                                            <td class="text-end">
                                                {{ $item->bobot }}
                                            </td>
                                            <td class="text-end">
                                                <a href="#editModalCenter" class="btn btn-outline-success btn-sm edit"
                                                    data-bs-toggle="modal" data-bs-target="#editModalCenter"
                                                    data-id="{{ $item }}">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <a href="#" id="delete" class="btn btn-outline-danger btn-sm delete"
                                                    data-id="{{ $item->id }}">
                                                    <i class="bi bi-trash"></i>

                                                </a>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>

            @include('basispengetahuan.modal-create')
            @include('basispengetahuan.modal-edit')
        </section>
        <!-- Basic Modals end -->
    </div>
@endsection
@section('js')
    <script src="{{ asset('assets/vendors/toastify/toastify.js') }}"></script>
    <script src="{{ asset('assets/js/extensions/toastify.js') }}"></script>

    @include('utils.toastify')

    <script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    <script type="text/javascript">
        $(function() {


            $('.delete').click(function() {
                var data = $(this).attr('data-id');
                swal({
                        title: "Anda yakin?",
                        text: "Anda akan menghapus data ini!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location = "basispengetahuan/delete/" + data;
                        } else {
                            swal("Your data is safe!");
                        }
                    });


            });
            $('.edit').click(function() {
                var data = $(this).attr('data-id');

                console.log(data);
                var obj = jQuery.parseJSON(data);
                console.log(obj.penyakit_id);


                $('#gejala_id').val(obj.gejala_id);
                $('#penyakit_id').val(obj.penyakit_id);
                $('#bobot').val(obj.bobot);


                $('#editForm').attr('action', 'basispengetahuan/' + obj.id);


            });
        });
    </script>
@endsection
