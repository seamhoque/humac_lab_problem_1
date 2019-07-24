@extends('layouts.master')
@section('content')
    <div class="container">


        <form method="post" action="{{route('reg.store')}}" name="reg_form" class="form-horizontal" onsubmit="return validateForm()" role="form">
            @csrf
            <h2>Registration</h2>
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-9">
                    <input type="text" name="username" placeholder="User Name" class="form-control" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password*</label>
                <div class="col-sm-9">
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email* </label>
                <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Email" class="form-control" name= "email" required>
                </div>
            </div>

            <div class="form-group">
                <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                <div class="col-sm-9">
                    <input type="date" name="birthdate" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="Height" class="col-sm-3 control-label">City </label>
                <div class="col-sm-9">
                    <input type="text" name="city"  placeholder="Please write your city name" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="weight" class="col-sm-3 control-label">Country </label>
                <div class="col-sm-9">
                    <input type="text" name="country" placeholder="Please write your country name" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <p for="weight" class="col-sm-3 control-label"> <b>Terms and Conditions</b><br> Agreed to our terms of services and end user license agreement </p>
                <div class="radio" style="margin-top: 20px">
                    <label><input type="radio" name="optradio" value="agree" checked>I Agree</label>
                    <label><input type="radio" name="optradio" value="not">I Dont</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form> <!-- /form -->
        
        
    </div>
    <script>
        function validateForm() {
            var terms = document.forms["reg_form"]["optradio"].value;

            if(terms == "not"){
                alert("Please agree to our terms and conditions");
                return false;
            }
            /*alert(terms);*/

        }
    </script>
@endsection

