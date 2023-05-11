@include('layouts.partials.navbar')

@auth
    <div id="app"></div>

@endauth

@guest
    <div id="app"></div>
@endguest

<script type="text/javascript" src="{{ mix('js/app.js') }}"> </script>
