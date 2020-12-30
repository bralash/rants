<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Messages | Rants and Confessions</title>
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="icon" href="{{URL::asset('img/favicon.jpg')}}" type="image/gif" sizes="16x16"> 
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