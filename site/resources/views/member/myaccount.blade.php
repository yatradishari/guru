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
            Welcode User {{$uuu}}
        </div>
        <div class="col-md-4 wow fadeInRight">    
        Go to <a href="{{ url('/member') }}">Login</a>
        </div>
    </div>
@endsection
