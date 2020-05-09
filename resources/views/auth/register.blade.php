@extends('layouts.app')



@section('title','Registration')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="from-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nom</label>
                            <div class="col-lg-9">
                                <input class="form-control @error('nom') is-invalid @enderror" type="text" id="nom" name="nom" value="" placeholder="Nom" required autocomplete="name" autofocus/>

                                @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Prénom</label>
                            <div class="col-lg-9">
                                <input class="form-control @error('prenom') is-invalid @enderror" type="text" id="prenom" name="prenom" value="" placeholder="Prénom" required autocomplete="name" autofocus />

                                @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Adresse</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" id="adresse" name="adresse"  placeholder="Rue" required autocomplete="name" autofocus />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                                <select name="wilaya" id="wilaya" class="form-control">
                                    <option value="" selected disabled>Wilaya</option>
                                    @foreach (App\Wilaya::all() as $wilaya)
                                    <option value="{{$wilaya->id}}"> {{$wilaya->nom}} </option>
                                    @endforeach

                                  </select>
                            </div>
                            <div class="col-lg-3">
                                <select name="commune" id="commune" class="form-control" >
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Téléphone</label>
                            <div class="col-lg-9">
                                <input class="form-control @error('phone') is-invalid @enderror" type="text" id="phone" name="phone" required  autocomplete="phone" autofocus />

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Fax</label>
                            <div class="col-lg-9">
                                <input class="form-control @error('fax') is-invalid @enderror" type="text" id="fax" name="fax" required  autocomplete="fax" autofocus />

                                @error('fax')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" value="" placeholder="Email"  required autocomplete="name" autofocus/>

                                @error('email')
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                     </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nom d'utilisateur</label>
                            <div class="col-lg-9">
                                <input class="form-control @error('username') is-invalid @enderror" type="text" id="username" name="username" value="{{ old('username') }}" required  autocomplete="username" autofocus/>
                                @error('username')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Mot de passe</label>
                            <div class="col-lg-9">
                                <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password"  required autocomplete="new-password"/>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                               @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirm le Mot de passe</label>
                            <div class="col-lg-9">
                                <input class="form-control" id="password-confirm" name="password_confirmation" type="password" required autocomplete="new-password" />
                            </div>
                        </div>

                        <!--  Error handle -->
        @if($errors->any())
        <div class="row collapse">
            <ul class="alert-box warning radius">
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
        @endif

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-deep-orange">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
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

    </script>

@endsection
