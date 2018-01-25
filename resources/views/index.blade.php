
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Luhn Algorith Tester</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>

<body class="text-center">
<div>
    <form class="form-signin" action="/validate" method="post">
        {{ csrf_field() }}
        <h1 class="h3 mb-5 font-weight-normal">Validate Luhn Number</h1>
        <label for="number" class="sr-only">Luhn Number</label>
        <input id="number" name="number" class="form-control" placeholder="Number to Validate" required autofocus>
        <div class="mb-3"></div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Validate</button>
    </form>
    <div>
        @if(!empty($validitymsg))
            <div class="row align-items-center justify-content-center border mt-5" >
                <div class="col">{{ $validitymsg }}</div>
            </div>
@endif
</body>
</html>
