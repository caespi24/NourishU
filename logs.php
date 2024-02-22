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
                <li class="list">
                    <a href="foodnutrition.php">
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
                <li class="list active">
                    <a>
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
    </div>

        <!-- Date -->
        <section class="logs">

        </section>
        <div class="container">
        <div class="row" style="margin-bottom: 0">
          <!-- <div class="col s3 offset-s3">
            <p>Date:</p>
          </div> -->
              <form action=""   method="POST"  >
          <div class="input-field col s6 offset-s6">
        <i class="material-icons prefix">date_range</i>
        <input type="text" class="datepicker" name = "datepicker" id="date-picker-modal">
        <!-- <label for="date-picker-modal">Choose a Date</label> -->
        <br><br>
        <button type="submit" name="submit" class="col s10 add-btn">Search<i class="right material-icons">add</i></button>
      </form>
    </div>
          <!-- <div class="input-field col s6 offset-s6">
            <i class="material-icons prefix">date_range</i>
            <input  type="text" class="datepicker" id="date-picker-modal">
          </div> -->
        </div>

        <h3 class="left-align nit-h3" style="margin-top: -1rem">Food Logs</h3>

        <!-- Table -->
        <table class="highlight centered responsive-table">
            <thead>
                <tr>
                    <th>Food Name</th>
                    <th>Food Group</th>
                    <th>Time</th>
                    <th>Meal Time</th>
                    <th>Unit</th>
                    <th>Serving Size</th>
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
              if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                $userDateTime = $_POST['datepicker'];
                  echo "Received date: " . $userDateTime;
                  $dateTime = DateTime::createFromFormat('M d, Y', $userDateTime);
                  //  $dateTime = DateTime::createFromFormat('Y-m-d', $userDateTime);
                    // Now $formattedDateTime can be used in your SQL query
                //    $ldate = $dateTime;
  // Query to fetch data from logs_tbl sorted by LDATE in descending order
  if ($dateTime !== false) { // Ensure the date creation was successful
    $formattedDate = $dateTime->format('Y-m-d'); // Format the date as 'Y-m-d'

  $query = "SELECT * FROM logs_tbl WHERE DATE(LDATE) = '$formattedDate'";
//  $query = "SELECT * FROM logs_tbl ORDER BY LDATE DESC LIMIT 10";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
  //  $ldate = $dateTime; // Placeholder for actual date logic
    // Assuming $ldate is already set to the formatted datetime string 'Y-m-d H:i:s'
//    $dateTime = new DateTime($ldate);
  //  $hour = (int)$dateTime->format('G'); // 'G' returns the hour in 24-hour format without leading zeros

  // Output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . htmlspecialchars($row['LFOOD_NAME']) . "</td>";
      echo "<td>" . htmlspecialchars($row['LFOOD_GROUP']) . "</td>";
      echo "<td>" . htmlspecialchars(date('h:i A', strtotime($row['LDATE']))) . "</td>"; // Format time
      echo "<td>" . htmlspecialchars($row['LMEAL_TIME']) . "</td>";
      echo "<td>" . htmlspecialchars($row['LUNIT']) . "</td>";
      echo "<td>" . htmlspecialchars($row['LSERVING']) . "</td>";
      echo "<td>" . htmlspecialchars($row['LENERGY']) . "</td>";
      echo "<td>" . htmlspecialchars($row['LPROTEIN']) . "</td>";
      echo "<td>" . htmlspecialchars($row['LCARBS']) . "</td>";
      echo "<td>" . htmlspecialchars($row['LFATS']) . "</td>";
      echo "<td>" . htmlspecialchars($row['LFIBER']) . "</td>";
      echo "<td>" . htmlspecialchars($row['LVITC']) . "</td>";
      echo "<td>" . htmlspecialchars($row['LVITB12']) . "</td>";
      echo "<td>" . htmlspecialchars($row['LCALCIUM']) . "</td>";
      echo "<td>" . htmlspecialchars($row['LIRON']) . "</td>";
      echo "<td>" . htmlspecialchars($row['LZINC']) . "</td>";
      echo "</tr>";
  }
  } else {
  echo "<tr><td colspan='16'>No records found. </td></tr>";
  }
}
else {
        // Handle the error, e.g., invalid date format
        echo "Invalid date format." ;
    }
}
  ?>


            </tbody>
        </table>
    </div>


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
