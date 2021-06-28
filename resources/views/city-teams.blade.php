<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>မွန်ပြည်နယ် (၁၀) မြို့နယ်အတွင်းရှိ အရေးပေါ်ကယ်ဆယ်ရေးအဖွဲ့များ</title>

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('fa/css/all.css') }}" rel="stylesheet">
     <style>
        @font-face{
            font-family: uni;
            src: url("../../p.ttf")
        }
        #app{
            font-family: uni;
        }
    </style>
</head>
<body>
    
    <div class="container" id="app">
        <div class="card shadow">
            <div class="card-body pt-5">
                <h4 style="color: orangered"> <a href="/" class="mr-5"><i class="fas fa-arrow-circle-left"></i></a> {{$city->city_name}}  မြို့နယ်  <small>လူမှုကယ်ဆယ်ရေးအဖွဲ့များ</small></h4>
               
                <hr>
                <div class="row">
                    @foreach($teams as $t)
                        
                        <div class="col-6 col-md-3 mb-2">
                            <a href="#!" data-toggle="modal" data-target="#show{{$t->id}}">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div style="color: orangered">
                                       <div class="text-center">
                                            
                                       </div>
                                        <div class="text-center">
                                             {{$t->team_name}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            {{--Modal--}}
                            <div class="modal fade" id="show{{$t->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel" style="color: orangered">{{$t->team_name}}</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-borderless">
                                            @if($t->phone_one)
                                            <tr>
                                                <td>{{$t->phone_one}}</td>
                                                <td><a class="btn btn-outline-info btn-sm" href="tel:{{$t->phone_one}}"><i class="fas fa-phone"></i></a></td>

                                            </tr>
                                            @endif
                                            @if($t->phone_two)
                                            <tr>
                                                <td>{{$t->phone_two}}</td>
                                                <td><a class="btn btn-outline-info btn-sm" href="tel:{{$t->phone_two}}"><i class="fas fa-phone"></i></a></td>

                                            </tr>
                                            @endif
                                            @if($t->phone_three)
                                            <tr>
                                                <td>{{$t->phone_three}}</td>
                                                <td><a class="btn btn-outline-info btn-sm" href="tel:{{$t->phone_three}}"><i class="fas fa-phone"></i></a></td>

                                            </tr>
                                            @endif
                                            @if($t->phone_four)
                                            <tr>
                                                <td>{{$t->phone_four}}</td>
                                                <td><a class="btn btn-outline-info btn-sm" href="tel:{{$t->phone_four}}"><i class="fas fa-phone"></i></a></td>

                                            </tr>
                                            @endif
                                            @if($t->phone_five)
                                            <tr>
                                                <td>{{$t->phone_five}}</td>
                                                <td><a class="btn btn-outline-info btn-sm" href="tel:{{$t->phone_five}}"><i class="fas fa-phone"></i></a></td>

                                            </tr>
                                            @endif
                                            @if($t->phone_six)
                                            <tr>
                                                <td>{{$t->phone_six}}</td>
                                                <td><a class="btn btn-outline-info btn-sm" href="tel:{{$t->phone_six}}"><i class="fas fa-phone"></i></a></td>

                                            </tr>
                                            @endif
                                            @if($t->phone_seven)
                                            <tr>
                                                <td>{{$t->phone_seven}}</td>
                                                <td><a class="btn btn-outline-info btn-sm" href="tel:{{$t->phone_seven}}"><i class="fas fa-phone"></i></a></td>

                                            </tr>
                                            @endif
                                            @if($t->phone_eight)
                                            <tr>
                                                <td>{{$t->phone_eight}}</td>
                                                <td><a class="btn btn-outline-info btn-sm" href="tel:{{$t->phone_eight}}"><i class="fas fa-phone"></i></a></td>

                                            </tr>
                                            @endif
                                        </table>
                                    </div>
                                   
                                  </div>
                                </div>
                              </div>
                              {{--Modal End--}}
                       
                        </div>
                       
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</body>
</html>