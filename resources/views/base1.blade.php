<!DOCTYPE html>
<html lang="es">
<head>
    <title>IEEE | Ingeniería Electrónica y Equipos Eléctricos</title>


<meta name="description" content="Ingeniería electrónica y equipos elécgtricos. Líder en venta de equipos de medición y automatización de procesos industriales."/>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="js/jquery-3.3.1.js"></script>
{{--    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/all.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='css/all.css'>
    <link href='https://fonts.googleapis.com/css?family=Allerta+Stencil' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="{{url('/images/icono.png')}}">
    @yield('cssextra')
    <style>
        .encabezado{
            font-family: "Century Gothic";
            font-size: 30px;
        }

         .dropdown:hover>.dropdown-menu {
         display: block;
         }
        .dropdown:hover>.dropdown-toggle {
            background-color: #FFFFFF;
        }
        .tooltip-inner{
            white-space: pre-wrap;
        }

        .active {
            background-color: #FFFFFF !important;
            box-shadow: none !important;
        }
        /*.p-2:hover>{*/
        /*    background-color: #262689;*/
        /*    color: #FFFFFF;*/
        /*}*/
        .p-2:hover>a{
            background-color: #262689;
            color: #FFFFFF;
            border-radius: 5px;
            transition-delay: .09s;
        }
    </style>
</head>
<body>
@section('nav')

     <header class="navbar fixed-top navbar-light "
             style="border-bottom-style:solid;border-bottom-color:#262689;border-bottom-width:1px; background-color: #FFFFFF;">
         <a class="navbar-brand" href="/">
             <img src="/images/IEEE.png" style="width:198px;height:90px;">
         </a>

         <div class="d-flex justify-content-end">
             <div class="p-2 bd-highlight" style="border-right: 1px solid #333333;">
                 <a class="dropdown-item" href="/productos" style="font-size: 20px;"><i style='font-size:20px;margin-right:8px;' class='fas'>&#xf02c;</i>Productos</a>
             </div>
{{--             <div class="p-2 bd-highlight" style="border-right: 1px solid #333333;">--}}
{{--                 <a class="dropdown-item" href="/servicios" style="font-size: 20px"><i style='font-size:20px;margin-right:8px;' class='fas'>&#xf7d9;</i>Servicios</a>--}}
{{--             </div>--}}
             <div class="p-2 bd-highlight">
                 <a class="dropdown-item" href="/contacto" style="font-size: 20px"><i class='fas'>&#xf674;</i>  Contacto</a>
             </div>

         </div>
     </header>
@show
@section('Contenido')

@show
@yield('javascript')
<script>
    $( function() {
        $( "#telefono" ).tooltip({
            show: {
                effect: "slideRight",
                delay: 300
            }
        });
    });
    $("#dropdownMenuButton").click(function(){
        $("#dropdownMenuButton").removeClass("active");
        $(this).addClass("active");
    });
</script>
</body>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4" style="background-color: #262689;">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left" style="border-top-style: solid;border-top-color:#ffffff; border-top-width: 1px;">

        <div class="row">
            <div class="col-md-8 offset-4">
                <p style="text-align: center; color: #FFFFFF;">
                    Ingeniería Electrónica y Equipos Eléctricos.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-1">
                <p style="text-align: center; color: #FFFFFF;">
                    Paseo de la soledad #540, col. Ampliación la rosita, Torreón Coahuila, México, C.P. 27250
                </p>
            </div>
            <div class="col-md-2" style="text-align: center; padding-top: 7px">
                <a href="/contacto" id="telefono" style="display:inline-block; font-size: 27px;" data-placement="right" title="(871)-193-95-88
(871)-204-11-47"><i class="fas fa-phone-alt" style="color:#ffffff;"></i></a>
            </div>
            <div class="col-md-2" style="text-align: center">
                <a href="https://www.facebook.com/Ingenier%C3%ADa-Electr%C3%B3nica-Y-Equipos-El%C3%A9ctricos-816338422084555/"
                  target="_blank" style="text-align: center;display: inline-block; font-size: 27px;" class="btn btn-social-icon btn-facebook">
                    <i class="fab fa-facebook-f" style="color: #ffffff"></i>
                </a>
            </div>
            <div class="col-md-2" style="text-align: center">
                <a href="/contacto"
                   style="text-align: center;display: inline-block; font-size: 27px;" class="btn btn-social-icon btn-facebook">
                    <i class="fas fa-envelope" style="color: #ffffff"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3" style="color: #FFFFFF; background-color: #1b1e21">© 2019 Copyright:
        <a href="https://ieeesadecv.com" style="color: #FFFFFF;">ieee s.a. de c.v.</a>
    </div>
    <!-- Copyright -->
</footer>
</html>
