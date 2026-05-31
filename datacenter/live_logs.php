<?php 
require_once("../include/initialize.php");


    $depositsStmt = $db->prepare("
        SELECT *
        FROM sensordata
        ORDER BY date DESC
        LIMIT 100
    ");
    $depositsStmt->execute();
    $lastDeposits = $depositsStmt->fetchAll(PDO::FETCH_ASSOC);


?>




    <?php if(!empty($lastDeposits)): ?>
        <div class="table-responsive mb-3">
            <table class="table table-striped table-hover table-borderless" style="font-size:12px;">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>due</th>
                        <th> Temp</th>
                        <th>Hum</th>
                        <th>Water</th>
                        <th>Risk</th>
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


