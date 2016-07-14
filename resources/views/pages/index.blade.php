@extends('layouts.master')

@section('content')
    @if(Session::get('success'))
        <div class="overlay success">
            <p><strong>Yay!</strong> {{ Session::get('success') }}</p>
        </div>
    @endif
    @if(Session::get('error'))
        <div class="overlay error">
            <p><strong>Sorry!</strong> {{ Session::get('error') }}</p>
        </div>
    @endif
    @include('pages.partials.intro')
    @include('pages.partials.experience')
    @include('pages.partials.projects')
    @include('pages.partials.contact')
    <footer>
        <p>Copyright &copy;{{ date('Y') }}, Tarun Krishnan, All Rights Reserved</p>
    </footer>
@stop

@section('scripts')
    <script>
        $('.overlay.success').delay(5000).fadeOut();
    </script>
@stop