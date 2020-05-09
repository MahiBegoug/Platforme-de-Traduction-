@extends('admin.dashboard')


@section('content')

<br><br>
<div class="row">
    <div class="col-6">
        <h1>Gestion des Documents</h1>
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
            <th>Document</th>
            <th>Date Soumission</th>
            <th>type</th>
            <th>Traducteur</th>
            <th>Client</th>
            <th>Fichier-Traduit</th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($propositions as $proposition)
        <tr>
            <td>
                @if($proposition->file_url)
                    <a href="/download/{{$proposition->demande_devis_id}}/{{$proposition->user_id}}" class="btn btn-large">{{$proposition->file_url}}&nbsp;&nbsp;<i class="now-ui-icons arrows-1_cloud-download-93"></i></a>
                @endif
            </td>
            <td>{{$proposition->created_at}}</td>
            <td>{{App\DemandeDevis::where('id',$proposition->demande_devis_id)->get()[0]['type_traduction']}}</td>
            <td><a href="/moreInformationTraducteur/{{App\User::where('id',$proposition->user_id)->get()[0]['id']}}">{{App\User::where('id',$proposition->user_id)->get()[0]['nom']}}</a></td>
            <td>{{App\User::where('id',App\DemandeDevis::where('id',$proposition->demande_devis_id)->get()[0]['user_id'])->get()[0]['nom']}}</td>
            <td>
                @if($proposition->file_traduction)
                <a href="/downloadTranslated/{{$proposition->demande_devis_id}}/{{$proposition->user_id}}" class="btn btn-large">{{$proposition->file_traduction}}&nbsp;&nbsp;<i class="now-ui-icons arrows-1_cloud-download-93"></i></a>
            @endif


            </td>

            <td class="td-actions text-right">
                <a class="btn btn-primary btn-fab btn-icon btn-round">
                <form action="/deleteDocuments/{{$proposition->id}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button class="btn btn-primary btn-fab btn-icon btn-round"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                </form>
                </a>
            </td>
        </tr>
        @endforeach



    </tbody>
    <tfoot>
        <tr>
            <th>Document</th>
            <th>Date Soumission</th>
            <th>Type</th>
            <th>Traducteur</th>
            <th>Client</th>
            <th>Fichier-Traduit</th>
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
