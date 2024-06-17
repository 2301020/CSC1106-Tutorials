<!-- <!DOCTYPE html>
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
            <a href="{{route('character.create')}}">Create a Character</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Magic</th>
                <th>Energy</th>
                <th>View Messsage</th>
                <th>Delete</th>
            </tr>
            @foreach($characters as $character )
                <tr>
                    <td>{{$character->id}}</td>
                    <td>{{$character->name}}</td>
                    <td>{{$character->magic}}</td>
                    <td>{{$character->energy}}</td>
                    <td>
                        <a href="{{route('character.edit', ['character' => $character])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('character.destroy', ['character' => $character])}}">
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
</html> -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{route('character.create')}}">Create a Character</a></div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Magic</th>
                            <th>Energy</th>
                            <!-- <th>Message</th> -->
                            <!-- <th>Edit</th> -->
                            <th>View Messsage</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($characters as $character )
                            <tr>
                                <td>{{$character->id}}</td>
                                <td>{{$character->name}}</td>
                                <td>{{$character->magic}}</td>
                                <td>{{$character->energy}}</td>
                                <!-- <td>{{$character->message}}</td> -->
                                <td>
                                    <a href="{{route('character.edit', ['character' => $character])}}">Edit</a>
                                    <!-- <a href="{{route('character.view', ['character' => $character])}}">Read character</a> -->
                                </td>
                                <td>
                                    <form method="post" action="{{route('character.destroy', ['character' => $character])}}">
                                        @csrf 
                                        @method('delete')
                                        <input type="submit" value="Delete" />
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection