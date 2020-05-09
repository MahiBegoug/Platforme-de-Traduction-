

@extends('layouts.traducteur')


@section('title','Proposition de Devis')



@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                        <h2>Propositions Devis</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                          <thead class=" text-primary">

                            <th class="text-center">
                              Id
                            </th>
                            <th class="text-center">
                              demande devis
                            </th>
                            <th class="text-center">
                              Caractéristiques du Document
                            </th>
                            <th class="text-center">
                                télécharger le Document
                              </th>
                            <th class="text-center">
                              Prix (DZ)
                            </th>


                          </thead>
                          <tbody>

                   @foreach ($propositiondevis as $propositiondevi)
                   <tr>
                    <td class="text-center">
                            {{$propositiondevi->id}}
                    </td>
                    <td class="text-center">
                        {{App\DemandeDevis::where('id',$propositiondevi->demande_devis_id)->get()[0]['id']}}
                    </td>
                    <td class="text-center">
                        {{App\DemandeDevis::where('id',$propositiondevi->demande_devis_id)->get()[0]['description']}}
                    </td>


                    <td class="text-center">
                        @if ($propositiondevi->file_url)
                             <a href="/download/{{$propositiondevi->demande_devis_id}}/{{$propositiondevi->user_id}}" class="btn btn-large">{{$propositiondevi->file_url}}&nbsp;&nbsp;<i class="now-ui-icons arrows-1_cloud-download-93"></i></a>

                        @endif
                    </td>

                    <td class="text-center">
                    <form action="/proposedevis" method="POST">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}


                        <input type="number"  value ="10000" name="prix" id="prix">
                        <input type="text" name="service" value="{{App\DemandeDevis::where('id',$propositiondevi->demande_devis_id)->get()[0]['id']}}" id="service" style="display: none;" />

                            <br><br>
                       <button type="submit" class="text-center btn btn-primary">Valider</button>

                     </form>
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
</div>



@endsection


@section('scripts')

<script>




</script>


@endsection
