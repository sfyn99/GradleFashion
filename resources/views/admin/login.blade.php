@extends('main.layout')
@section('logintitle')
<title>Login</title>
@endsection
@section('login')

                        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            <form action="{{route('admin.auth')}}" method='POST'>
            <h1 style="text-align:center;">LOGIN</h1>                
            @csrf
                            
                                <br>
                                
                            <div class="group-input">
                            <br>
                                <input name='email'class='form-control' placeholder='Enter Email' type="text" id="pass">
                            </div>
                            <div class="group-input">
                            <br>
                                <input name='password'class='form-control' placeholder='Enter Password' type="text" id="con-pass">
                            </div><br>
                            <center>
                            <a href="register">Don't have an account</a>
                            </center>
                            <br>
                            <button type="submit"class='form-control btn btn-primary' class="site-btn register-btn">Login</button>
                        </form>
                        <br>
                    <center style="background-color:red;color:white;">
                       <b>{{session('errors')}}</b>
                    </center>  

            </div>
        </div>
    </div>
    @endsection