      
        
    <div class="row justify-content-center">
    <div class="col-12">
        <!-- Dashboard Header -->
        <div class="row align-items-center mb-4">
            <div class="col">
                <h3 style="cursor:pointer;" onclick="allInvopayment()">
                    <strong>Analytics</strong> & Monitoring Dashboard
                </h3>
            </div>
        </div>

       
    </div>
</div>

         


           
           
           
			  

            
        
             
            
           
            
           
<!-- SECOND ROW: Full Width Column Chart -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card">
             <div class="card-header">
                   <h5 class="card-title">Server Room Status Overview based on Risk Status such as HIGH,MEDIUM and LOW</h5>
                <h6 class="card-subtitle text-muted">
                    This column chart shows infrastructure risk overview per month.
                    It helps visualize risk assessment and mitigation strategies.
                </h6>
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
            </div>
            <div class="card-body">
                <div class="chart w-100">
                    <div id="apexcharts-column"></div>
                </div>
            </div>
        </div>
    </div>
</div>



 <!-- old moddle -->

<div class="row g-4 mb-4">

    <!-- LEFT COLUMN (8) -->
    <div class="col-12 col-md-5 d-flex">

         

        <!-- Invoices & Payments Card -->
        <div class="card shadow eq-card flex-fill w-100" id="monthlOverview">

            <div class="card-header">
                <strong class="card-title">LOW,MEDIUM,HIGH, and None</strong>

                <div class="float-end d-flex" >

                    <!-- YEAR SELECT -->
                    <select name="year_id" id="year_id"
                            class="form-control select2"
                            onchange="mylang12(this.value)">
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

                    <!-- MONTH SELECT -->
                    <select name="month_Id" id="month_Id"
                            class="form-control select2">
                        <option></option>
                        <?php
                        for($i=1; $i<=12; $i++){
                            $month_value = str_pad($i,2,'0', STR_PAD_LEFT);
                            $selected = (date('m') == $month_value) ? "selected" : "";
                            echo "<option value='$month_value' $selected>" . date('F', mktime(0,0,0,$i,1)) . "</option>";
                        }
                        ?>
                    </select>

                </div>
            </div>

            <!-- <div class="card-body"> -->
                <!-- <div id="montly_overview"></div> -->
            <!-- </div> -->

			 <!-- Monthly pie Card -->

               <div class="card flex-fill w-100">
            <div class="card-header">
                <div class="card-actions float-end">
                    <div class="dropdown position-relative">
                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                            <i class="align-middle" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Print</a>
                            <a class="dropdown-item" href="#">Download</a>
                        </div>
                    </div>
                </div>
                <h5 class="card-title mb-0">Monitoring Statistics</h5>
            </div>
            <div class="card-body d-flex">
                <div class="align-self-center w-100">
                    <div class="py-3">
                        <div class="chart chart-xs">
                            <canvas id="chartjs-dashboard-pie" ></canvas>
                        </div>
                    </div>
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <td><i class="fas fa-circle text-primary fa-fw"></i> LOW</td>
                                <td class="text-end"><span id="deposit_data"></span></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-warning fa-fw"></i> MEDIUM</td>
                                <td class="text-end"><span id="invoice_data"></span></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-circle text-danger fa-fw"></i> HIGH</td>
                                <td class="text-end"><span id="paid_data"></span></td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       
            
      

        <!-- </div> -->

        </div><!-- END card -->


		

    </div><!-- END col-md-8 -->


    <!-- RIGHT COLUMN (4) -->
    <div class="col-md-7">

        <div class="card shadow eq-card timeline">
            <div class="card-header">
                <strong class="card-title">Live Monitoring (Logs & Metrics)</strong>
            </div>
            <div class="card-body" data-simplebar style="height: 360px; overflow-y:auto;">
             
                <span id="live_logs"></span>
            </div>

            
        </div>

    </div><!-- END col-md-4 -->

</div><!-- END row -->






          
          </div> <!-- .container-fluid -->

          <?php $company=9; ?>

          
        
    

<script>
      function liveData(){

        $.get('live_logs.php', function (data) {
            $('#live_logs').html(data);
        });
        }
function mylang12(data12){

    const ajaxreq = new XMLHttpRequest();
   barRiskAssessment(data12);

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
       liveData();

       
		var year_id = $('#year_id').val();
        var company = <?php echo $company ?>;
		var montly =  $("#month_Id").val();
        barRiskAssessment(year_id); 
		 
		 pieData(year_id,montly,company);
		//barPayment(year_id);
        //allInvopayment();
        //barInvoice(year_id);
        



  $("#month_Id").change(function () {
    
        var year_id = $('#year_id').val();
        var company = <?php echo $company ?>;
		 //monthlyOverView(year_id,$(this).val(),company);
		 pieData(year_id,$(this).val(),company);
        
		
		 
    });

});
</script>
<script>


</script>

           <script src="../js2/app.js"></script>

	<script>
		
	</script>
	<script>

      

function pieData(year_id, month_id, company) {
  

    $.ajax({
        url: "../statistics/dashboardController.php",
        type: "POST",
        data: {
            month_Id: month_id,
            year_id: year_id,
            company: company,
            action: "pie-chart"
        },
        dataType: "json",
        success: function (data) {

            // ✅ Build the pie chart using returned data
            updatePieChart(
                data.low,
                data.medium,
                data.high
            );
            
			$("#deposit_data").html(data.low).fadeIn();
			$("#invoice_data").html(data.medium).fadeIn();
			$("#paid_data").html(data.high).fadeIn();

        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", error);
        }
    });

}

var pieChart = null;

function updatePieChart(deposit, invoice, balance, payment) {

    if (pieChart !== null) {
        pieChart.destroy(); // ✅ Avoid duplicate charts
    }

    var ctx = document.getElementById("chartjs-dashboard-pie").getContext("2d");

    pieChart = new Chart(ctx, {
        type: "pie",
        data: {
            labels: ["LOW", "MEDIUM", "HIGH", "Payment"],
            datasets: [{
                data: [deposit, invoice, balance, payment],
                backgroundColor: [
                    window.theme.primary,
                    window.theme.warning,
                    window.theme.danger,
                    "#E8EAED"
                ],
                borderWidth: 5,
                borderColor: window.theme.white
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: { display: false },
            cutoutPercentage: 70
        }
    });
}

function barPayment(year) {
	 $("#year_selected").html(year);
	
    $.ajax({
        url: "../statistics/dashboardController.php",
        type: "POST",
        data: {
            year: year,
            action: "bar-chart-pay"
        },
        dataType: "json",
        success: function (data) {
			
            updateBarChart(data.monthly_payments);
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", error);
        }
    });
}


let barChartInstance = null;

function updateBarChart(monthlyPayments) {
    const ctx = document.getElementById("chartjs-dashboard-bar").getContext("2d");

    // Destroy existing chart if it exists
    if (barChartInstance) {
        barChartInstance.destroy();
    }

    barChartInstance = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: " Cummulative Payments",
                backgroundColor: window.theme.primary,
                borderColor: window.theme.primary,
                hoverBackgroundColor: window.theme.primary,
                hoverBorderColor: window.theme.primary,
                data: monthlyPayments,
                barPercentage: 0.75,
                categoryPercentage: 0.5
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        // Automatically adjust step size
                        callback: function(value) {
                            // Format large numbers with commas
                            return value.toLocaleString();
                        }
                    }
                },
                x: {
                    grid: { color: "transparent" }
                }
            }
        }
    });
}

function barInvoice(year) {
    $.ajax({
        url: "../statistics/dashboardController.php",
        type: "POST",
        data: {
            year: year,
            action: "bar-chart-invo"
        },
        dataType: "json",
        success: function (data) {
            updateInvoiveBarChart(data.monthly_invoice);
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", error);
        }
    });
}

let barInvoChartInstance = null;

function updateInvoiveBarChart(monthlyPayments) {

    var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");

    var gradientLight = ctx.createLinearGradient(0, 0, 0, 225);
    gradientLight.addColorStop(0, "rgba(215, 227, 244, 1)");
    gradientLight.addColorStop(1, "rgba(215, 227, 244, 0)");

    var gradientDark = ctx.createLinearGradient(0, 0, 0, 225);
    gradientDark.addColorStop(0, "rgba(51, 66, 84, 1)");
    gradientDark.addColorStop(1, "rgba(51, 66, 84, 0)");

    // Destroy existing chart
    if (barInvoChartInstance) {
        barInvoChartInstance.destroy();
    }

    barInvoChartInstance = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: " Cummulative Invoice",
                fill: true,
                backgroundColor: window.theme.id === "light" ? gradientLight : gradientDark,
                borderColor: window.theme.primary,
                data: monthlyPayments 
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                filler: { propagate: false },
                legend: { display: false }
            },
            scales: {
                x: {
                    grid: { display: false }
                },
                y: {
                    ticks: { stepSize: 1000000 },
                    grid: { display: false }
                }
            }
        }
    });
}


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
	
	
	
	
	

