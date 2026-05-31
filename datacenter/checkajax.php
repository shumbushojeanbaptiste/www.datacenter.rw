<?php
if (isset($_GET['monthvalue'])) {

    $selectedYear = $_GET['monthvalue'];

    $currentMonth = date('m');
    $currentYear  = date('Y');

    echo '<option value=""></option>';

    // If selected year is current year → limit to current month
    $maxMonth = ($selectedYear == $currentYear) ? (int)$currentMonth : 12;

    for ($i = 1; $i <= $maxMonth; $i++) {

        $monthValue = str_pad($i, 2, "0", STR_PAD_LEFT);
        $monthName  = date('F', mktime(0, 0, 0, $i, 1));

        $selected = ($monthValue == $currentMonth && $selectedYear == $currentYear) ? "selected" : "";

        echo "<option value='$monthValue' $selected>$monthName</option>";
    }
}
?>