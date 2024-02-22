


<?php
if (isset($_POST['submit'])) {
    $frequency = $_POST['frequency'];
    $today = date('Y-m-d');
    $startDate = $today;
    $endDate = $today;

    switch ($frequency) {
        case 'daily':
            // No change needed, start and end date are today
            break;
        case 'weekly':
            $startDate = date('Y-m-d', strtotime('-6 days', strtotime($today)));
            break;
        case 'bi-monthly':
            $startDate = date('Y-m-d', strtotime('-13 days', strtotime($today)));
            break;
        case 'monthly':
            $startDate = date('Y-m-d', strtotime('-29 days', strtotime($today)));
            break;
    }

    $sumQuery = "SELECT ROUND(SUM(LENERGY), 2) AS total_energy,
                        ROUND(SUM(LPROTEIN),2) AS total_protein,
                        ROUND(SUM(LCARBS),2) AS total_carbs,
                        ROUND(SUM(LFATS),2) AS total_fats,
                        ROUND(SUM(LFIBER),2) AS total_fiber,
                        ROUND(SUM(LVITC),2) AS total_vitc,
                        ROUND(SUM(LVITB12),2) AS total_vitb12,
                        ROUND(SUM(LCALCIUM),2) AS total_calcium,
                        ROUND(SUM(LIRON),2) AS total_iron,
                        ROUND(SUM(LZINC),2) AS total_zinc
                 FROM logs_tbl WHERE DATE(LDATE) BETWEEN '$startDate' AND '$endDate'";
    // Make sure you have a DATE column in your logs_tbl that stores the date of the log entry
}

?>
