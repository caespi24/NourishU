<?php
session_start(); // Ensure session is started

// Database connection
$conn = mysqli_connect("localhost", "root", "", "nourishu_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
  // echo '<pre>';
  //     print_r($_POST); // Debugging line to see all POST data
  //     echo '</pre>';
    $foodname = mysqli_real_escape_string($conn, $_POST['foodname']); // Sanitize user input

    // Check if datetime input is set and not empty
      //  if (isset($_POST['datetime']) && !empty($_POST['datetime'])) {
          //  $ldate = mysqli_real_escape_string($conn, $_POST['datetime']); // Sanitize user input
            $userDateTime = $_POST['datetime'];
                // Create a DateTime object from the user input
                $dateTime = DateTime::createFromFormat('Y-m-d H:i', $userDateTime);

                // Format the DateTime object to MySQL's datetime format
                $formattedDateTime = $dateTime->format('Y-m-d H:i:s'); // Appends :00 for seconds

                // Now $formattedDateTime can be used in your SQL query
                $ldate = $formattedDateTime;
        // } else {
        //     $ldate = NULL; // Assign NULL or a default value if datetime is not provided
        // }

    $_SESSION['foodname'] = $foodname; // Store user input in session variable



    // Query to find the food in foodlist_tbl
    $query = "SELECT FOOD_NAME, FGROUP, QTY, MULTIPLIER, ENERGY, PROTEIN, CARBS, FATS, FIBER, VITC, VITB12, CALCIUM, IRON, ZINC FROM foodlist_tbl WHERE FOOD_NAME = '$foodname'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $lserving = 'default_value';
        if (isset($_POST['lserving'])) {
            $lserving = $_POST['lserving'];
            // echo "Selected unit: " . $lunit;
        } else {
            // echo "Unit not selected";
        }

        // Assign values to variables for insertion into logs_tbl
        $lfoodname = $row["FOOD_NAME"];
        $lfoodgroup = $row["FGROUP"];
        $lqty = $row["QTY"];
        $lmultiplier =  $row["MULTIPLIER"];
        $lenergy = $row["ENERGY"] * $lserving;
        $lprotein = $row["PROTEIN"] * $lserving;
        $lcarbs = $row["CARBS"] * $lserving;
        $lfats = $row["FATS"] * $lserving;
        $lfiber = $row["FIBER"] * $lserving;
        $lvitc =  $row["VITC"] * $lserving;
        $lvitb12 =  $row["VITB12"] * $lserving;
        $lcalcium =  $row["CALCIUM"] * $lserving;
        $liron = $row["IRON"] * $lserving;
        $lzinc = $row["ZINC"] * $lserving;
        $ldate = $formattedDateTime; // Placeholder for actual date logic
        // Assuming $ldate is already set to the formatted datetime string 'Y-m-d H:i:s'
        $dateTime = new DateTime($ldate);
        $hour = (int)$dateTime->format('G'); // 'G' returns the hour in 24-hour format without leading zeros

        // Initialize $lmeal with a default value
        $lmeal = 'Unknown';

        // Define meal types based on hour
        if ($hour >= 5 && $hour < 10) {
            $lmeal = 'Breakfast';
        } elseif ($hour >= 10 && $hour < 12) {
            $lmeal = 'AM Snack';
        } elseif ($hour >= 12 && $hour < 14) {
            $lmeal = 'Lunch';
        } elseif ($hour >= 14 && $hour < 17) {
            $lmeal = 'PM Snack';
        } elseif ($hour >= 17 && $hour < 21) {
            $lmeal = 'Dinner';
        } elseif ($hour >= 21 || $hour < 5) {
            $lmeal = 'Midnight Snack';
        }

        // Now $lmeal contains the meal type based on the time selected by the user

        // Check if 'unit' is part of the POST data
        // if (isset($_POST['lunit'])) {
        //     $lunit = mysqli_real_escape_string($conn, $_POST['lunit']);
        // } else {
        //     $lunit = 'default_value';
        // }
        // $lunit = $_POST['lunit'];
      //  $_SESSION['unit'] = $lunit; // Store user input in session variable
      $lunit = 'default_value';
      if (isset($_POST['lunit'])) {
          $lunit = $_POST['lunit'];
          // echo "Selected unit: " . $lunit;
      } else {
          // echo "Unit not selected";
      }




         // $lunit = isset($_POST['unit']) ? mysqli_real_escape_string($conn, $_POST['unit']) : 'default_value';
        //


        // $lserving = NULL; // Placeholder for actual serving logic
        $user = NULL; // Placeholder for actual user logic

        // SQL query to insert data into logs_tbl
        $sql = "INSERT INTO logs_tbl (LFOOD_NAME, LFOOD_GROUP, LDATE, LMEAL_TIME, LUNIT, LSERVING, USER, LQTY, LMULTIPLIER, LENERGY, LPROTEIN, LCARBS, LFATS, LFIBER, LVITC, LVITB12, LCALCIUM, LIRON, LZINC)
                VALUES ('$lfoodname', '$lfoodgroup', '$ldate', '$lmeal', '$lunit', '$lserving', '$user', '$lqty', '$lmultiplier', '$lenergy', '$lprotein', '$lcarbs', '$lfats', '$lfiber', '$lvitc', '$lvitb12', '$lcalcium', '$liron', '$lzinc')";

        if (mysqli_query($conn, $sql)) {
            echo "Record added successfully.";
            // echo  $lunit;

            // Redirect or further action here
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    } else {
        echo "No matching food found.";
    }
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>NourishU</title>
</head>
<body>
    <!-- Header -->
    <!-- <header class="header">
        <div class="navbar-fixed nav-bottom">
            <nav class="main-nav">
                    <div class="nav-wrapper">
                        <a href="https://globalelite.com.ph/"><img src="images/AppLogo.png" class="brand-logo main-logo" alt=""></a>
                        <ul class="tabs tabs-transparent">
                            <li class="tab"><a target="_self" href="main.html"><i class="fa-solid fa-house"></i></a></li>
                            <li class="tab"><a href="#test2"><i class="fa-solid fa-apple-whole"></i></a></li>
                            <li class="tab"><a class="active" href="#"><i class="fa-solid fa-plus"></i></a></li>
                            <li class="tab"><a href="#test4"><i class="fa-regular fa-file"></i></a></li>
                            <li class="tab"><a href="#test5"><i class="fa-solid fa-ellipsis"></i></a></li>
                        </ul>
                    </div>
            </nav>
        </div>
    </header> -->

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
                <li class="list active">
                    <a>
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

    <div class="container">
        <!-- Back button -->
        <br>
        <a href="main.php" class="back-btn"><i class="material-icons">arrow_back</i></a>
        <br>
        <!-- Food Search -->
        <h3 class="center nit-h3">What did you eat?</h3>
        <nav class="food-search">
            <div class="nav-wrapper">
                      <form action=""   method="POST"  >
                    <div class="input-field">
                      <input name= "foodname" id="search" type="search" >
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <!-- <div id="suggestions" style="display:none;"></div> -->
                    <i class="material-icons">close</i>
                    </div>

            </div>
        </nav>

  <div class="suggest" id="suggestions"></div>

        <!-- Calendar -->
        <p class="light-green-text text-darken-4" >Date and Time</p>
        <input type="text" id="datetimePicker" name="datetime" placeholder="Select Date and Time">

        <!-- Dropdown Unit & Serving -->
        <br><br>
        <div class="row">
          <!-- Select Serving Size -->
          <div class="input-field col s6">
            <select id="lserving">
              <option value="" disabled selected>Select</option>
              <option value="0.5">1/2</option>
              <option value="0.25">1/4</option>
              <option value="0.75">3/4</option>
              <option value="1">1</option>
            </select>
            <label>Select Serving Size</label>

            <!-- Hidden input to store the selected value -->
            <input type="hidden" name="lserving" id="hiddenUnit2">
          </div>

          <!-- Select Unit -->
          <div class="input-field col s6">
            <select id="lunit">
              <option value="" disabled selected>Select</option>
              <option value="cup">Cup</option>
              <option value="gram">Gram</option>
            </select>
            <label>Select Unit</label>

            <!-- Hidden input to store the selected value -->
            <input type="hidden" name="lunit" id="hiddenUnit1">
          </div>
        </div>
        <br><br>

        <button type="submit" name="submit" class="add-btn">Add<i class="right material-icons">add</i></button>

    </form>
</div>


        <!-- Add Custom Food -->
        <a href="#add-food-modal" class="right modal-trigger" style="margin: .5rem 1rem;">Add Custom Food</a>
        <br><br>

        <!-- Modal Structure for Add Custom Food -->
        <div class="modal modal-sheet" id="add-food-modal">
          <div class="modal-content">
            <div class="row center-align">
              <div class="col s12">
                <div class="card-panel cp1">
                  <img src="images/AppLogo.png" height="100px" alt="">
                  <p>Fill up the food information.</p>
                  <div class="row">
                    <form class="col s12" action="customfood_handler.php" method="POST">
                        <input type="hidden" name="record_id" id="record_id" value="">
                      <div class="input-field col s12 center fdcid">
                        <input class="fdcid" id="fdcid" name="fdcid" type="text">
                          <label for="fdcid" class="light-green-text text-darken-4">FDCID</label>
                      </div>
                      <div class="input-field col s6 center fodname">
                          <input name="fodname" id="fodname" name="fodname" type="text">
                          <label for="fodname" class="light-green-text text-darken-4">Food Name</label>
                      </div>
                      <!-- Select Food Group -->
                      <div class="input-field col s6">
                        <select id="fgroup">
                          <option value="" disabled selected>Select</option>
                          <option value="Cereals and Products">Cereals and Products</option>
                          <option value="Starchy Roots and Tubers">Starchy Roots and Tubers</option>
                          <option value="Nuts, Dry Beans, and Seeds">Nuts, Dry Beans, and Seeds</option>
                          <option value="Vegetables">Vegetables</option>
                          <option value="Fruits">Fruits</option>
                          <option value="Seafoods">Seafoods</option>
                          <option value="Red Meat">Red Meat</option>
                          <option value="Eggs">Eggs</option>
                          <option value="Dairy Products">Dairy Products</option>
                          <option value="Fats and Oils">Fats and Oils</option>
                          <option value="Sugar, Syrup, and Confectionery">Sugar, Syrup, and Confectionery</option>
                          <option value="Condiments and Spices">Condiments and Spices</option>
                          <option value="Alcoholic Beverages">Alcoholic Beverages</option>
                          <option value="Non-alcoholic Beverages">Non-alcoholic Beverages</option>
                          <option value="Others">Others</option>
                        </select>
                        <label class="light-green-text text-darken-4">Select Food Group</label>

                        <!-- Hidden input to store the selected value -->
                        <input type="hidden" name="fgroup" id="hiddenUnit6">
                      </div>
                      <div class="input-field col s6 center cname">
                          <input name="cname" id="cname" type="text">
                          <label for="cname" class="light-green-text text-darken-4">Common Name</label>
                      </div>
                      <div class="input-field col s6 center eportion">
                          <input name="eportion" id="eportion" type="text">
                          <label for="eportion" class="light-green-text text-darken-4">Edible Portion</label>
                      </div>
                      <br><br>
                      <h4 class="nit-h3">MACRONUTRIENTS</h4>
                      <div class="divider"></div>

                      <div class="input-field col s6 center energy">
                          <input name="energy" id="energy" type="text">
                          <label for="energy" class="light-green-text text-darken-4">Energy</label>
                      </div>
                      <div class="input-field col s6 center protein">
                          <input name="protein" id="protein" type="text">
                          <label for="protein" class="light-green-text text-darken-4">Protein</label>
                      </div>
                      <div class="input-field col s6 center carbs">
                          <input name="carbs" id="carbs" type="text">
                          <label for="carbs" class="light-green-text text-darken-4">Carbohydrates</label>
                      </div>
                      <div class="input-field col s6 center fats">
                          <input name="fats" id="fats" type="text">
                          <label for="fats" class="light-green-text text-darken-4">Fats</label>
                      </div>
                      <div class="input-field col s6 center fiber">
                          <input name="fiber" id="fiber" type="text">
                          <label for="fiber" class="light-green-text text-darken-4">Fiber</label>
                      </div>
                      <br><br>
                      <h4 class="nit-h3">MICRONUTRIENTS</h4>
                      <div class="divider"></div>

                      <div class="input-field col s6 center vitc">
                          <input name="vitc" id="vitc" type="text">
                          <label for="vitc" class="light-green-text text-darken-4">Vitamin C</label>
                      </div>
                      <div class="input-field col s6 center vitb12">
                          <input name="vitb12" id="vitb12" type="text">
                          <label for="vitb12" class="light-green-text text-darken-4">Vitamin B12</label>
                      </div>
                      <div class="input-field col s6 center calc">
                          <input name="calc" id="calc" type="text">
                          <label for="calc" class="light-green-text text-darken-4">Calcium</label>
                      </div>
                      <div class="input-field col s6 center iron">
                          <input name="iron" id="iron" type="text">
                          <label for="iron" class="light-green-text text-darken-4">Iron</label>
                      </div>
                      <div class="input-field col s6 center zinc">
                          <input name="zinc" id="zinc" type="text">
                          <label for="zinc" class="light-green-text text-darken-4">Zinc</label>
                      </div>

                      <button type="submit" name="submit" class="add-btn">Add Custom Food<i class="right material-icons">mode_edit</i></button>

                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>


<div class="divider"></div>

    <!-- Food unit and serving -->
    <div class="container">
        <!-- Food Log -->
        <section class="foodlog">
            <div class="container">
                <h3 class="center nit-h3">Food Logs</h3>
                <!-- Table -->
                <table class="highlight centered responsive-table">
                    <thead>
                        <tr>
                            <th>Food Name</th>
                            <th>Food Group</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Meal Time</th>
                            <th>Unit</th>
                            <th>Serving Size</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                      <?php
// Query to fetch data from logs_tbl sorted by LDATE in descending order
$query = "SELECT * FROM logs_tbl ORDER BY LDATE DESC LIMIT 10";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    //  $editUrl = "editPage.php?id=" . $row['ID']; // Assuming 'ID' is your identifier column
        $deleteUrl = "deleteScript.php?id=" . $row['ID'];
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['LFOOD_NAME']) . "</td>";
        echo "<td>" . htmlspecialchars($row['LFOOD_GROUP']) . "</td>";
        echo "<td>" . htmlspecialchars(date('d/m/Y', strtotime($row['LDATE']))) . "</td>"; // Format date
        echo "<td>" . htmlspecialchars(date('h:i A', strtotime($row['LDATE']))) . "</td>"; // Format time
        echo "<td>" . htmlspecialchars($row['LMEAL_TIME']) . "</td>";
        echo "<td>" . htmlspecialchars($row['LUNIT']) . "</td>";
        echo "<td>" . htmlspecialchars($row['LSERVING']) . "</td>";
        echo "<td><a href='#modal1' class='btn-small yellow darken-2 modal-trigger edit-btn' data-id='" . $row['ID'] . "'>Edit</a> <a href='" . $deleteUrl . "' class='btn-small red darken-1 delete-btn'>Delete</a></td>"; // Add edit and delete buttons
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No records found.</td></tr>";
}


?>





                    </tbody>
                </table>
            </div>
        </div>
        </section>

        <!-- Modal Structure for Edit Button -->
        <div class="modal modal-sheet" id="modal1">
          <div class="modal-content">
            <div class="row center-align">
              <div class="col s12">
                <div class="card-panel cp1">
                  <img src="images/AppLogo.png" height="100px" alt="">
                  <p>Edit your food Log information.</p>
                  <div class="row">
                    <form class="col s12" action="updateScript.php" method="POST">
                        <input type="hidden" name="record_id" id="record_id" value="">
                      <div class="input-field col s12 center fdname">
                        <input class="fdname" id="fdname" name="foodname" type="text" required>
                          <label for="fdname" class="light-green-text text-darken-4">Food Name</label>
                      </div>
                      <!-- Calendar -->
                      <p class="light-green-text text-darken-4" >Date and Time</p>
                      <input type="text" id="datetimePicker" name="datetime" placeholder="Select Date and Time">

                      <!-- Dropdown Unit & Serving -->
                      <br><br>
                      <div class="row">
                        <!-- Select Unit -->
                        <div class="input-field col s6">
                          <select id="lunit1">
                            <option value="" disabled selected>Select</option>
                            <option value="cup">Cup</option>
                            <option value="gram">Gram</option>
                          </select>
                          <label>Select Unit</label>

                          <!-- Hidden input to store the selected value -->
                          <input type="hidden" name="lunit" id="hiddenUnit3">
                        </div>

                        <!-- Select Serving Size -->
                        <div class="input-field col s6">
                          <select id="lserving1">
                            <option value="" disabled selected>Select</option>
                            <option value="0.5">1/2</option>
                            <option value="0.25">1/4</option>
                            <option value="0.75">3/4</option>
                            <option value="1">1</option>
                          </select>
                          <label>Select Serving Size</label>

                          <!-- Hidden input to store the selected value -->
                          <input type="hidden" name="lserving" id="hiddenUnit4">
                        </div>
                      </div>
                      <br><br><br>

                      <button type="submit" name="submit" class="add-btn">Update<i class="right material-icons">mode_edit</i></button>

                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>

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

<script>
$(document).ready(function(){
  $("#search").on("keyup", function(){
    var query = $(this).val();
    if (query.length > 0) {
      $.ajax({
        url:"fetch_suggestions.php",
        method:"POST",
        data:{query:query},
        success:function(data){
          $("#suggestions").html(data);
          $("#suggestions").css("display", "block");
        }
      });
    } else {
      $("#suggestions").css("display", "none");
    }
  });
});
</script>

<script>
$(document).on("click", "#suggestions li", function(){
  $("#search").val($(this).text());
  $("#suggestions").css("display", "none");
});
</script>





</body>
</html>
