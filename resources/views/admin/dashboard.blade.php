<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h4>Dashboard</h4>
            <table class="table table-hover">
                <thead>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Date Of Birth</th>
                    <th>Gender</th>
                    <th>Annual Income</th>
                    <th>Occupation</th>
                    <th>Family Type</th>
                    <th>Manglik</th>
                </thead>

                <tbody>
                    <tr>
                        <td>{{ $LoggedUserInfo['firstname']}}</td>
                        <td>{{ $LoggedUserInfo['lastname']}}</td>
                        <td>{{ $LoggedUserInfo['email']}}</td>
                        <td>{{ $LoggedUserInfo['date_of_birth']}}</td>
                        <td>{{ $LoggedUserInfo['gender']}}</td>
                        <td>{{ $LoggedUserInfo['annual_income']}}</td>
                        <td>{{ $LoggedUserInfo['occupation']}}</td>
                        <td>{{ $LoggedUserInfo['family_type']}}</td>
                        <td>{{ $LoggedUserInfo['manglik']}}</td>
                        
                    </tr>
                   
                </tbody>
            </table>
        </div>

        
    </div>

    <div class="col-md-6 col-md-offset-3">
        <div class="row">
            <h4>Partener Preferences</h4>
            <table class="table table-hover">
                <thead>
                    <th>Annual Income</th>
                    <th>Occupation</th>
                    <th>Family Type</th>
                    <th>Manglik</th>
                   
                </thead>

                <tbody>
                    <tr>
                    <td>{{ $LoggedPartenerInfo['annual_income']}}</td>
                    <td>{{ $LoggedPartenerInfo['occupation']}}</td>
                    <td>{{ $LoggedPartenerInfo['family_type']}}</td>
                    <td>{{ $LoggedPartenerInfo['manglik']}}</td>
                        
                        
                    </tr>
                    <tr>
                        <td><a href="{{ route('logout')}}">Logout</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</div>




<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</body>
</html>