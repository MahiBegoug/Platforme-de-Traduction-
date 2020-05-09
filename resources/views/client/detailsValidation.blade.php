

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
                              Id
                            </th>
                            <th class="text-center">
                              Langue Source
                            </th>
                            <th class="text-center">
                              Langue Destination
                            </th>
                            <th class="text-center">
                              Prix
                            </th>
                            <th class="text-center">
                              Traducteur
                            </th>

                            <th class="text-center">
                              File
                            </th>

                            <th class="text-center">
                              Note
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
                                  $123
                              </td>

                              <td class="text-center">
                                Mohammed Ould Qara
                              </td>

                              <td class="text-center">
                                <a href="">Extrait_de_naissance.pdf</a>
                              </td>

                              <td class="text-center">
                                <select name="" id="">
                                    <option value="100">A</option>
                                    <option value="75">B</option>
                                    <option value="">C</option>
                                    <option value="">D</option>
                                </select>
                              </td>


                            </tr>


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
