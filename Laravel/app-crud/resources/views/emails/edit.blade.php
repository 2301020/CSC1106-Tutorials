<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Email</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('email.update', ['email' => $email])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="to" placeholder="To" value="{{$email->to}}" />
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="cc" placeholder="Cc" value="{{$email->cc}}" />
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="bcc" placeholder="Bcc" value="{{$email->bcc}}" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="subject" placeholder="Subject" value="{{$email->subject}}" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="message" placeholder="Message" value="{{$email->message}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>