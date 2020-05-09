

@extends('admin.dashboard')



@section('content')


  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Edit Profile</h5>
        </div>
        <div class="card-body">



        <form method="POST" action="/editClient/{{$client['id']}}">

            {{csrf_field()}}

            {{method_field('PUT')}}

            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                    <label>Username</label>
                <input type="text" name="username" class="form-control" value="{{$client['username']}}">
                  </div>
              </div>

              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control"  value="{{$client['email']}}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Nom</label>
                <input type="text" name="nom" class="form-control" value="{{$client['nom']}}">
                </div>
              </div>
              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>Prenom</label>
                <input type="text" name="prenom" class="form-control" value="{{$client['prenom']}}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Address</label>
                <input type="text" name="adresse" class="form-control" placeholder="Home Address" value="{{$client['adresse']}}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label>Wilaya</label>

                  <select class="form-control" name="wilaya" id="wilaya">
                    <option value="{{$client['code_wilaya']}}">{{$wilaya_nom}}</option>
                    @foreach (App\Wilaya::all() as $wilaya)
                            <option value="{{$wilaya->id}}"> {{$wilaya->nom}} </option>
                    @endforeach
                </select>

                </div>
              </div>
              <div class="col-md-4 px-1">
                <div class="form-group">
                  <label>Commune</label>

                  <select class="form-control" name="commune" id="commune">
                    <option value="{{$client['code_commune']}}">{{$commune_nom}}</option>
                  </select>

                </div>
              </div>
              <div class="col-md-4 pl-1">
                <div class="form-group">
                  <label>Postal Code</label>
                <input type="number" class="form-control" value="{{$code_postal}}">
                </div>
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
    <div class="col-md-4">
      <div class="card card-user">
        <div class="image">
          <img src="../assets/img/bg5.jpg" alt="...">
        </div>
        <div class="card-body">
          <div class="author">
            <a href="#">
              <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
              <h5 class="title">{{$client['nom']}} {{$client['prenom']}}</h5>
            </a>
            <p class="description">
              {{$client['traducteur']}}
            </p>
          </div>

        </div>
        <hr>
        <div class="button-container">
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-facebook-f"></i>
          </button>
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-twitter"></i>
          </button>
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-google-plus-g"></i>
          </button>
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
