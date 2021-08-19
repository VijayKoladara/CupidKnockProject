<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cupid Knock PVT LTD</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!------ Include the above in your HEAD tag ---------->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>

<body>

    <div class="container mt-5">
        
        <form class="form-horizontal" role="form" method="POST">
        @if(Session::get('status'))
        <div class="alert alert-success">
            {{ Session::get('status') }}
        </div>

        @endif
        @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>

        @endif
            @csrf
            <h2 class="text-center">Login</h2>
           
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email* </label>
                <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Email" class="form-control" name="email">
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password*</label>
                <div class="col-sm-9">
                    <input type="password" id="password" placeholder="Password" class="form-control" name="password">
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
            </div>

            

           
            
           

            <button type="submit" class="btn btn-primary btn-block">Login</button> <br><br>
            <a href="{{ route('home')}}" class="text-center mt-2">Not Registered? click Here To Register</a>
        </form> <!-- /form -->
        
    </div> <!-- ./container -->



    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="{{ asset('js/index.js')}}"></script>
    
</body>

</html>