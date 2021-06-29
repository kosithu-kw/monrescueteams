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
                <h4 style="color: orangered"> မွန်ပြည်နယ် </h4>
                <div style="color: orangered">  (၁၀) မြို့နယ်အတွင်းရှိ အရေးပေါ်ကယ်ဆယ်ရေးအဖွဲ့များ</div>
                <hr>
                <div class="row">
                    @foreach($cities as $c)
                        
                        <div class="col-6 col-md-3 mb-2">
                            <a href="{{route('city.teams',['id'=>$c->id])}}">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div style="color: orangered">
                                       <div class="text-center">
                                            <i class="fas fa-map-marked-alt"></i>
                                       </div>
                                        <div class="text-center">
                                             {{$c->city_name}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                       
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</body>
</html>