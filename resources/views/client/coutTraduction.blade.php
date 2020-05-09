@extends('layouts.master')



@section('title','Details')



@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                        <h2>Cout De Traduction ....</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                          <thead class=" text-primary">

                            <th class="text-center">
                                Nom
                            </th>

                            <th class="text-center">
                                Prénom
                            </th>

                            <th class="text-center">
                                Phone
                            </th>

                            <th class="text-center">
                                Cout(DZ)
                            </th>

                            <th class="text-center">
                              Documents Traduit
                            </th>
                            <th class="text-center">

                            </th>

                            <th class="text-center">
                               Signaler
                            </th>
                          </thead>
                          <tbody>


                            @foreach ($propositions as $proposition)
                            <tr>

                                <td class="text-center">
                                    {{App\User::where('id',$proposition->user_id)->get()[0]['nom']}}
                                </td>

                                <td class="text-center">
                                    {{App\User::where('id',$proposition->user_id)->get()[0]['prenom']}}
                                </td>

                                <td class="text-center">
                                    {{App\User::where('id',$proposition->user_id)->get()[0]['phone']}}
                                </td>

                                <td class="text-center">
                                    @if($proposition->cout_traduction)
                                      {{$proposition->cout_traduction}}
                                    @else
                                        Pas Encore
                                    @endif
                               </td>

                               <td class="text-center">
                                  @if ($proposition->file_traduction)
                                    <a href="/downloadTranslated/{{$proposition->demande_devis_id}}/{{$proposition->user_id}}" class="btn btn-large ">{{$proposition->file_traduction}}&nbsp;&nbsp;<i class="now-ui-icons arrows-1_cloud-download-93"></i></a>
                                  @else
                                     Pas Encore
                                  @endif
                               </td>

                        <td class="text-center">

                        <form class="md-form" method="POST" action="/signaler/{{$proposition->user_id}}">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}

                            <td>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-exclamation-triangle"></i></button>
                            </td>
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
