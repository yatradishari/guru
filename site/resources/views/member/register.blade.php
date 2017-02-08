@section('title') Login @stop
@extends('app')

@section('content')

    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class="uk-alert uk-alert-danger" data-uk-alert>
                <a href="#" class="uk-alert-close uk-close"></a>
                {{ $error }}
            </div>
        @endforeach
    @endif
            
    <div class="row">
        <div class="col-md-4 wow fadeInLeft">           
            <form action="register" method="POST" class="contact-form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="user_type" value="2">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="email" placeholder="Email">                 
                <input type="password" name="password" placeholder="Password">
                <input type="submit" class="button" value="Register">
            </form>
        </div>
        <div class="col-md-4 wow fadeInRight">    
        Go to <a href="{{ url('/member') }}">Login</a>
        </div>
    </div>
@endsection
