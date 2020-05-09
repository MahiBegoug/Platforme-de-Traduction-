

@extends('layouts.traducteur')


@section('title','Les Offres')



@section('content')





@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Les Demandes De Devis</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Id
                </th>
                <th>
                  Langue Source
                  </th>
                <th>
                  Langue Destination
                </th>
                <th>
                  Description
                </th>
                <th>
                  Type
                </th>
              </thead>
              <tbody>

            @foreach ($propositiondevis as $propositiondevi)
            <tr>
                <td>
                    {{App\DemandeDevis::where('id',$propositiondevi->demande_devis_id)->get()[0]['id']}}
                </td>
                <td>
                  {{App\DemandeDevis::where('id',$propositiondevi->demande_devis_id)->get()[0]['langue_source']}}
                </td>
                <td>
                  {{App\DemandeDevis::where('id',$propositiondevi->demande_devis_id)->get()[0]['langue_destination']}}
                </td>
                <td>
                  {{App\DemandeDevis::where('id',$propositiondevi->demande_devis_id)->get()[0]['description']}}

                </td>
                <td>
                    {{App\DemandeDevis::where('id',$propositiondevi->demande_devis_id)->get()[0]['type_traduction']}}
                </td>
              </tr>
            @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection

@endsection

@section('scripts')

@endsection
