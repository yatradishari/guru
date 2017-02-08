@section('title') Login @stop
@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-4 wow fadeInLeft">           
            <form action="member/signin" method="POST" class="contact-form">         
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">                
                <input type="submit" class="button" value="Login">
            </form>
        </div>
        <div class="col-md-7 col-md-push-1 wow fadeInRight">
            
                New here? <a href="{{ url('/member/register') }}">Sign Up</a>
            
        </div>
        
    </div>
@endsection
