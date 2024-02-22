

<?php
session_start(); // Ensure session is started

// Database connection
$conn = mysqli_connect("localhost", "root", "", "nourishu_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



// Close database connection
// mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/a4e8164e66.js" crossorigin="anonymous"></script>
    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Website Icon -->
    <link rel="icon" href="images/AppLogo.png">
    <!-- Calendar and time CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">

    <title>NourishU</title>

</head>
<body>

    <!-- Header -->
    <header class="header">
        <div class="navigation">
            <ul>
                <li class="list">
                    <a href="main.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="list active">
                    <a>
                        <span class="icon"><ion-icon name="nutrition-outline"></ion-icon></span>
                        <span class="text">Food Log</span>
                    </a>
                </li>
                <li class="list">
                    <a href="foodlog1.php">
                        <span class="icon"><ion-icon name="add-outline"></ion-icon></span>
                        <span class="text">Add</span>
                    </a>
                </li>
                <li class="list">
                    <a href="logs.php">
                        <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
                        <span class="text">PDRI</span>
                    </a>
                </li>
                <li class="list">
                    <div class="more-btn">
                        <a class="modal-trigger" href="#modal-more">
                            <span class="icon"><ion-icon name="ellipsis-horizontal-outline"></ion-icon></span>
                            <span class="text">More</span>
                        </a>
                        <!-- <ul class="account-about-btn">
                            <li class="li-btn"><a href="#" class="btn-floating btn-large black"><i class="material-icons">g_translate</i></a></li>
                            <li class="li-btn"><a href="aboutus.html" class="btn-floating btn-large yellow darken-4"><i class="material-icons">info</i></a></li>
                            <li class="li-btn"><a href="account.html" class="btn-floating btn-large red"><i class="material-icons">account_circle</i></a></li>
                        </ul> -->
                    </div>

                </li>
                <div class="indicator"></div>
            </ul>
        </div>
    </header>

    <!-- Sidenav -->
    <!-- <ul id="modal-more" class="modal bottom-sheet modal-bottom">
    <li><div class="user-view modal-content">
      <div class="background">
        <img src="images/AppLogo.png">
      </div>
      <a href="#user"><img class="circle" src="images/AppLogo.png"></a>
    </div></li>
    <div class="divider light-green darken-4"></div>
    <li><a class="waves-effect light-green-text text-darken-4" href="#" style="font-size: 1.5rem; font-Weight: bolder;"><i class="material-icons light-green-text text-darken-4">g_translate</i>Translate</a></li>
    <li><a class="waves-effect light-green-text text-darken-4" href="aboutus.html" style="font-size: 1.5rem; font-Weight: bolder;"><i class="material-icons light-green-text text-darken-4">info</i>About App</a></li>
    <li><a class="waves-effect light-green-text text-darken-4" href="account.php" style="font-size: 1.5rem; font-Weight: bolder;"><i class="material-icons light-green-text text-darken-4">account_circle</i>Account</a></li>
  </ul> -->

  <!-- Modal Structure -->
  <div id="modal-more" class="modal bottom-sheet">
    <div class="modal-content">
      <ul class="bottom-modal">
        <li><a class="waves-effect light-green-text text-darken-4" href="#" style="font-size: 1.5rem; font-Weight: bolder;"><i class="material-icons light-green-text text-darken-4">g_translate</i>Translate</a></li>
        <li><a class="waves-effect light-green-text text-darken-4" href="pdrifull.html" style="font-size: 1.5rem; font-Weight: bolder;"><i class="material-icons light-green-text text-darken-4">book</i>PDRI</a></li>
        <li><a class="waves-effect light-green-text text-darken-4" href="aboutus.html" style="font-size: 1.5rem; font-Weight: bolder;"><i class="material-icons light-green-text text-darken-4">info</i>About App</a></li>
        <li><a class="waves-effect light-green-text text-darken-4" href="account.php" style="font-size: 1.5rem; font-Weight: bolder;"><i class="material-icons light-green-text text-darken-4">account_circle</i>Account</a></li>
      </ul>
    </div>
  </div>

    <!-- Food Intake -->
    <div class="container">
        <!-- Back button -->
        <br>
        <a href="main.php" class="back-btn"><i class="material-icons">arrow_back</i></a>
        <br>

    <!-- Calculated Nutrition -->
    <section class="calcnut">
        <div class="container">
          <h3 class="left-align nit-h3">Calculated Nutrition</h3>
          <div class="row">
              <form action=""   method="POST"  >
            <div class="input-field col s12">
              <?php
// Check if the form was submitted and store the selected frequency, or use an empty string if not set
              $selectedFrequency = isset($_POST['frequency']) ? $_POST['frequency'] : '';
              ?>

              <select id="frequency" name="frequency">
              <option value="" disabled <?php echo $selectedFrequency === '' ? 'selected' : ''; ?>>Select</option>
              <option value="daily" <?php echo $selectedFrequency === 'daily' ? 'selected' : ''; ?>>daily</option>
              <option value="weekly" <?php echo $selectedFrequency === 'weekly' ? 'selected' : ''; ?>>weekly</option>
              <option value="bi-monthly" <?php echo $selectedFrequency === 'bi-monthly' ? 'selected' : ''; ?>>bi-monthly</option>
              <option value="monthly" <?php echo $selectedFrequency === 'monthly' ? 'selected' : ''; ?>>monthly</option>
              </select>
              <label>Select Frequency</label>

              <!-- Hidden input to store the selected value -->
              <input type="hidden" name="lfrequency" id="hiddenUnit5">
            </div>
            <button type="submit" name="submit" class="add-btn">Calculate<i class="right material-icons">add</i></button>

          </form>
          </div>

          <!-- Tabs for Meal Time -->
          <div class="divider">

          </div>
          <div class="row">
             <div class="col s12">
               <ul class="tabs tab-demo z-depth-1">
                 <li class="tab"><a class="active" href="#overall">Overall</a></li>
                 <li class="tab"><a href="#breakfast">Breakfast</a></li>
                 <li class="tab"><a href="#amsnack">AM Snack</a></li>
                 <li class="tab"><a href="#lunch">Lunch</a></li>
                 <li class="tab"><a href="#pmsnack">PM Snack</a></li>
                 <li class="tab"><a href="#dinner">Dinner</a></li>
                 <li class="tab"><a href="#mdsnack">Midnight Snack</a></li>
               </ul>
             </div>
             <div id="overall" class="col s12" >
               <!-- Table -->
               <table class="highlight centered responsive-table">
                   <thead>
                       <tr>
                         <th>Energy</th>
                         <th>Protein</th>
                         <th>Carbohydrates</th>
                         <th>Fats</th>
                         <th>Fiber</th>
                         <th>Vitamin C</th>
                         <th>Vitamin B12</th>
                         <th>Calcium</th>
                         <th>Iron</th>
                         <th>Zinc</th>
                       </tr>
                   </thead>

                   <tbody>
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


                         // // Query to calculate the sum of multiple columns
                         // $sumQuery = "SELECT ROUND(SUM(LENERGY), 2) AS total_energy,
                         //                     ROUND(SUM(LPROTEIN),2) AS total_protein,
                         //                     ROUND(SUM(LCARBS),2) AS total_carbs,
                         //                     ROUND(SUM(LFATS),2) AS total_fats,
                         //                     ROUND(SUM(LFIBER),2) AS total_fiber,
                         //                     ROUND(SUM(LVITC),2) AS total_vitc,
                         //                     ROUND(SUM(LVITB12),2) AS total_vitb12,
                         //                     ROUND(SUM(LCALCIUM),2) AS total_calcium,
                         //                     ROUND(SUM(LIRON),2) AS total_iron,
                         //                     ROUND(SUM(LZINC),2) AS total_zinc
                         //              FROM logs_tbl";
                         $sumResult = mysqli_query($conn, $sumQuery);

                         if ($sumRow = mysqli_fetch_assoc($sumResult)) {
                             // Display the total sums in a table row
                        //     echo "<table>"; // Make sure you have a table element
                            echo "<tr>";
                             echo "<td>" . htmlspecialchars($sumRow['total_energy']) . "</td>";
                             echo "<td>" . htmlspecialchars($sumRow['total_protein']) . "</td>";
                             echo "<td>" . htmlspecialchars($sumRow['total_carbs']) . "</td>";
                             echo "<td>" . htmlspecialchars($sumRow['total_fats']) . "</td>";
                             echo "<td>" . htmlspecialchars($sumRow['total_fiber']) . "</td>";
                             echo "<td>" . htmlspecialchars($sumRow['total_vitc']) . "</td>";
                             echo "<td>" . htmlspecialchars($sumRow['total_vitb12']) . "</td>";
                             echo "<td>" . htmlspecialchars($sumRow['total_calcium']) . "</td>";
                             echo "<td>" . htmlspecialchars($sumRow['total_iron']) . "</td>";
                             echo "<td>" . htmlspecialchars($sumRow['total_zinc']) . "</td>";
                               echo "</tr>";
                            // echo "</table>"; // Close the table element
                         } else {
                             echo "<tr><td colspan='10'>No records found.</td></tr>";
                         }
                       }

                         ?>





                   </tbody>
               </table>
             </div>

             <div id="breakfast" class="col s12" >
               <!-- Table -->
               <table class="highlight centered responsive-table">
                 <thead>
                     <tr>
                       <th>Energy</th>
                       <th>Protein</th>
                       <th>Carbohydrates</th>
                       <th>Fats</th>
                       <th>Fiber</th>
                       <th>Vitamin C</th>
                       <th>Vitamin B12</th>
                       <th>Calcium</th>
                       <th>Iron</th>
                       <th>Zinc</th>
                     </tr>
                 </thead>

                   <tbody>
                     <?php
                     // Query to fetch breakfast data
                              $breakfastQuery = "SELECT ROUND(SUM(LENERGY), 2) AS total_energy,
                                                        ROUND(SUM(LPROTEIN),2) AS total_protein,
                                                        ROUND(SUM(LCARBS),2) AS total_carbs,
                                                        ROUND(SUM(LFATS),2) AS total_fats,
                                                        ROUND(SUM(LFIBER),2) AS total_fiber,
                                                        ROUND(SUM(LVITC),2) AS total_vitc,
                                                        ROUND(SUM(LVITB12),2) AS total_vitb12,
                                                        ROUND(SUM(LCALCIUM),2) AS total_calcium,
                                                        ROUND(SUM(LIRON),2) AS total_iron,
                                                        ROUND(SUM(LZINC),2) AS total_zinc
                                                 FROM logs_tbl WHERE LMEAL_TIME = 'Breakfast'";
                              $breakfastResult = mysqli_query($conn, $breakfastQuery);

                              if ($breakfastRow = mysqli_fetch_assoc($breakfastResult)) {
                                  echo "<tr>";
                                  echo "<td>" . htmlspecialchars($breakfastRow['total_energy']) . "</td>";
                                  echo "<td>" . htmlspecialchars($breakfastRow['total_protein']) . "</td>";
                                  echo "<td>" . htmlspecialchars($breakfastRow['total_carbs']) . "</td>";
                                  echo "<td>" . htmlspecialchars($breakfastRow['total_fats']) . "</td>";
                                  echo "<td>" . htmlspecialchars($breakfastRow['total_fiber']) . "</td>";
                                  echo "<td>" . htmlspecialchars($breakfastRow['total_vitc']) . "</td>";
                                  echo "<td>" . htmlspecialchars($breakfastRow['total_vitb12']) . "</td>";
                                  echo "<td>" . htmlspecialchars($breakfastRow['total_calcium']) . "</td>";
                                  echo "<td>" . htmlspecialchars($breakfastRow['total_iron']) . "</td>";
                                  echo "<td>" . htmlspecialchars($breakfastRow['total_zinc']) . "</td>";
                                  echo "</tr>";
                              } else {
                                  echo "<tr><td colspan='10'>No breakfast records found.</td></tr>";
                              }
                      ?>

                   </tbody>
               </table>
             </div>

             <div id="amsnack" class="col s12" >
               <!-- Table -->
               <table class="highlight centered responsive-table">
                 <thead>
                     <tr>
                       <th>Energy</th>
                       <th>Protein</th>
                       <th>Carbohydrates</th>
                       <th>Fats</th>
                       <th>Fiber</th>
                       <th>Vitamin C</th>
                       <th>Vitamin B12</th>
                       <th>Calcium</th>
                       <th>Iron</th>
                       <th>Zinc</th>
                     </tr>
                 </thead>

                   <tbody>
                     <?php

                              $amsnackQuery = "SELECT ROUND(SUM(LENERGY), 2) AS total_energy,
                                                        ROUND(SUM(LPROTEIN),2) AS total_protein,
                                                        ROUND(SUM(LCARBS),2) AS total_carbs,
                                                        ROUND(SUM(LFATS),2) AS total_fats,
                                                        ROUND(SUM(LFIBER),2) AS total_fiber,
                                                        ROUND(SUM(LVITC),2) AS total_vitc,
                                                        ROUND(SUM(LVITB12),2) AS total_vitb12,
                                                        ROUND(SUM(LCALCIUM),2) AS total_calcium,
                                                        ROUND(SUM(LIRON),2) AS total_iron,
                                                        ROUND(SUM(LZINC),2) AS total_zinc
                                                 FROM logs_tbl WHERE LMEAL_TIME = 'AM Snack'";
                              $amsnackResult = mysqli_query($conn, $amsnackQuery);

                              if ($amsnackRow = mysqli_fetch_assoc($amsnackResult)) {
                                  echo "<tr>";
                                  echo "<td>" . htmlspecialchars($amsnackRow['total_energy']) . "</td>";
                                  echo "<td>" . htmlspecialchars($amsnackRow['total_protein']) . "</td>";
                                  echo "<td>" . htmlspecialchars($amsnackRow['total_carbs']) . "</td>";
                                  echo "<td>" . htmlspecialchars($amsnackRow['total_fats']) . "</td>";
                                  echo "<td>" . htmlspecialchars($amsnackRow['total_fiber']) . "</td>";
                                  echo "<td>" . htmlspecialchars($amsnackRow['total_vitc']) . "</td>";
                                  echo "<td>" . htmlspecialchars($amsnackRow['total_vitb12']) . "</td>";
                                  echo "<td>" . htmlspecialchars($amsnackRow['total_calcium']) . "</td>";
                                  echo "<td>" . htmlspecialchars($amsnackRow['total_iron']) . "</td>";
                                  echo "<td>" . htmlspecialchars($amsnackRow['total_zinc']) . "</td>";
                                  echo "</tr>";
                              } else {
                                  echo "<tr><td colspan='10'>No AM Snack records found.</td></tr>";
                              }
                      ?>

                   </tbody>
               </table>
             </div>

             <div id="lunch" class="col s12" >
               <!-- Table -->
               <!-- Table -->
               <table class="highlight centered responsive-table">
                 <thead>
                     <tr>
                       <th>Energy</th>
                       <th>Protein</th>
                       <th>Carbohydrates</th>
                       <th>Fats</th>
                       <th>Fiber</th>
                       <th>Vitamin C</th>
                       <th>Vitamin B12</th>
                       <th>Calcium</th>
                       <th>Iron</th>
                       <th>Zinc</th>
                     </tr>
                 </thead>

                   <tbody>
                     <?php

                              $Query = "SELECT ROUND(SUM(LENERGY), 2) AS total_energy,
                                                        ROUND(SUM(LPROTEIN),2) AS total_protein,
                                                        ROUND(SUM(LCARBS),2) AS total_carbs,
                                                        ROUND(SUM(LFATS),2) AS total_fats,
                                                        ROUND(SUM(LFIBER),2) AS total_fiber,
                                                        ROUND(SUM(LVITC),2) AS total_vitc,
                                                        ROUND(SUM(LVITB12),2) AS total_vitb12,
                                                        ROUND(SUM(LCALCIUM),2) AS total_calcium,
                                                        ROUND(SUM(LIRON),2) AS total_iron,
                                                        ROUND(SUM(LZINC),2) AS total_zinc
                                                 FROM logs_tbl WHERE LMEAL_TIME = 'Lunch'";
                              $Result = mysqli_query($conn, $Query);

                              if ($Row = mysqli_fetch_assoc($Result)) {
                                  echo "<tr>";
                                  echo "<td>" . htmlspecialchars($Row['total_energy']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_protein']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_carbs']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_fats']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_fiber']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_vitc']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_vitb12']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_calcium']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_iron']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_zinc']) . "</td>";
                                  echo "</tr>";
                              } else {
                                  echo "<tr><td colspan='10'>No lunch records found.</td></tr>";
                              }
                      ?>

                   </tbody>
               </table>
             </div>

             <div id="pmsnack" class="col s12" >
               <!-- Table -->
               <table class="highlight centered responsive-table">
                 <thead>
                     <tr>
                       <th>Energy</th>
                       <th>Protein</th>
                       <th>Carbohydrates</th>
                       <th>Fats</th>
                       <th>Fiber</th>
                       <th>Vitamin C</th>
                       <th>Vitamin B12</th>
                       <th>Calcium</th>
                       <th>Iron</th>
                       <th>Zinc</th>
                     </tr>
                 </thead>

                   <tbody>
                     <?php

                              $Query = "SELECT ROUND(SUM(LENERGY), 2) AS total_energy,
                                                        ROUND(SUM(LPROTEIN),2) AS total_protein,
                                                        ROUND(SUM(LCARBS),2) AS total_carbs,
                                                        ROUND(SUM(LFATS),2) AS total_fats,
                                                        ROUND(SUM(LFIBER),2) AS total_fiber,
                                                        ROUND(SUM(LVITC),2) AS total_vitc,
                                                        ROUND(SUM(LVITB12),2) AS total_vitb12,
                                                        ROUND(SUM(LCALCIUM),2) AS total_calcium,
                                                        ROUND(SUM(LIRON),2) AS total_iron,
                                                        ROUND(SUM(LZINC),2) AS total_zinc
                                                 FROM logs_tbl WHERE LMEAL_TIME = 'PM Snack'";
                              $Result = mysqli_query($conn, $Query);

                              if ($Row = mysqli_fetch_assoc($Result)) {
                                  echo "<tr>";
                                  echo "<td>" . htmlspecialchars($Row['total_energy']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_protein']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_carbs']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_fats']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_fiber']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_vitc']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_vitb12']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_calcium']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_iron']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_zinc']) . "</td>";
                                  echo "</tr>";
                              } else {
                                  echo "<tr><td colspan='10'>No lunch records found.</td></tr>";
                              }
                      ?>

                   </tbody>
               </table>
             </div>

             <div id="dinner" class="col s12" >
               <!-- Table -->
               <table class="highlight centered responsive-table">
                 <thead>
                     <tr>
                       <th>Energy</th>
                       <th>Protein</th>
                       <th>Carbohydrates</th>
                       <th>Fats</th>
                       <th>Fiber</th>
                       <th>Vitamin C</th>
                       <th>Vitamin B12</th>
                       <th>Calcium</th>
                       <th>Iron</th>
                       <th>Zinc</th>
                     </tr>
                 </thead>

                   <tbody>
                     <?php

                              $Query = "SELECT ROUND(SUM(LENERGY), 2) AS total_energy,
                                                        ROUND(SUM(LPROTEIN),2) AS total_protein,
                                                        ROUND(SUM(LCARBS),2) AS total_carbs,
                                                        ROUND(SUM(LFATS),2) AS total_fats,
                                                        ROUND(SUM(LFIBER),2) AS total_fiber,
                                                        ROUND(SUM(LVITC),2) AS total_vitc,
                                                        ROUND(SUM(LVITB12),2) AS total_vitb12,
                                                        ROUND(SUM(LCALCIUM),2) AS total_calcium,
                                                        ROUND(SUM(LIRON),2) AS total_iron,
                                                        ROUND(SUM(LZINC),2) AS total_zinc
                                                 FROM logs_tbl WHERE LMEAL_TIME = 'Dinner'";
                              $Result = mysqli_query($conn, $Query);

                              if ($Row = mysqli_fetch_assoc($Result)) {
                                  echo "<tr>";
                                  echo "<td>" . htmlspecialchars($Row['total_energy']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_protein']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_carbs']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_fats']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_fiber']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_vitc']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_vitb12']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_calcium']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_iron']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_zinc']) . "</td>";
                                  echo "</tr>";
                              } else {
                                  echo "<tr><td colspan='10'>No lunch records found.</td></tr>";
                              }
                      ?>

                   </tbody>
               </table>
             </div>

             <div id="mdsnack" class="col s12" >
               <!-- Table -->
               <table class="highlight responsive-table">
                 <thead>
                     <tr>
                       <th>Energy</th>
                       <th>Protein</th>
                       <th>Carbohydrates</th>
                       <th>Fats</th>
                       <th>Fiber</th>
                       <th>Vitamin C</th>
                       <th>Vitamin B12</th>
                       <th>Calcium</th>
                       <th>Iron</th>
                       <th>Zinc</th>
                     </tr>
                 </thead>

                   <tbody>
                     <?php

                              $Query = "SELECT ROUND(SUM(LENERGY), 2) AS total_energy,
                                                        ROUND(SUM(LPROTEIN),2) AS total_protein,
                                                        ROUND(SUM(LCARBS),2) AS total_carbs,
                                                        ROUND(SUM(LFATS),2) AS total_fats,
                                                        ROUND(SUM(LFIBER),2) AS total_fiber,
                                                        ROUND(SUM(LVITC),2) AS total_vitc,
                                                        ROUND(SUM(LVITB12),2) AS total_vitb12,
                                                        ROUND(SUM(LCALCIUM),2) AS total_calcium,
                                                        ROUND(SUM(LIRON),2) AS total_iron,
                                                        ROUND(SUM(LZINC),2) AS total_zinc
                                                 FROM logs_tbl WHERE LMEAL_TIME = 'Midnight Snack'";
                              $Result = mysqli_query($conn, $Query);

                              if ($Row = mysqli_fetch_assoc($Result)) {
                                  echo "<tr>";
                                  echo "<td>" . htmlspecialchars($Row['total_energy']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_protein']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_carbs']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_fats']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_fiber']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_vitc']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_vitb12']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_calcium']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_iron']) . "</td>";
                                  echo "<td>" . htmlspecialchars($Row['total_zinc']) . "</td>";
                                  echo "</tr>";
                              } else {
                                  echo "<tr><td colspan='10'>No lunch records found.</td></tr>";
                              }
                      ?>

                   </tbody>
               </table>
             </div>

           </div>
        </div>
    </section>

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Calendar and Time JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Ionicons JS -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
    <script>
        const list = document.querySelectorAll('.list');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item) =>
        item.addEventListener('click', activeLink));
    </script>




</body>
</html>
