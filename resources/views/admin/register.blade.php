@extends('main.layout')
@section('register')

                        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            <form action="doregister" method='POST'>
            <h1 style="text-align:center;">Register</h1>                
            @csrf
                            <div class="group-input">
                                <br>
                                <input name='name'class='form-control' placeholder='Enter UserName' type="text" id="username">
                            </div>
                           
                            <div class="group-input">
                            <br>
                                <input name='email'class='form-control' placeholder='Enter Email' type="text" id="pass">
                            </div>
                            <div class="group-input">
                            <br>
                                <input name='password'class='form-control' placeholder='Enter Password' type="text" id="con-pass">
                            </div> <br>
                            <div class="group-input">
                                <input name='confirm_password' class='form-control'placeholder='Confirm Password' type="text" id="con-pass">
                            </div>
                            <br>
                            <button type="submit"class='form-control btn btn-primary' class="site-btn register-btn">REGISTER</button>
                        </form>
                        @if($errors->any())
                        @foreach($errors->all() as $err)
                    <div>{{$err}}</div>
                        @endforeach
                        @endif
                        @endsection
                      

            </div>
        </div>
    </div>