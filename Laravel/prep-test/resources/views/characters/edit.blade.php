<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Character</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('character.update', ['character' => $character])}}">
        @csrf 
        @method('put')
        <div>
            <label>To</label>
            <input type="text" name="name" placeholder="To" value="{{$character->name}}" />
        </div>
        <div>
            <label>Magic</label>
            <input type="number" name="magic" placeholder="Magic" value="{{$character->magic}}" />
        </div>
        <div>
            <label>Energy</label>
            <input type="number" name="energy" placeholder="Energy" value="{{$character->energy}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html> -->


@extends('layouts.app')

@section('content')
<div class="container">
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create an character</div>

                <div class="card-body">
                <form method="post" action="{{route('character.update', ['character' => $character])}}">
                        @csrf 
                        @method('post')
                        <div class="form-group">
                            <label>To</label>
                            <input type="text" class="form-control" name="name" placeholder="To" value="{{$character->name}}"/>
                        </div>
                        <div class="form-group">
                            <label>Magic</label>
                            <input type="number" class="form-control" name="magic" placeholder="Magic" value="{{$character->magic}}"/>
                        </div>
                        <div class="form-group">
                            <label>Energy</label>
                            <input type="number" class="form-control" name="energy" placeholder="Energy" value="{{$character->energy}}"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Save New character
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
