@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Rescue Teams

                    <a href="{{route('rescue.teams')}}" class="float-right"> Refresh</a>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card shadow">
                                <div class="card-header">
                                    Add Team
                                </div>
                                <div class="card-body">
                                   
                                    <form action="{{route('team.add')}}" method="post">
                                        <div class="form-group">
                                            <select name="city_id" id="city_id" required class="custom-select">
                                                <option value="">Select City</option>
                                                @foreach($cities as $city)
                                                    <option value="{{$city->id}}">{{$city->city_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="team_name" required placeholder="Team name" class="form-control">
                                            @if($errors->has('team_name'))
                                                <span class="text-danger">{{$errors->first('team_name')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" name="phone_one" class="form-control" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" name="phone_two" class="form-control" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" name="phone_three" class="form-control" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" name="phone_four" class="form-control" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" name="phone_five" class="form-control" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" name="phone_six" class="form-control" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" name="phone_seven" class="form-control" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" name="phone_eight" class="form-control" placeholder="Phone">
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
                                <div class="card-header">Teams list

                                    <div class="float-right">
                                        <form action="{{route('search.team')}}" method="get">
                                            <input type="search" class="form-control" name="team_name" placeholder="Enter team name" required>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                    <table class="table table-bordered">
                                        <tr>
                                          
                                            <th>City</th>
                                            <th>Team Name</th>
                                            <th>Phone</th>
                                            <th>Actions</th>
                                        </tr>
                                        @foreach($teams as $t)
                                            <tr>
                                                
                                                <td>{{$t->city->city_name}}</td>
                                                <td>{{$t->team_name}}</td>
                                                <td>
                                                    @if($t->phone_one)
                                                    <span>{{$t->phone_one}}</span>,
                                                    @endif
                                                    @if($t->phone_two)
                                                    <span>{{$t->phone_two}}</span>,
                                                    @endif
                                                    @if($t->phone_three)
                                                    <span>{{$t->phone_three}}</span>,
                                                    @endif
                                                    @if($t->phone_four)
                                                    <span>{{$t->phone_four}}</span>,
                                                    @endif
                                                    @if($t->phone_five)
                                                    <span>{{$t->phone_five}}</span>,
                                                    @endif
                                                    @if($t->phone_six)
                                                    <span>{{$t->phone_six}}</span>,
                                                    @endif
                                                    @if($t->phone_seven)
                                                    <span>{{$t->phone_seven}}</span>,
                                                    @endif
                                                    @if($t->phone_eight)
                                                    <span>{{$t->phone_eight}}</span>,
                                                    @endif

                                                </td>
                                                <td>
                                                   <table class="table table-borderless">
                                                    <tr>
                                                        <td>
                                                         <a href="#" data-toggle="modal" data-target="#e{{$t->id}}" class="btn btn-outline-info btn-sm">Edit</a>
                                                          <!-- Modal -->
                                                    <div class="modal fade" id="e{{$t->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form action="{{route('rescue.team.update')}}" method="post">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit team</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div>
                                                            <input type="hidden" name="id" value="{{$t->id}}">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <select name="city_id" id="city_id" required class="custom-select">
                                                                        <option value="">Select City</option>
                                                                        @foreach($cities as $city)
                                                                            <option value="{{$city->id}}" @if($city->id == $t->city_id) selected @endif>{{$city->city_name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="team_name" value="{{$t->team_name}}" required placeholder="Team name" class="form-control">
                                                                    @if($errors->has('team_name'))
                                                                        <span class="text-danger">{{$errors->first('team_name')}}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="tel" name="phone_one" value="{{$t->phone_one}}" class="form-control" placeholder="Phone">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="tel" name="phone_two" value="{{$t->phone_two}}" class="form-control" placeholder="Phone">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="tel" name="phone_three" value="{{$t->phone_three}}" class="form-control" placeholder="Phone">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="tel" name="phone_four" value="{{$t->phone_four}}" class="form-control" placeholder="Phone">
                                                                </div>
                                                                <div class="form-group"> 
                                                                    <input type="tel" name="phone_five" value="{{$t->phone_five}}" class="form-control" placeholder="Phone">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="tel" name="phone_six" value="{{$t->phone_six}}" class="form-control" placeholder="Phone">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="tel" name="phone_seven" value="{{$t->phone_seven}}" class="form-control" placeholder="Phone">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="tel" name="phone_eight" value="{{$t->phone_eight}}" class="form-control" placeholder="Phone">
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
                                                        
                                                        </td>
                                                        <td>
                                                         <a href="#" data-toggle="modal" data-target="#d{{$t->id}}" class="btn btn-outline-danger btn-sm">Delete</a>
                                                          <!-- Modal -->
                                                        <div class="modal fade" id="d{{$t->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p class="text-center">
                                                                        The selected team <strong>{{$t->team_name}}</strong> will delete from database.
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <a href="{{route('rescue.team.delete',['id'=>$t->id])}}" class="btn btn-primary">Agree</a>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </td>
                                                    </tr>
                                                   </table>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    {{$teams->links()}}
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
