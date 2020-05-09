@extends('admin.dashboard')


@section('content')

<br><br>
<div class="row">
    <div class="col-6">
        <h1>Gestion des Clients</h1>
    </div>

    <div class="col-6">
        <div class="input-group no-border">
            <input type="text" id="myInput" value="" class="form-control" placeholder="Search...">
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="now-ui-icons ui-1_zoom-bold"></i>
              </div>
            </div>
          </div>
    </div>
</div>
<table id="example" class="table table-bordered table-striped" data-show-header="true" data-pagination="true">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>email</th>
            <th>phone</th>
            <th>Fax</th>
            <th>Adresse</th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>


        @foreach ($clients as $client)

        <tr>
            <td>{{$client['nom']}}</td>
            <td>{{$client['prenom']}}</td>
            <td>{{$client['email']}}</td>
            <td>{{$client['phone']}}</td>
            <td>{{$client['fax']}}</td>
            <td>{{$client['adresse']}}</td>
            <td class="td-actions text-right">

                 <a href="/moreInformationClient/{{$client['id']}}" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                    <i class="now-ui-icons users_single-02"></i>
                </a>

                <a  rel="tooltip" class="btn btn-success btn-sm btn-icon">
                    <form action="/bloqueClient/{{$client->id}}" method="post">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <button class="btn  btn-sm btn-icon"><i class="now-ui-icons ui-1_lock-circle-open"></i></button>
                    </form>
                </a>

                <a rel="tooltip" class="btn btn-success btn-sm btn-icon">
                    <form action="/deleteClient/{{$client->id}}" method="post">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger btn-sm btn-icon"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                    </form>
                </a>
            </td>
        </tr>

        @endforeach


    </tbody>
    <tfoot>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>email</th>
            <th>phone</th>
            <th>Fax</th>
            <th>Adresse</th>
        </tr>
    </tfoot>
</table>

@endsection


@section('scripts')

<script>
$(document).ready(function() {
    $('#example').DataTable();
});

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#example tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

@endsection
