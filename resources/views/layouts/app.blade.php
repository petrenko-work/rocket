<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
<div class="main mainLarge">
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

</div>

@include('_forms.order')

<a href="#" id="back-top"></a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
<script src="js/script.js"></script>
</body>
</html>