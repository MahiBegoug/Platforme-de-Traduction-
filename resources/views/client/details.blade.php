@extends('layouts.master')



@section('title','Details')



@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                        <h2>Details de ....</h2>
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
                              Devis(DZ)
                            </th>

                            <th class="text-center">
                                Docs à traduire
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
                                    {{$proposition->prix}}
                                </td>



                                <td class="text-center">
                                    <form class="md-form" method="POST" action="/addFiletoTranslate"  enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <input name="file"  id="file" accept="application/pdf" type="file" required>
                                        <input type="text" name="serviceReceiver" value="{{$proposition->user_id}}" style="display:none;">
                                        <input type="text" name="serviceDemande" value="{{$proposition->demande_devis_id}}" style="display:none;" >
                                        <td>
                                            <button type="submit" class="btn btn-primary"><i class="now-ui-icons ui-1_check"></i></button>
                                        </td>
                                    </form>
                                </td>

                                <!--<td>
                                    <form action="/deleteDemande/{{--$proposition->demande_devis_id--}}/{{--$proposition->user_id}}" method="post">
                                        {{-- csrf_field() }}
                                        {{method_field('DELETE') --}}
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>-->

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
