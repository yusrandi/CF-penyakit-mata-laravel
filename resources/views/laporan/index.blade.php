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
                    <h3>Data Laporan</h3>
                    <p class="text-subtitle text-muted">Give textual form controls like input upgrade with
                        custom styles,
                        sizing, focus states, and more.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Laporan</li>
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
                                Data Laporan
                            </h4>
                        </div>

                        <div class="card-body">

                           
                            <table class="table table-hover" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th>Nama Penyakit</th>
                                        <th>Nama User</th>
                                        <th class="text-center">CF </th>
                                        <th class="text-end">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('j F Y')}}</td>
                                            <td>{{ $item->penyakit->penyakit_nama }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td class="text-center">
                                                @if ($item->cf < 0.5)
                                                    <span class="badge bg-success">{{ $item->cf }}</span>
                                                @else
                                                    <span class="badge bg-danger">{{ $item->cf }}</span>
                                                @endif
                                            </td>
                                           
                                            <td class="text-end">
                                               
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
        // let table1 = document.querySelector('#table1');
        // let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    <script type="text/javascript">
        $(function() {


            $('.delete').click(function() {
                var data = $(this).attr('data-id');
                console.log(data);
                swal({
                        title: "Anda yakin?",
                        text: "Anda akan menghapus data ini!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location = "laporan/delete/" + data;
                        } else {
                            swal("Your data is safe!");
                        }
                    });


            });
           
        });
    </script>
@endsection
