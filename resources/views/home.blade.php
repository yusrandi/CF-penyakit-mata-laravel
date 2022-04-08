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
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input</li>
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
                                <div class="col-sm-6">
                                    <label for="valid-state">Valid State</label>
                                    <input type="text" class="form-control is-valid" id="valid-state" placeholder="Valid"
                                        value="Valid" required>
                                    <div class="valid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        This is valid state.
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="invalid-state">Invalid State</label>
                                    <input type="text" class="form-control is-invalid" id="invalid-state"
                                        placeholder="Invalid" value="Invalid" required>
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        This is invalid state.
                                    </div>
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
