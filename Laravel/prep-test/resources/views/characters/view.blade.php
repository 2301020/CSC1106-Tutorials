<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Edit a character</h1> -->
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <div>

        <h3>Subject: {{$character->subject}}</h3>
        <p>To: {{$character->to}}</p>
        <p>Cc: {{$character->cc}}</p>
        <p>Bcc: {{$character->bcc}}</p>
        <br>
        <p>{{$character->message}}</p>

    </div>
</body>
</html>