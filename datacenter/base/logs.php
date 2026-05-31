
<style>
    .modal { display:none; }
    .modal-title {color: #111;}
    td {
        font-size: 12px;
    }
    .title{
        margin:10px;
        font-size:15px;
    }
    .form-group{
        display: inline-flex;
    }
</style>
<div class="span9">
  <div class="content">

 <div class="module">
<div class="col">
  <h2 class="h5 page-title"><?= $title ?></h2>
</div>
<br>
</div><!--/.module-->
</div><!--/.content-->
</div><!--/.span9-->
<div class="row">
<div class="col-md-12"><br><br>
  <div class="card shadow mb-4">
    <div class="card-body">
        <br><br>
      <div class="form-row">
        
        <div class=" col-md-4">
          <label for="simple-select2">time From</label>
          <input type="datetime-local" class="form-control" name="date_from" id="date_from" aria-label="Recipient's username" aria-describedby="basic-addon2" value="<?php echo date('Y-m-d\TH:i'); ?>" required>
        </div> <!-- form-group -->
        <div class="col-md-1">
        </div>
        <div class=" col-md-4">
          <label for="multi-select2">time To</label>
          <input type="datetime-local" class="form-control" name="date_to" id="date_to" aria-label="Recipient's username" aria-describedby="basic-addon2" value="<?php echo date('Y-m-d\TH:i'); ?>" required>
        </div> <!-- form-group -->
        
        
        <div class=" col-md-1"></div>
          <div class=" col-md-1"> <br>
             <button type="button" name="show_general"  id="show_general" class="btn btn-sm btn-primary"><span id="spinner">Go</span></button>
             </div>
      </div> <!-- form-row -->
      <div class=card mt-4 mb-4">
          <div class="card-body">
              <h5 class="card-title">Live Logs</h5>
              <p class="card-text">Monitor real-time logs of temperature, humidity, water presence</p>
              <div class="text-center">
      <div name='display_specs' id='display_specs'>
        </div> <!-- /.card-body -->

    </div> <!-- /.card-body -->
  </div> <!-- /.card -->
</div> <!-- /.col -->

        </div>
</div> <!-- end section -->

 
<script type="text/javascript">
    function liveData(){
       var date_from = $('#date_from').val();
       var date_to = $('#date_to').val();
        $.get('live_logs_report.php', { date_from: date_from, date_to: date_to }, function (data) {
            $('#display_specs').html(data);
        });
        }
    $(document).ready(function () {
        $("#show_general").click(function () {
            var date_from = $('#date_from').val();
            var date_to = $('#date_to').val();
            $("#spinner").html('<div id="loader"><img src="../images/ajax_loader.gif" alt="loading...." width="30" height="30" /></div>');
                

			liveData();
             setTimeout(function() {
                    $("#spinner").html('Go');
                }, 1000);
        });

    });
</script>


