<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Edit a Email</h1> -->
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

        <h3>Subject: {{$email->subject}}</h3>
        <p>To: {{$email->to}}</p>
        <p>Cc: {{$email->cc}}</p>
        <p>Bcc: {{$email->bcc}}</p>
        <br>
        <p>{{$email->message}}</p>

    </div>
    <!-- <form method="post" action="{{route('email.update', ['email' => $email])}}">
        @csrf 
        @method('put')
        <div>
            <label>To</label>
            <input type="text" name="to" placeholder="To" value="{{$email->to}}" />
        </div>
        <div>
            <label>Cc</label>
            <input type="text" name="cc" placeholder="Cc" value="{{$email->cc}}" />
        </div>
        <div>
            <label>Bcc</label>
            <input type="text" name="bcc" placeholder="Bcc" value="{{$email->bcc}}" />
        </div>
        <div>
            <label>Subject</label>
            <input type="text" name="subject" placeholder="Subject" value="{{$email->subject}}" />
        </div>
        <div>
            <label>Message</label>
            <input type="text" name="message" placeholder="Message" value="{{$email->message}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form> -->
</body>
</html>