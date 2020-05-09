@extends('site.welcome')

@section('title', 'Page Accueil ')




@section('content')


<div class="diaporamma">

    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block img-fluid w-10 img-re" src="{{asset('images/vendor/mdbootstrap/overlays/trad1.jpg')}}" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
               <div class="carousel-caption"></div>
            </div>
            <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                    <img class="img-fluid" src="{{asset('images/vendor/mdbootstrap/overlays/trad2.jpg')}}" alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption"></div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                    <img class="d-block img-fluid w-5" src="{{asset('images/vendor/mdbootstrap/overlays/trad3.jpg')}}"alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
            </div>
        <div class="carousel-caption"></div>
    </div>
</div>
<!--/.Slides-->

<!--Controls-->
<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
<!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
  </div>

</div>






<div class="row">
 <div class=" col-sm">

   <div class="row">
       <div class="col-12 col-sm-12"><!--Panel-->
         <div class="card card-body mb-1 bg-light">
           <div class="media d-block d-md-flex">

             <div class="media-body text-center text-md-left ml-md-3 ml-0">
               <h5 class="mt-0 font-weight-bold">Une plateforme de traduction dans le cloud</h5>
               <p>extMaster collabore avec des traducteurs spécialisés dans plus de 200 couples de langues et 50 domaines d’expertises.extMaster collabore avec des traducteurs spécialisés dans plus de 200 couples de langues et 50 domaines d’expertises.</p>
               <a type="button"    class="btn btn-deep-orange btn-rounded btn-md btn-sm">Read more</a>
             </div>
           </div>
         </div>
         <!--/.Panel-->
       </div>
       <div class="col-12 ">


         <!--Panel-->
<div class="card card-body mb-2 bg-light">
<div class="media d-block d-md-flex">
<div class="media-body text-center text-md-left ml-md-3 ml-0">
<h5 class="mt-0 font-weight-bold">Un réseau de traducteurs professionnels </h5>

<p>TextMaster vous permet de lancer, en quelques clics, vos projets auprès de traducteurs spécialisés, sans aucune autre intervention de votre part.Importez très simplement vos contenus à traduire dans le format de votre choix et suivez l’ensemble de vos projets en temps réel.</p>
 <a type="button"    class="btn btn-deep-orange btn-rounded btn-md btn-sm">Read more</a>
</div>
</div>
</div>
<!--/.Panel-->

    </div>
       <div class="col-12">
         <!--Panel-->
<div class="card card-body mb-2 bg-light">
<div class="media d-block d-md-flex">
<div class="media-body text-center text-md-left ml-md-3 ml-0">
<h5 class="mt-0 font-weight-bold">Les meilleures technologies de traduction</h5>
<p>TextMaster développe les technologies d’aide à la traduction de dernière génération pour</p>
<a type="button"  class="btn btn-deep-orange btn-rounded btn-md btn-sm">Read more</a>
</div>
</div>
</div>
<!--/.Panel-->
       </div>
   </div>
 </div>



 <div class="col-sm bg-light">


  <div class="text-center">


    <div class="d-inline-block">
      <a  href="{{ route('login') }}" class="btn btn-deep-orange btn-rounded btn-md btn-sm mb-4">Login</a>
    </div>

    <div class="d-inline-block">
       <a href="{{ route('register') }}" class="btn btn-deep-orange btn-rounded btn-md btn-sm mb-4">Register </a>
    </div>

  </div>


@guest

  <div class="col-xs-12 col-sm-10 col-md-8 col-lg-12">
    <form id="" class="form" action="" method="" role="" >
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="margin-top:5%;">
            <h3>Demande Devis</h3>
          </div>


        <div class="md-form form-lg form-sm">
            <input type="text" class="form-control" placeholder="Votre Nom" tabindex="1"  disabled >
        </div>
        <div class="form-group md-form form-lg form-sm">

            <input type="text" class="form-control" placeholder="Votre Prénom" tabindex="1"  disabled>
        </div>
        <div class="form-group md-form form-lg form-sm">
            <input type="email" class="form-control" placeholder="Votre Email" tabindex="2"  disabled >
        </div>

        <div class="form-group md-form form-lg form-sm">
            <input type="text" class="form-control"placeholder="Votre adresse" tabindex="2"  disabled >
        </div>
        <div class="form-group md-form form-lg form-sm">
            <input type="tel" class="form-control"  placeholder="Votre numéro de téléphone" tabindex="2"disabled >
        </div>

        <div class="form-group md-form form-lg form-sm">
            <input type="tel" class="form-control"placeholder="Votre numéro de fax" tabindex="2"disabled >
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label" for="materialUnchecked">traducteur assermenté</label>
        </div>

<br>
        <div>
            <select class="custom-select" >
                <option selected >Type de traduction :</option>
                <option value="general">général</option>
                <option value="scientifique">scientifique</option>
                <option value="site web">site web</option>
              </select>
        </div>
<br>

<br>
        <div>
            <select class="custom-select">
                <option selected>Langue Source :</option>
                <option value="arabe">Arabe</option>
                <option value="français">Français</option>
                <option value="anglais">Anglais</option>
                <option value="turque">Turque</option>
                <option value="chinois">Chinois</option>
                <option value="espagnol">Espagnol</option>
              </select>
        </div>
<br>

<br>
        <div>
            <select class="custom-select">
                <option selected>Langue Destination :</option>
                <option value="1">Arabe</option>
                <option value="2">Français</option>
                <option value="3">Anglais</option>
                <option value="4">Turque</option>
                <option value="5">Chinois</option>
                <option value="6">Espagnol</option>
              </select>
        </div>
<br>

    <div class="md-form">
        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Description de votre document"></textarea>
    </div>
<br>
        <div class="text-center">
            <button type="submit" class="btn btn-deep-orange" disabled>Send Message</button>
        </div>
    </form>

</div>



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" style="display:none;" id="btt">
  Launch demo modal
</button>
<!-- Frame Modal Bottom -->
<div class="modal fade bottom" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Add class .modal-frame and then add class .modal-bottom (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-frame modal-bottom" role="document">


    <div class="modal-content">
      <div class="modal-body">
        <div class="row d-flex justify-content-center align-items-center">

          <p class="pt-3 pr-2">S'il Vous plaît devez s'authentifier pour vous pouvez envoyer votre demande de devis
          </p>

          <button type="button" class="btn btn-deep-orange" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Frame Modal Bottom -->
@endguest

@auth
<div class="col-xs-12 col-sm-10 col-md-8 col-lg-12">
    <form id="contact-form" action="/demandeDevis" method="POST" role="form">
        {{ csrf_field() }}

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="margin-top:5%;">
            <h3>Demande Devis</h3>
          </div>


        <div class="md-form form-lg form-sm">
            <input type="text" class="form-control" id="name" name="nom" placeholder="Votre Nom" tabindex="1" required>
        </div>
        <div class="form-group md-form form-lg form-sm">

            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre Prénom" tabindex="1" required>
        </div>
        <div class="form-group md-form form-lg form-sm">
            <input type="email" class="form-control" id="email" name="email" placeholder="Votre Email" tabindex="2" required>
        </div>

        <div class="form-group md-form form-lg form-sm">
            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Votre adresse" tabindex="2" required>
        </div>
        <div class="form-group md-form form-lg form-sm">
            <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Votre numéro de téléphone" tabindex="2" required>
        </div>

        <div class="form-group md-form form-lg form-sm">
            <input type="tel" class="form-control" id="fax" name="fax" placeholder="Votre numéro de fax" tabindex="2" required>
        </div>

        <div class="form-check">
            <input type="checkbox" name="assermente" class="form-check-input" id="assermente" >
            <label class="form-check-label" for="materialUnchecked">traducteur assermenté</label>
        </div>

<br>
        <div>
            <select class="custom-select" name="typetraduction" required>
                <option selected >Type de traduction :</option>
                <option value="general">général</option>
                <option value="scientifique">scientifique</option>
                <option value="site web">site web</option>
              </select>
        </div>
<br>

<br>
        <div>
            <select class="custom-select" name="languesource" required>
                <option selected>Langue Source :</option>
                <option value="Arabe">Arabe</option>
                <option value="Français">Français</option>
                <option value="Anglais">Anglais</option>
                <option value="Turque">Turque</option>
                <option value="Chinois">Chinois</option>
                <option value="Espagnol">Espagnol</option>
              </select>
        </div>
<br>

<br>
        <div>
            <select class="custom-select" name="languedestination" required>
                <option selected>Langue Destination :</option>
                <option value="Arabe">Arabe</option>
                <option value="Français">Français</option>
                <option value="Anglais">Anglais</option>
                <option value="Turque">Turque</option>
                <option value="Chinois">Chinois</option>
                <option value="Espagnol">Espagnol</option>
              </select>
        </div>
<br>

        <div class="md-form">
            <textarea type="text" id="description" name="description" rows="2" class="form-control md-textarea" placeholder="Votre description du document" required></textarea>
        </div>
<br>
        <div class="md-form">
            <select name="traducteurs[]" id="traducteurs" class="form-control" multiple required>
                <option value="" selected disabled>Traducteurs</option>


              </select>
        </div>
        <br><br>
        <div class="text-center">
            <button class="btn btn-deep-orange" type="submit">Send Message</button>
        </div>
    </form>

</div>
@endauth


</div>


</div>
@endsection



@section('scripts')


<script>
$(document).ready(function(){

    $('#wilaya').change(function(){

    var wilayaID = $(this).val();
    if(wilayaID){
        $.ajax({
           type:"GET",
           url:"{{url('api/get-wilaya-list-registration')}}?wilaya_id="+wilayaID,
           success:function(res){
            if(res){
                $("#commune").empty();
                $("#commune").append('<option>Select Commune</option>');
                $.each(res,function(key,value){
                    $("#commune").append('<option value="'+key+'">'+value+'</option>');
                });
            }else{
               $("#commune").empty();
            }
           }
        });
    }else{
        $("#commune").empty();
    }
   });
});


$(document).ready(function(){
    $('.md-form').mouseover(function(){
      $('#btt').click();
    });
});

$(document).ready(function(){




    $('#assermente').change(function(){
        var assermente = 1;
        if ($(this).prop("checked"))
        {
          $.ajax({
              type:"GET",
              url:"{{url('api/getListTraducteurAssermente')}}?assermente="+assermente,
              success:function(res){
                if(res){
                    //alert(res.key);
                     $("#traducteurs").empty();
                    $.each(res,function(key,value){
                           $('#traducteurs').append('<option value="'+key+'">'+value+'</option>');

                    });
                }else{
                    $("#traducteurs").empty();
                }
              }

        })
        }
        else
        {
            assermente = 0;
            $("#traducteurs").empty();
            $("#traducteurs").append('<option>Traducteurs</option>');
            $.ajax({
              type:"GET",
              url:"{{url('api/getListTraducteurNonAssermente')}}?assermente="+assermente,
              success:function(res){
                if(res){

                    $.each(res,function(key,value){
                           $('#traducteurs').append('<option value="'+key+'">'+value+'</option>');

                    });
                }
              }

        })
        }
    })
})

          /*$.ajax({
                type:"GET",
                url:"{{url('api/getListTraducteurAssermente')}}?assermente"=1,
                success:function(res){
                    if(res){
                        $("#traducteurs").empty();
                     $.each(res,function(key,value){
                        ('#traducteurs').append('<option value="'+key+'">'+value+'</option>');
                     });
                     alert('gff');

                    }else{
                        alert('ddd');
                    }
                }
            });*/






/*$(document).ready(function()
{
    $('#assermente').change(function()
    {
        if ($(this).prop("checked"))
        {
          alert('ggg');
        }
    })

});*/

function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>
@endsection
