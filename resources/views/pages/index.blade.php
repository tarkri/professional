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
        // Add smooth scrolling to all links
        $("a.nav").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    </script>
@stop