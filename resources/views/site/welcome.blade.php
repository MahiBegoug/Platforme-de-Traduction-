<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <title> @yield('title') </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/accordion.min.css">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>




        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/accordion.min.js"></script>


   <style>
              body{

                color: #636b6f;
                background: #e2e2e2;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 5vh 5vw !important;/**5%**/
            }



            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            img{
                width:20%;
               height:10%;
            }

            .diaporamma{
                width: 90%;
                height: 30%;
                margin: 10vh 9vw !important;
            }



            .carousel-inner .carousel-item {
                transition: -webkit-transform 0.3s ease;
                transition: transform 0.3s ease;
                transition: transform 0.3s ease, -webkit-transform 0.3s ease;
            }

            img{
               /* width:50%;*/
               height:auto;

            }
            .carousel-inner > .item > .view > img {
               /*width:80%;*/
               height:auto;
               display: block;
             }


            .navbar-nav li  a:hover{
               color: #8044DB;
               text-decoration: underline;
            }

            .back-to-top {
                position: fixed;
                bottom: 30px;
                right: 30px;
                width: 30px;
                height: 30px;
                display: inline;
                padding-top: 1px;
                padding-left: 7px;
            }

            .pb-modalreglog-container
    {
        margin-top: 100px;
    }

    .pb-modalreglog-legend
    {
        text-align: center;
    }

    .pb-modalreglog-input-group
    {
        margin: auto;
    }

    .pb-modalreglog-submit
    {
        margin-left: 5px;
    }

    .pb-modalreglog-form-reg
    {
        text-align: center;
    }

    .pb-modalreglog-footer p
    {
        text-align: center;
        margin-top: 20px;
    }

    #pb-modalreglog-progressbar
    {
        border-radius: 2px;
    }

    textarea {
	resize: none;
}
.form-label {
	font-size: 12px;
	color: #5e9bfc;
	margin: 0;
	display: block;
	opacity: 1;
	-webkit-transition: .333s ease top, .333s ease opacity;
	transition: .333s ease top, .333s ease opacity;
}
.form-control {
	border-radius: 0;
	border-color: #ccc;
   	border-width: 0 0 2px 0;
   	border-style: none none solid none;
   	box-shadow: none;
}
.form-control:focus {
	box-shadow: none;
	border-color: #5e9bfc;
}
.js-hide-label {
	opacity: 0;
}
.js-unhighlight-label {
	color: #999
}
.btn-start-order {
	background: 0 0 #ffffff;
    border: 1px solid #2f323a;
    border-radius: 3px;
    color: #2f323a;
    font-family: "Raleway", sans-serif;
    font-size: 16px;
    line-height: inherit;
    margin: 30px 0;
    padding: 10px 50px;
    text-transform: uppercase;
    transition: all 0.25s ease 0s;
}
.btn-start-order:hover,.btn-start-order:active, .btn-start-order:focus {
	border-color: #5e9bfc;
	color: #5e9bfc;
}



@media (min-width: 576px) and (max-width: 767.98px) {
    #contact-form{
         margin-left: 18px;
         margin-right: 18px;
    }
 }

 #contact{
   background:lightblue;
 }

 .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
/****************************************************************************************************/
/****************************************************************************************************/
/****************************************************************************************************/
/****************************************************************************************************/
.checkbox-menu li label {
    display: block;
    padding: 3px 10px;
    clear: both;
    font-weight: normal;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
    margin:0;
    transition: background-color .4s ease;
}
.checkbox-menu li input {
    margin: 0px 5px;
    top: 2px;
    position: relative;
}

.checkbox-menu li.active label {
    background-color: #cbcbff;
    font-weight:bold;
}

.checkbox-menu li label:hover,
.checkbox-menu li label:focus {
    background-color: #f5f5f5;
}

.checkbox-menu li.active label:hover,
.checkbox-menu li.active label:focus {
    background-color: #b8b8ff;
}

#top li a:hover{
    color: green;
}

        </style>

<meta name="csrf-token" content="{{csrf_token() }}">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<script type="text/javascript">
    var csrf_token   =   $('meta[name="csrf-token"]').attr('content');
    $.ajaxSetup({
  headers: {"X-CSRF-TOKEN": csrf_token}
    });
  </script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>




             <nav class="navbar  navbar-light bg-light navbar-expand-lg navbar-template">
                <a class="navbar-brand" href="#"><img src="{{asset('images/vendor/mdbootstrap/overlays/lexilogos.gif')}}"  alt="mahi begoug"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-flex flex-row order-2 order-lg-3">
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item"><a class="nav-link px-2" href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="nav-item"><a class="nav-link px-2" href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="nav-item"><a class="nav-link px-2" href="#"><span class="fa fa-youtube"></span></a></li>
                        <li class="nav-item"><a class="nav-link px-2" href="#"><span class="fa fa-linkedin"></span></a></li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse moka justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto" id="topmenu">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('accueil') }}">Accueil</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('traduction') }}">Les Types</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('traducteur') }}">Traducteurs</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('recrutement') }}">Recrutement</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('propos') }}">à propos</a>
                      </li>


                    </ul>
                  </div>

                <div class="collapse navbar-collapse order-3 order-lg-2"></div>
            </nav>


            <div class="container-fluid">
                   @yield('content')
            </div>

            <a id="back-to-top" href="#" class="btn-deep-orange btn-lg back-to-top" style="padding-left: 7px;padding-top: 1px;" role="button" ><i class="fa  fa-chevron-up"></i></a>

            <div>



            </div>
            <!-- Footer -->
             <footer class="page-footer font-small special-color-flight pt-4"  >
                  <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-template">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item"><a class="nav-link" href="{{ url('accueil') }}">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('traductions') }}">Les Types</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('traducteur') }}">Traducteurs</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('blog') }}">blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('recrutement') }}"">Recrutement</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('propos') }}">à propos</a></li>
                    </ul>
                  </nav>
             </footer>
          <!-- Footer -->

    </body>



<script>
    $(document).ready(function() {
  jQuery.fn.carousel.Constructor.TRANSITION_DURATION = 300;  // 2 seconds
});

$(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});

$(document).ready(function(){

    $('#materialUnchecked').click(function(){
        if($(this).is(":checked")){
            $("#avatar").show();
            //$("#materialUnchecked").hide();
        }else{
            $("#avatar").hide();
            $("#materialUnchecked").show();
        }
    })
})


$(document).ready(function(){
    $(function(){
            $("input[type = 'submit']").click(function(){
               var $fileUpload = $('#files');
               if (parseInt($fileUpload.get(0).files.length) > 3){
                  alert("You are only allowed to upload a maximum of 3 files");
               }
            });
         });
});

$(".checkbox-menu").on("change", "input[type='checkbox']", function() {
   $(this).closest("li").toggleClass("active", this.checked);
});

$(document).on('click', '.allow-focus', function (e) {
  e.stopPropagation();
});


</script>

@yield('scripts')

</html>
