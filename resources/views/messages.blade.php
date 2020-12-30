<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confessions | Rants and Confessions</title>
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
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
                </div>
            @endforeach
        </div>
    </section>

</body>
</html>