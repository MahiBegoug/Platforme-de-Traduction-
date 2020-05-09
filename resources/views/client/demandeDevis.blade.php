@extends('layouts.master')

@section('title','Demande de Devis')

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

            @foreach ($demandedevis as $demandedevi)
            <tr>
                <td>
                  {{$demandedevi->id}}
                  </td>
                <td>
                  {{$demandedevi->langue_source}}
                </td>
                <td>
                  {{$demandedevi->langue_destination}}

                </td>
                <td>
                    {{$demandedevi->description}}
                </td>
                <td>
                   {{$demandedevi->type_traduction}}
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



@section('scripts')


@endsection
