<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('submit')}}" method="post">
        @csrf
        Name:<input type="text" name="name">
        Enter:<input type="text" name="email">
        date: <input type="date" name="date" id="">
        <button type="submit">Click</button>

    </form>
    <div>
        @if (session('successs'))
            <div class="alert alert-success">
              
                {{ session('successs') }}
        @endif
     </div>

</body>
</html>