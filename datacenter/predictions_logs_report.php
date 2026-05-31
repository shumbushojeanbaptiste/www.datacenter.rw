<?php 

$due_date = isset($_GET['due_date']) ? $_GET['due_date'] : date('Y-m-d');
$hour = isset($_GET['hour']) ? $_GET['hour'] : date('H');




?>




    <?php if(!empty($due_date)): 
        $month = date('m', strtotime($due_date));
        // want month like 1 instead of 01
        $month = ltrim($month, '0');

        // month like February
        $monthName = date('F', strtotime($due_date));
        $dayofweek = date('N', strtotime($due_date));
        $dayName = date('l', strtotime($due_date));
        ?>
        <div class="table-responsive mb-3">
            <table class="table table-striped table-hover table-borderless" style="font-size:12px;" id="live_logs">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>month</th>
                        <th>day</th>
                        
                        <th>time</th>
                        <th>temperature</th>
                        <th>humidity</th>
                        <th>risk Level</th>
                    </tr>
                    <tr>
                       <td colspan="6"></td>
                        
                        <th><span class="badge badge-primary" style="cursor:pointer;" title="Export to CSV" onclick="exportTableToCSV('live_logs', 'live_logs_data_<?= $due_date ?>_<?php echo $_REQUEST['hour'] ?>')">Export csv</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; 
                         
                    // loop through minutes of the hour
                    for ($m = 0; $m < 60; $m++) {
                    $hour = str_pad($hour, 2, '0', STR_PAD_LEFT);
                       
                      // now run endpoint for each minute POST http://127.0.0.1:8000/predict
                      // with body like { "month": 12,"dayofweek": 2,"hour": 23,"minute": 5}
                        $response = file_get_contents('http://127.0.0.1:8000/predict', false, stream_context_create([
                            'http' => [
                                'method' => 'POST',
                                'header' => "Content-Type: application/json\r\n",
                                'content' => json_encode([
                                    'month' => $month,
                                    'dayofweek' => $dayofweek,
                                    'hour' => $hour,
                                    'minute' => $m
                                ])
                            ]
                        ]));
                        
                        $data = json_decode($response, true);
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            
                            <td><?php echo $monthName; ?></td>
                            <td><b><?php echo $dayName; ?></b></td>
                            
                            <td><?php echo $due_date." ".$hour . ':' . str_pad($m, 2, '0', STR_PAD_LEFT); ?></td>
                            <td><?php echo isset($data['temperature']) ? $data['temperature'] : ''; ?></td>
                            <td><?php echo isset($data['humidity']) ? $data['humidity'] : ''; ?></td>
                            <td><?php echo isset($data['risk']) ? $data['risk'] : ''; ?>
                            <td class="text-end"></td>




                           
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p class="text-muted">No data found.</p>
    <?php endif; ?>


    <script>
        function exportTableToExcel(tableID, filename = ''){
            var downloadLink;
            var dataType = 'application/vnd.ms-excel';
            var tableSelect = document.getElementById(tableID);
            var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
            
            // Specify file name
            filename = filename?filename+'.xls':'excel_data.xls';
            
            // Create download link element
            downloadLink = document.createElement("a");
            
            document.body.appendChild(downloadLink);
            
            if(navigator.msSaveOrOpenBlob){
                var blob = new Blob(['\ufeff', tableHTML], {
                    type: dataType
                });
                navigator.msSaveOrOpenBlob( blob, filename);
            }else{
                // Create a link to the file
                downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
            
                // Setting the file name
                downloadLink.download = filename;
                
                //triggering the function
                downloadLink.click();
            }
        }
        function exportTableToCSV(tableID, filename = '') {
            var csv = [];
            var rows = document.querySelectorAll("#" + tableID + " tr");
            
            for (var i = 0; i < rows.length; i++) {
                var row = [], cols = rows[i].querySelectorAll("td, th");
                
                for (var j = 0; j < cols.length; j++) 
                    row.push(cols[j].innerText);
                
                csv.push(row.join(","));        
            }

            // Download CSV
            var csvFile = new Blob([csv.join("\n")], {type: "text/csv"});
            var downloadLink = document.createElement("a");
            downloadLink.download = filename ? filename + ".csv" : "csv_data.csv";
            downloadLink.href = window.URL.createObjectURL(csvFile);
            downloadLink.style.display = "none";
            document.body.appendChild(downloadLink);
            downloadLink.click();
        }
    </script>


