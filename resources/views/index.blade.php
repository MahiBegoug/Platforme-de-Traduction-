<!DOCTYPE html>
<html>
<head>
    <title>Ajax dynamic dependent wilaya commune city dropdown using jquery ajax in Laravel 5.6</title>
    <link rel="stylesheet" href="http://www.codermen.com/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Ajax dynamic dependent wilaya commune city dropdown using jquery ajax in Laravel 5.6</div>
      <div class="panel-body">
            <div class="form-group">
                <select id="wilaya" name="c_id" class="form-control" style="width:350px" >
                <option value="" selected disabled>Select Wilaya</option>
                  @foreach($wilayas as $wilaya)
                  <option value="{{$wilaya->id}}"> {{$wilaya->nom}}</option>
                  @endforeach

                  </select>

            </div>
            <div class="form-group">
                <label for="title">Commune</label>
                <select name="commune" id="commune" class="form-control" style="width:350px">
                </select>
            </div>

      </div>
    </div>
</div>
<script type="text/javascript">
    $('#wilaya').change(function(){
    var wilayaID = $(this).val();
    if(wilayaID){
        $.ajax({
           type:"GET",
           url:"{{url('get-wilaya-list')}}?wilaya_id="+wilayaID,
           success:function(res){
            if(res){
                $("#commune").empty();
                $("#commune").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#commune").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#commune").empty();
            }
           }
        });
    }else{
        $("#commune").empty();
    }
   });
</script>
</body>
</html
