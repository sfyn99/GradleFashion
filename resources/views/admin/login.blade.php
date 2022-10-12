@extends('main.layout')
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
                            </div> <br>
                            <button type="submit"class='form-control btn btn-primary' class="site-btn register-btn">REGISTER</button>
                        </form>
                    <center style="color:red;">
                        {{session('errors')}}
                    </center>  

            </div>
        </div>
    </div>
    @endsection