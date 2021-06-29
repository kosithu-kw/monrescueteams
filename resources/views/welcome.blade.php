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
        #cardBody{
            padding: 100px 0 200px 0;
        }
    </style>
</head>
<body>
    
    <div class="container" id="app">
        <div class="card shadow">
            <div class="card-body" id="cardBody">              
                
                <div class="row">
                    <div class="col-sm sm-offset-4 text-center">
                        <h4 style="color: orangered"> မွန်ပြည်နယ် </h4>
                        <div style="color: orangered">  (၁၀) မြို့နယ်အတွင်းရှိ အရေးပေါ်ကယ်ဆယ်ရေးအဖွဲ့များ</div>
                        <div>
                            <img class="img-fluid" src="{{URL::to("loading.gif")}}" alt="Loading...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function(){
            window.location.replace("/townships");
        }, 3000)
    </script>
</body>
</html>