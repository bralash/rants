<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confessions | Rants and Confessions</title>
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="icon" href="{{URL::asset('img/favicon.jpg')}}" type="image/gif" sizes="16x16"> 
    <script src="https://use.fontawesome.com/4b9b01d581.js"></script>


    @include('partials.meta')
</head>
<body>
    
    <section>
        <h1>Rants and Confessions</h1>
        <h3>Anonymous message</h3>

        <div class="rants">
            @foreach($messages as $message)
                <div class="message">
                    {{$message->message}}
                    <label for="">{{\Carbon\Carbon::parse($message->created_at)->isoFormat('Do MMM, h:mm a')}}</label>
                    <label class="brand">
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-twitter"></i>
                        rantsnconfess
                    </label>
                </div>
            @endforeach
        </div>
    </section>

    <script src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="{{URL::asset('js/script.js')}}"></script>
</body>
</html>