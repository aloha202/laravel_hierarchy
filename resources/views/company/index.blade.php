@extends('layouts.app')

@section('template_title')
    Companies
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Companies
                    </div>
                    <div class="card-body">
                        <ul>
                        @include('company.list', ['companies' => $companies, 'hierarchy' => 0])
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
