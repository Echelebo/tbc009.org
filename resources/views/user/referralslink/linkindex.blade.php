@extends('layouts.fronty')

@section('contents')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Promotional Tools</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Promotional Tools</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header bg-primary text-white">Promotional Tools</h5>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12"
                            data-copy="{{ route('user.register', ['ref' => user()->username ?? 'notset']) }}">
                            {{ route('user.register', ['ref' => user()->username ?? 'notset']) }}
                        </div>
                    </div>

                    <br><br><br>
                </div>
            </div>
        </div>
    @endsection
