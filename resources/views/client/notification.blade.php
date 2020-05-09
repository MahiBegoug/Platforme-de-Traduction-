

@extends('layouts.master')

@section('title','Notifications')

@section('content')








<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title text-center">Demande</h4>
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
                    Type
                </th>
                <th class="text-center">
                    Details
                </th>

              </thead>
              <tbody>


            @foreach ($demandedevis as $item)
                <tr>



                    <td class="text-center">
                      {{$item->id}}
                    </td>
                    <td class="text-center">
                        {{$item->langue_source}}
                    </td>
                    <td class="text-center">
                         {{$item->langue_destination}}
                    </td>
                    <td class="text-center">
                        {{$item->type_traduction}}
                    </td>



                    <td class="text-center">
                        <a href="/details/{{$item->id}}" class="btn btn-primary"><i class="now-ui-icons files_paper"></i></a>
                    </td>

                    <td class="text-center">
                        <a href="/coutTraduction/{{$item->id}}" class="btn btn-grey"><i class="now-ui-icons business_money-coins"></i></a>
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

<script>




</script>

@endsection
