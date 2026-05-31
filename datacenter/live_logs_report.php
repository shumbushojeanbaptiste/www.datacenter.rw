<?php 
require_once("../include/initialize.php");


    $depositsStmt = $db->prepare("
        SELECT *
        FROM sensordata
        WHERE date BETWEEN :date_from AND :date_to
        ORDER BY date DESC
    ");
    $depositsStmt->execute([
        ':date_from' => $_REQUEST['date_from'],
        ':date_to' => $_REQUEST['date_to']
    ]);
    $lastDeposits = $depositsStmt->fetchAll(PDO::FETCH_ASSOC);


?>




    <?php if(!empty($lastDeposits)): ?>
        <div class="table-responsive mb-3">
            <table class="table table-striped table-hover table-borderless" style="font-size:12px;" id="live_logs">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>due</th>
                        <th> Temp</th>
                        <th>Hum</th>
                        <th>Water</th>
                        <th>Risk</th>
                    </tr>
                    <tr>
                       <td colspan="5"></td>
                        
                        <th><span class="badge badge-primary" style="cursor:pointer;" title="Export to CSV" onclick="exportTableToCSV('live_logs', 'live_logs_data_<?= $_REQUEST['date_from'] ?>_<?php echo $_REQUEST['date_to'] ?>')">Export csv</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; 
                         
                    
                    foreach($lastDeposits as $dep): 

                        $risk =$dep['risklevel'];
                        if ( $risk == "LOW"){
                            $textRisk= "text-success";

                        }
                        else if( $risk == "MEDIUM"){
                             $textRisk= "text-warning";

                        }
                        else{
                             $textRisk= "text-danger";

                        }

                        if ($dep['waterpresence'] == 1){
                            $water = "Yes";
                        }
                        else {
                            $water = "No";
                        }
                      
                        
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            
                            <td><?php echo htmlspecialchars(date("d/m/Y H:i:s", strtotime($dep['date']))); ?></td>
                             <td><b><?php echo number_format($dep['temperature'],2); ?></b></td>
                            <td><?php echo number_format($dep['humidity'],2); ?></td>
                            <td class="text-end"><?php echo htmlspecialchars($water); ?></td>


<td>

<span class="<?=  $textRisk ?>" title="Approved deposit"><?php echo htmlspecialchars($dep['risklevel']); ?></span>

</span>
</td>

                           
                        </tr>
                    <?php endforeach; ?>
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


