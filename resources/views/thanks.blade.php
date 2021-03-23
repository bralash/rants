<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Messages | Rants and Confessions</title>
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="icon" href="{{URL::asset('img/favicon.jpg')}}" type="image/gif" sizes="16x16"> 

    @include('partials.meta')
</head>
<body>
    
    <section class="thanks">
        <h1>Rants and Confessions</h1>

        <div class="message-area">
            <img src="{{URL::asset('img/plane.jpg')}}" alt="">
            <h2>Thank you!!</h2>
            <p>Your message has been sent anonymously</p>
            <a href="{{URL::to('/')}}">Go Back</a>
        </div>
    </section>

</body>
</html>