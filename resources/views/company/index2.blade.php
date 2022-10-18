@extends('layouts.app')

@section('template_title')
    Categories
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
                            @foreach($tree as $company)
                                <li style="padding-left: {{ $company->hierarchy * 20 }}px">{{ $company->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
