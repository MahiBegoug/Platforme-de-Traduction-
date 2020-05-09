
@extends('layouts.traducteur');


@section('title',"Cout d'une Traduction")


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
                                Cout du Traduction (DZ)
                            </th>
                            <th class="text-center">
                                Document Traduit
                            </th>
                            <th class="text-center">
                                Actions
                            </th>


                          </thead>
                          <tbody>



   @foreach ($propositions as $proposition)
   <tr>
    <form action="/setcout" method="POST" enctype="multipart/form-data">

        {{csrf_field()}}

        {{method_field('PUT')}}

        <td class="text-center">
            {{$proposition->id}}
        </td>

       <td class="text-center">
       <input type="number"  value ="1000" name="cout" id="cout">
       </td>

       <td class="text-center">
          <input name="file"  id="file" accept="application/pdf" type="file" required>
       </td>

       <input type="text" style="display:none;" name="service" value="{{$proposition->id}}">


       <td class="text-center">
          <button type="submit" class="btn primary-btn">Envoyer</button>
       </td>

    </form>
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

@endsection
