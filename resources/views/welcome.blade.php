@extends('layouts.app')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Input</h3>
                    <p class="text-subtitle text-muted">Give textual form controls like input upgrade with
                        custom styles,
                        sizing, focus states, and more.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Welcome</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- validations start -->
        <section id="input-validation">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Input Validation States</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>You can indicate invalid and valid form fields with
                                        <code>.is-invalid</code> and
                                        <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also
                                        supported
                                        with these classes.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- validations end -->

    </div>
@endsection
