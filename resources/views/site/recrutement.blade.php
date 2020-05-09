@extends('site.welcome')


@section('title','Recrutement')


@section('content')

    <div class="row" style="margin-left: 5%;margin-right: 10%;">




    <div class="col-xs-12 col-sm-10 col-md-8 col-lg-12"><!--Panel-->
        <div class="card card-body mb-1 bg-light">
          <div class="media d-block d-md-flex">

            <div class="media-body text-center text-md-left ml-md-3 ml-0">

                <form id="contact-form" class="form" action="/recrutementTraducteur" method="POST" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="margin-top:5%;">
                        <h3>Recrutememt</h3>
                      </div>

                    <div class="md-form form-lg form-sm">
                        <input type="text" class="form-control" name="nom" placeholder="Votre Nom" tabindex="1" required>
                    </div>

                    <div class="form-group md-form form-lg form-sm">

                        <input type="text" class="form-control" name="prenom" placeholder="Votre Prénom" tabindex="1" required>
                    </div>

                    <div class="form-group md-form form-lg form-sm">
                        <input type="email" class="form-control" name="email" placeholder="Votre Email" tabindex="2" required>
                    </div>

                    <div class="form-group md-form form-lg form-sm">
                        <select name="wilaya" id="wilaya" class="form-control">
                            <option value="" selected disabled>Wilaya</option>

                            @foreach ($wilayas as $wilaya)
                            <option value="{{$wilaya->id}}"> {{$wilaya->nom}} </option>
                            @endforeach

                          </select>
                    </div>

                    <div class="form-group">

                        <select name="commune" id="commune" class="form-control" >
                        </select>
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

                    <div class="form-group md-form form-lg form-sm">
                        <div>
                            <select class="custom-select" name="langues[]" multiple>
                                <option selected>Langue Destination :</option>
                                <option value="Arabe">Arabe</option>
                                <option value="-Français">Français</option>
                                <option value="-Anglais">Anglais</option>
                                <option value="-Turque">Turque</option>
                                <option value="-Chinois">Chinois</option>
                                <option value="-Espagnol">Espagnol</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                        <label class="form-check-label" for="materialUnchecked">traducteur assermenté</label>
                        <input type="file" id="avatar" name="avatar" style="display:none"/>
                    </div>

                    <br>
                    <div>
                        <label for="fileing">Votre CV : </label>&nbsp;&nbsp;&nbsp;
                        <input type="file" name="fileCV"  multiple>
                    </div>
                    <br>


                    <div>
                        <label for="fileing">si vous avez des références: </label>&nbsp;&nbsp;&nbsp;
                        <input type="file" name="refs[]"  multiple>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-start-order">Send Message</button>
                    </div>
                </form>


            </div>
          </div>
        </div>
        <!--/.Panel-->
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
           url:"{{url('api/get-wilaya-list')}}?wilaya_id="+wilayaID,
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









</script>

@endsection
