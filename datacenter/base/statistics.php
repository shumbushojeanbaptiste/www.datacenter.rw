
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
  <h2 class="h5 page-title"><?php echo $title; ?> Report</h2>
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
          
        </div> <!-- form-group -->
        <div class="col-md-1">
        </div>
        <div class=" col-md-4">
          <label for="multi-select2">Year</label>
           <select name="year_id" id="invo_year_id" class="form-control select2 form-select-sm bg-light border-0" onchange="mylang12(this.value)">
                                <option></option>
                                <?php
                                $year = 2020;
                                $current_year = date('Y');
                                while($year <= $current_year){
                                    echo "<option value='$year'".($year == $current_year ? " selected" : "").">$year</option>";
                                    $year++;
                                }
                                ?>
                            </select>
        </div> <!-- form-group -->
        
        
        <div class=" col-md-1"></div>
          <div class=" col-md-1"> <br>
             <button type="button" name="show_statistics"  id="show_statistics" class="btn btn-sm btn-primary"> <span id="spinner">Go</span></button>
             </div>
      </div> <!-- form-row -->
      
  <div name='display_specs' id='apexcharts-column' class="mt-4"></div>
    </div> <!-- /.card-body -->
  </div> <!-- /.card -->
</div> <!-- /.col -->

        </div>
</div> <!-- end section -->


<script type="text/javascript">

    
    function mylang12(data12){

    const ajaxreq = new XMLHttpRequest();
    // barRiskAssessment(data12);

    ajaxreq.open('GET', 'checkajax.php?monthvalue=' + encodeURIComponent(data12), true);

    ajaxreq.onload = function () {
        if (ajaxreq.status === 200) {

            // remove alert in production
            console.log(ajaxreq.responseText);

            document.getElementById('month_Id').innerHTML = ajaxreq.responseText;

        } else {
            console.error("Request failed:", ajaxreq.status);
        }
    };

    ajaxreq.send();
}
    $(document).ready(function () {
        $("#show_statistics").click(function () {
           var year_id = $("#invo_year_id").val();
          //spi
              $("#spinner").html('<div id="loader"><img src="../images/ajax_loader.gif" alt="loading...." width="30" height="30" /></div>');
                

            barRiskAssessment(year_id)
                setTimeout(function() {
                    $("#spinner").html('Go');
                }, 1000);
        });

    });

    function barRiskAssessment(year) {
    $.ajax({
        url: "../statistics/dashboardController.php",
        type: "POST",
        data: {
            year: year,
            action: "bar-chart-barRiskAssessment"
        },
        dataType: "json",
        success: function (data) {
           

            updateInvPayBalanceBarChart(
                data.low,
                data.medium,
                data.high
            );

        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", error);
        }
    });
}

let barInvoPayBalanceChartInstance = null;

function updateInvPayBalanceBarChart(low, medium, high) {

    const el = document.querySelector("#apexcharts-column");
    if (!el) {
        console.error("Chart container not found");
        return;
    }

    // Destroy previous chart
    if (barInvoPayBalanceChartInstance) {
        barInvoPayBalanceChartInstance.destroy();
    }

    var options = {
        chart: {
            height: 350,
            type: "bar",
        },
        plotOptions: {
            bar: {
                horizontal: false,
                endingShape: "rounded",
                columnWidth: "55%",
            },
        },
        dataLabels: { enabled: false },
        stroke: {
            show: true,
            width: 2,
            colors: ["transparent"]
        },

        // ✅ DYNAMIC DATA
        series: [
            {
                name: "Low Risk",
                data: low
            },
            {
                name: "Medium Risk",
                data: medium
            },
            {
                name: "High Risk",
                data: high
            }
        ],

        // Month labels
        xaxis: {
            categories: [
                "Jan","Feb","Mar","Apr","May","Jun",
                "Jul","Aug","Sep","Oct","Nov","Dec"
            ],
        },

        yaxis: {
            title: { text: "Risk Assessment" }
        },

        fill: { opacity: 1 },

        tooltip: {
            y: {
                formatter: function(v) {
                    return "Total " + v + " Risk";
                }
            }
        }
    };

    // render new chart
    barInvoPayBalanceChartInstance = new ApexCharts(el, options);
    barInvoPayBalanceChartInstance.render();
}

    
</script>


