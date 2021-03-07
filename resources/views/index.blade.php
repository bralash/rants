<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Confessions | Rants and Confessions</title>
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="icon" href="{{URL::asset('img/favicon.jpg')}}" type="image/gif" sizes="16x16"> 

    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Anonymous Confessions">
    <meta property="og:description" content="Allows listeners to send in anonymous messages for our podcast">
    <meta property="og:url" content="http://rants.lashpixel.com/">
    <meta property="og:site_name" content="Rants and Confessions">
    <meta property="og:image" content="http://rants.lashpixel.com/img/favicon.jpg">
    <meta property="og:image:secure_url" content="http://rants.lashpixel.com/img/favicon.jpg">
    <meta property="og:image:width" content="1000">
    <meta property="og:image:height" content="1000">
    <meta property="og:image:alt" content="anonymous confessions">
    <!-- <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="Allows listeners to send in anonymous messages for our podcast">
    <meta name="twitter:title" content="Anonymous Confessions">
    <meta name="twitter:site" content="@rantsnconfess">
    <meta name="twitter:image" content="http://rants.lashpixel.com/img/favicon.jpg">
    <meta name="twitter:creator" content="@rantsnconfess"> -->
</head>
<body>
    
    <section>
        <h1>Rants and Confessions</h1>
        <h3>Anonymous message</h3>

        <div class="message-area">
            <form action="{{URL::to('/message')}}" method="post">
                {{csrf_field()}}
                <textarea name="message" id="" cols="30" rows="15" placeholder="Type your confession here" required></textarea>
                <input type="submit" value="Send message">
            </form>
        </div>
    </section>

</body>
</html>