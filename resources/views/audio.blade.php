<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio Confessions | Rants and Confessions</title>
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="icon" href="{{URL::asset('img/favicon.jpg')}}" type="image/gif" sizes="16x16"> 
    <script src="https://use.fontawesome.com/4b9b01d581.js"></script>


    <meta property="og:type" content="website">
    <meta property="og:title" content="Anonymous Confessions">
    <meta property="og:description" content="Allows listeners to send in anonymous messages for our podcast">
    <meta property="og:url" content="http://rantsnconfess.com/">
    <meta property="og:site_name" content="Rants and Confessions">
    <meta property="og:image" content="http://rantsnconfess/img/favicon.jpg">
    <meta property="og:image:secure_url" content="http://rantsnconfess/img/favicon.jpg">
    <meta property="og:image:width" content="1000">
    <meta property="og:image:height" content="1000">
    <meta property="og:image:alt" content="anonymous confessions">
</head>
<body>
    
    <section>
        <h1>Rants and Confessions</h1>
        <h3>Anonymous message</h3>

        <div class="rants">
            @foreach($audios as $audio)
                <div class="message">
                    <!-- <audio controls>
                        <source src="{{ asset('audio/').'/'.$audio->audio }}" type="type/mp3">
                        Your browser does not support the audio element.
                    </audio>  -->
                    <a href="{{ asset('audio/').'/'.$audio->audio }}" class="rant-audio" download>{{$audio->audio}}</a>
                    <label for="">{{\Carbon\Carbon::parse($audio->created_at)->isoFormat('Do MMM, h:mm a')}}</label>
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