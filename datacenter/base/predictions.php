
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
             <label for="multi-select2">Date</label>
        <input type="date" class="form-control"
       name="date_to" id="due_date" required value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>">
        </div> <!-- form-group -->
        <div class="col-md-1">
        </div>
        <div class=" col-md-4">
          <label for="multi-select2"> Hour</label>
        <select name="hour" id="hour" class="form-control select2 form-select-sm bg-light border-0" required>
  <option value="00">00:00</option>
  <option value="01">01:00</option>
  <option value="02">02:00</option>
  <option value="03">03:00</option>
  <option value="04">04:00</option>
  <option value="05">05:00</option>
  <option value="06">06:00</option>
  <option value="07">07:00</option>
  <option value="08">08:00</option>
  <option value="09">09:00</option>
  <option value="10">10:00</option>
  <option value="11">11:00</option>
  <option value="12">12:00</option>
  <option value="13">13:00</option>
  <option value="14">14:00</option>
  <option value="15">15:00</option>
  <option value="16">16:00</option>
  <option value="17">17:00</option>
  <option value="18">18:00</option>
  <option value="19">19:00</option>
  <option value="20">20:00</option>
  <option value="21">21:00</option>
  <option value="22">22:00</option>
  <option value="23">23:00</option>
</select>
        </div> <!-- form-group -->
        
        
        <div class=" col-md-1"></div>
          <div class=" col-md-1"> <br>
             <button type="button" name="show_general"  id="show_general" class="btn btn-sm btn-primary"><span id="spinner">Go</span></button>
             </div>
      </div> <!-- form-row -->
      <div class=card mt-4 mb-4">
          <div class="card-body">
              <h5 class="card-title">Predicted Values</h5>
              <p class="card-text">Monitor predicted values of temperature, humidity, and risk status</p>
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
       var due_date = $('#due_date').val();
       var hour = $('#hour').val();
        $.get('predictions_logs_report.php', { due_date: due_date, hour: hour }, function (data) {
            $('#display_specs').html(data);
            $("#spinner").html('Go');
        });
        }
    $(document).ready(function () {
        $("#show_general").click(function () {
            var due_date = $('#due_date').val();
            var hour = $('#hour').val();
            $("#spinner").html('<div id="loader"><img src="../images/ajax_loader.gif" alt="loading...." width="30" height="30" /></div>');
                

			       liveData();
            // use fade out 
        });

    });
</script>


