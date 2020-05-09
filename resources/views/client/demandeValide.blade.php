

@extends('layouts.master')

@section('title','Demande Validées')

@section('content')


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title text-center">Les Réponses Reçus</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th class="text-center">
                  Id
                </th>
                <th class="text-center">
                  Langue Source
                </th>
                <th class="text-center">
                  Langue Destination
                </th>
                <th class="text-center">
                  Assermenté
                </th>
                <th class="text-center">
                  Type
                </th>
                <th class="text-center">
                  Details
                </th>


              </thead>
              <tbody>


                <tr>
                  <td class="text-center">
                    1
                  </td>
                  <td class="text-center">
                    Turque
                  </td>
                  <td class="text-center">
                    chinios
                  </td>
                  <td class="text-center">
                    oui
                  </td>
                  <td class="text-center">
                    Site Web
                  </td>


                  <td class="text-center">
                  <a class="btn btn-primary" href="{{url('detailsValidation')}}"> <i class="now-ui-icons files_paper"></i></a>
                  </td>
                </tr>


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
