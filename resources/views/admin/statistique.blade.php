@extends('admin.dashboard')


@section('content')


<div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h4 class="card-title">Devis-Traduction</h4>
        </div>
        <div class="card-body">
          <div class="chart-area">
            {!! $compareDevisTraduction->render() !!}
        </div>
        </div>

      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h4 class="card-title">Translation</h4>
        </div>
        <div class="card-body">
          <div class="chart-area">
            {!! $translationbytranslater->render() !!}
        </div>
        </div>

      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h4 class="card-title">Demande devi</h4>
        </div>
        <div class="card-body">
          <div class="chart-area">
            {!! $translationForClient->render() !!}

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
