@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{route('cities')}}">Cities</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{route('rescue.teams')}}">Rescue Teams</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
