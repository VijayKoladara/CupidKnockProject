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

    <div class="container">
        <form class="form-horizontal" role="form" method="POST">
            @csrf
            <h2>Registration</h2>
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                    <input name="first_name" type="text" id="firstName" placeholder="First Name" class="form-control"
                        autofocus>
                        <span class="text-danger">@error('first_name'){{ $message }} @enderror</span>
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                    <input name="last_name" type="text" id="lastName" placeholder="Last Name" class="form-control"
                        autofocus>
                        <span class="text-danger">@error('last_name') { { $message } } @enderror</span>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email* </label>
                <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Email" class="form-control" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password*</label>
                <div class="col-sm-9">
                    <input type="password" id="password" placeholder="Password" class="form-control" name="password">
                </div>
            </div>

            <div class="form-group">
                <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                <div class="col-sm-9">
                    <input type="date" id="birthDate" class="form-control" name="dateofbirth">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Gender</label>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="femaleRadio" value="Female" name="gender">Female
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="maleRadio" value="Male" name="gender">Male
                            </label>
                        </div>
                    </div>
                </div>
            </div> <!-- /.form-group -->
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Annual Income </label>
                <div class="col-sm-9">
                    <input type="text" id="email" placeholder="Income" class="form-control" name="annual_income">
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">Occupation </label>
                <div class="col-sm-9">
                    <select name="occupation" id="" class="form-control">
                        <option value="Private Job">Private Job</option>
                        <option value="Government Job">Government job</option>
                        <option value="Business">Business</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">Family Type </label>
                <div class="col-sm-9">
                    <select name="family_type" id="" class="form-control">
                        <option value="Joint Family">Joint Family </option>
                        <option value="Nuclear Family">Nuclear Family</option>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">Manglik </label>
                <div class="col-sm-9">
                    <select name="manglik" id="" class="form-control">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>

                    </select>
                </div>
            </div>

            <h3 class="text-center">Partener Preferences</h3>

            <div class="form-group">
                <label for="range" class="col-sm-3 control-label">Expected Income</label>
                <div class="col-sm-9">
                    <p>

                        <input name="range" type="text" class="form-control" id="amount" readonly
                            style="border:0; color:#f6931f; font-weight:bold;">
                    </p>

                    <div id="slider-range"></div>
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">Occupation </label>
                <div class="col-sm-9">
                    <select name="partener_occupation[]" id="" class="form-control" multiple>
                        <option value="Private Job">Private Job</option>
                        <option value="Government Job">Government job</option>
                        <option value="Business">Business</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">Family Type </label>
                <div class="col-sm-9">
                    <select name="partener_family_type[]" id="" class="form-control" multiple>
                        <option value="Joint Family">Joint Family </option>
                        <option value="Nuclear Family">Nuclear Family</option>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">Manglik </label>
                <div class="col-sm-9">
                    <select name="p_manglik" id="" class="form-control">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>

                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Register</button>
            <a href="{{ route('login')}}" class="text-center mt-2">Already Registered? click Here To Login</a>
        </form> <!-- /form -->
    </div> <!-- ./container -->



    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="{{ asset('js/index.js')}}"></script>
    <script>
    $(function() {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 500,
            values: [75, 300],
            slide: function(event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
    });
    </script>
</body>

</html>