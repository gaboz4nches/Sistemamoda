<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{--meta///////////////////////////////////////////////////////////////////////////////////////--}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="footer, address, phone, icons" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--title//////////////////////////////////////////////////////////////////////////////////////--}}
    <title> @yield('title') </title>
    {{--link///////////////////////////////////////////////////////////////////////////////////////--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.flipster.css') }}">
    {{--///////////////////////////////////////////////////////////////////////////////////////////--}}
</head>
<body>
    @include('layouts.navbar')
    <div style="height: 100px;"></div>    
    @yield('content')
    @include('layouts.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.flipster.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert2"></script>
    @stack('scripts')
    <script>
        $(document).ready(function() {
            /* = - = - = - = - = - = - = - = - = - = - = - = - = - = - = */
            @if(session('status'))
                swal('Felicitaciones!', '{{ session('status') }}','success');
            @endif
            /* = - = - = - = - = - = - = - = - = - = - = - = - = - = - = */
            $('form').on('click', '.btn-upload', function(event) {
                event.preventDefault();
                $(this).prev().click();
            });
            /* = - = - = - = - = - = - = - = - = - = - = - = - = - = - = */
            $('form').on('click', 'img', function(event) {
                event.preventDefault();
                $ui = $(this).attr('src');
                swal({
                    imageUrl: $ui
                });
            });
            /* = - = - = - = - = - = - = - = - = - = - = - = - = - = - = */
            $('form').on('click', '.btn-delete', function(event) {
                event.preventDefault();
                swal({
                  title: 'Esta seguro ?',
                  text: 'Realmente desea eliminar este registro ?',
                  type: 'warning',
                  showCancelButton: true,
                  cancelButtonColor: '#d33'
                }).then((result) => {
                  if (result.value) {
                    $(this).parent().submit();
                  }
                });
            });
            /* = - = - = - = - = - = - = - = - = - = - = - = - = - = - = */
            $('form').on('keyup', '#asearch', function(event) {
                event.preventDefault();
                $name = $(this).val();
                $.get('articles/ajaxsearch', {name: $name}, function(data) {
                    $('.results').html(data);
                });
            });         
            /* = - = - = - = - = - = - = - = - = - = - = - = - = - = - = */
            $('form').on('change', '#departamentos', function(event) {
                event.preventDefault();
                $did = $(this).val();
                $.get('municipalities', {did: $did}, function(data) {
                    $('#municipios').attr('disabled', false).html(data);
                });
            });         
            /* = - = - = - = - = - = - = - = - = - = - = - = - = - = - = */
            $(window).on('scroll', function(){
                if($(window).scrollTop()){
                    $('nav').addClass('black');
                }
                else
                {
                    $('nav').removeClass('black');
                }
            })
            /* = - = - = - = - = - = - = - = - = - = - = - = - = - = - = */
        });
    </script>
</body>
</html>