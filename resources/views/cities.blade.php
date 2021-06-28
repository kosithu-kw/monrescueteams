@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cities</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card shadow">
                                <div class="card-header">
                                    Add City
                                </div>
                                <div class="card-body">
                                    <form action="{{route('city.add')}}" method="post">
                                        <div class="form-group">
                                            <input type="text" name="city_name" placeholder="City name" class="form-control">
                                            @if($errors->has('city_name'))
                                                <span class="text-danger">{{$errors->first('city_name')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-gorup">
                                            <button type="submit" class="btn btn-primary btn-lg">Save</button>
                                        </div>
                                        @csrf
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card shadow">
                                <div class="card-header">Cities list</div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <tr>
                                          
                                            <th>Cities</th>
                                            <th>Actions</th>
                                        </tr>
                                        @foreach($cities as $c)
                                            <tr>
                                          
                                                <td>{{$c->city_name}}</td>
                                                <td>
                                                    <a href="#!" data-toggle="modal" data-target="#e{{$c->id}}" class="btn btn-outline-info ">Edit</a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="e{{$c->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form action="{{route('city.update')}}" method="post">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit city</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div>
                                                            <input type="hidden" name="id" value="{{$c->id}}">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <input type="text" value="{{$c->city_name}}" name="city_name" placeholder="City name" class="form-control">
                                                                    @if($errors->has('city_name'))
                                                                        <span class="text-danger">{{$errors->first('city_name')}}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                            @csrf
                                                        </div>
                                                    </form>
                                                        </div>
                                                    </div>
                                                    <a href="" class="btn btn-outline-danger" data-toggle="modal" data-target="#d{{$c->id}}">Delete</a>
                                                   
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
