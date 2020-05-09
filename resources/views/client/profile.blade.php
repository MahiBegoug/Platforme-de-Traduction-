@extends('layouts.master')



@section('title','Profile')



@section('content')
<div class="container py-6 mb-3">
    <div class="row my-5">
        <!-- edit form column -->


        <div class="col-lg-8 order-lg-1 personal-info">


            <form method="POST" action="/profil-update-client">

                {{csrf_field()}}

                {{method_field('PUT')}}

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Nom</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="{{$user->nom}}" name="nom" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Prénom</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="{{$user->prenom}}" name="prenom" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Note</label>
                    <div class="col-lg-9">
                        <fieldset class="rating">
                            <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Adresse</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="adresse" value="{{$user->adresse}}" placeholder="Rue" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>

                    <div class="col-lg-3">

                        <select class="form-control" name="wilaya" id="wilaya">
                            <option value="{{$wilaya_id}}">{{$wilaya_nom}}</option>
                            @foreach (App\Wilaya::all() as $wilaya)
                                    <option value="{{$wilaya->id}}"> {{$wilaya->nom}} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-6">

                    <select class="form-control" name="commune" id="commune">
                        <option value="{{$commune_id}}">{{$commune_nom}}</option>
                    </select>
                    </div>

                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="phone" type="text" value="{{$user->phone}}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Fax</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="fax" type="text" value="{{$user->fax}}" />
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="email" value="{{$user->email}}" name="email" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Nom d'utilisateur</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="adresse" value="{{$user->username}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Mot de passe</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="password" name="password" value="{{$user->password}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Confirm le Mot de passe</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="password" value="{{$user->password}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-9 ml-auto text-right">
                        <a type="" class="btn btn-grey">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </form>


        </div>

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
           url:"{{url('api/get-wilaya-list-traducteurProfiling')}}?wilaya_id="+wilayaID,
           success:function(res){
            if(res){
                $("#commune").empty();
                //$("#commune").append('<option>'+<option value=""></option>+'</option>');
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
