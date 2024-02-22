<?php
$conn = mysqli_connect("localhost", "root", "", "nourishu_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$output = '';
if (isset($_POST['query'])) {
    $search = mysqli_real_escape_string($conn, $_POST['query']);
    $query = "SELECT * FROM foodlist_tbl WHERE FOOD_NAME LIKE '%".$search."%'";

    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0) {
        $output = '<ul class="list-unstyled">';
        while($row = mysqli_fetch_array($result)) {
            $output .= '<li>'.$row["FOOD_NAME"].'</li>';
        }
        $output .= '</ul>';
    } else {
        $output = '<li>No matches found</li>';
    }
    echo $output;
}
?>
