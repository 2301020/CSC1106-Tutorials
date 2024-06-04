<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Write an Email</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('email.store')}}">
        @csrf 
        @method('post')
        <div>To</label>
            <input type="text" name="to" placeholder="To" />
        </div>
        <div>
            <label>Cc</label>
            <input type="text" name="cc" placeholder="Cc" />
        </div>
        <div>
            <label>Bcc</label>
            <input type="text" name="bcc" placeholder="Bcc" />
        </div>
        <div>
            <label>Subject</label>
            <input type="text" name="subject" placeholder="Subject" />
        </div>
        <div>
            <label>Message</label>
            <input type="text" name="message" placeholder="Message" />
        </div>
        <div>
            <input type="submit" value="Save a New Email" />
        </div>
    </form>
</body>
</html>