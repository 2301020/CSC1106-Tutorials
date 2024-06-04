<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Emails</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('email.create')}}">Create an Email</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>To</th>
                <th>Cc</th>
                <th>Bcc</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($emails as $email )
                <tr>
                    <td>{{$email->id}}</td>
                    <td>{{$email->to}}</td>
                    <td>{{$email->cc}}</td>
                    <td>{{$email->bcc}}</td>
                    <td>{{$email->subject}}</td>
                    <td>{{$email->message}}</td>
                    <td>
                        <a href="{{route('email.edit', ['email' => $email])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('email.destroy', ['email' => $email])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>