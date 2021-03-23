<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Messages | Rants and Confessions</title>
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="icon" href="{{URL::asset('img/favicon.jpg')}}" type="image/gif" sizes="16x16"> 

    <meta property="og:type" content="website">
    <meta property="og:title" content="Rants and Confessions">
    <meta property="og:description" content="Official anonymous messaging platform for Rants and Confessions Podcast">
    <meta property="og:url" content="https://rantsnconfess.com/">
    <meta property="og:site_name" content="Rants and Confessions">
    <meta property="og:image" content="https://rantsnconfess.com/img/favicon.jpg">
    <meta property="og:image:secure_url" content="https://rantsnconfess.com/img/favicon.jpg">
    <meta property="og:image:width" content="1000">
    <meta property="og:image:height" content="1000">
    <meta property="og:image:alt" content="anonymous confessions">
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