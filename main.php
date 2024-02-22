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
                            <li class="tab"><a class="active" href="#"><i class="fa-solid fa-house"></i></a></li>
                            <li class="tab"><a href="#test2"><i class="fa-solid fa-apple-whole"></i></a></li>
                            <li class="tab"><a target="_self" href="foodlog1.html"><i class="fa-solid fa-plus"></i></a></li>
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
                <li class="list active">
                    <a>
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




    <!-- Main Button -->
    <!-- <div class="fixed-action-btn toolbar">
        <a class="btn-floating btn-large light-green darken-4"><i class="large material-icons">mode_edit</i></a>
            <ul>
                <li><a class="btn-floating light-green darken-4"><i class="fa-solid fa-house"></i></a></li>
                <li><a class="btn-floating light-green darken-4"><i class="fa-regular fa-file"></i></a></li>
                <li><a href="foodlog1.html" class="btn-floating light-green darken-4"><i class="fa-solid fa-plus"></i></a></li>
                <li><a class="btn-floating light-green darken-4"><i class="fa-solid fa-apple-whole"></i></a></li>
                <li><a class="btn-floating light-green darken-4"><i class="fa-solid fa-user"></i></a></li>
            </ul>
    </div> -->

    <!-- Main Body -->

    <!-- Food Log Result Section -->
    <div class="flr">
                <br><br>
                <div class="container">
                  <?php
                  //    session_start();
                  if (isset($_SESSION['first_name']) && isset($_SESSION['user_id'])) {
                          $firstName = htmlspecialchars($_SESSION['first_name']);
                          $userId = $_SESSION['user_id']; // Access the user ID from the session

                        echo '<h5 class="left-align">Welcome, <span class="nit-h3">' . htmlspecialchars($firstName) . '!</span></h5>';
                      } else {
                        // Optional: Redirect to login page if first name is not set
                        header("Location: index.php");
                      }
                      ?>

                  <!-- <h5 class="left-align">Welcome, <span class="nit-h3">[first name]</span></h5> -->
                  <br><br>
                  <div class="row date-row">
                    <div class="col s12 center-align">
                      <input  type="text" class="datepicker main-date" style="font-size: 3rem; color:black;" disabled id="date-picker-modal">
                    </div>
                  </div>

                </div>

                <div class="carousel main-cs">


                  <!-- Your HTML structure for the carousel item -->
                  <a href="#" class="carousel-item cs-item">
                      <div class="row">
                          <div class="col s12">
                              <div class="card-panel cp-flr1">
                                  <img src="images/1 - Breakfast.png" class="circle flr-img" alt="">
                                  <h5 class="center">BreakFast</h5>

                                  <?php
                                  // Your existing code to fetch breakfast data
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
                                                     FROM logs_tbl WHERE LMEAL_TIME = 'Breakfast' AND DATE(LDATE) = CURDATE()";
                                  $breakfastResult = mysqli_query($conn, $breakfastQuery);

                                  if ($breakfastRow = mysqli_fetch_assoc($breakfastResult)) {
                                      $_SESSION['breakfast_data'] = $breakfastRow; // Store breakfast data in session
                                  } else {
                                      $_SESSION['breakfast_data'] = null; // No data found, store null
                                  }
                                   if (isset($_SESSION['breakfast_data']) && $_SESSION['breakfast_data']): ?>
                                  <p><b>Calories:</b> <?php echo htmlspecialchars($_SESSION['breakfast_data']['total_energy']) ?> kcal</p>
                                  <p><b>Carbohydrates:</b> <?php echo htmlspecialchars($_SESSION['breakfast_data']['total_carbs']) ?> g</p>
                                  <p><b>Protein:</b> <?php echo htmlspecialchars($_SESSION['breakfast_data']['total_protein']) ?> g</p>
                                  <p><b>Fat:</b> <?php echo htmlspecialchars($_SESSION['breakfast_data']['total_fats']) ?> g</p>
                                  <p><b>Fiber:</b> <?php echo htmlspecialchars($_SESSION['breakfast_data']['total_fiber']) ?> g</p>
                                  <?php else: ?>
                                  <p>Calories: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- kcal</p>
                                  <p>Carbohydrates:&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                  <p>Protein:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                  <p>Fat:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; -- g</p>
                                  <p>Fiber:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                  <?php endif; ?>
                              </div>
                          </div>
                      </div>
                  </a>


                    <a href="#" class="carousel-item cs-item">
                        <div class="row">
                            <div class="col s12">
                                <div class="card-panel cp-flr2">
                                    <img src="images/2 - AM Snack.png" class="flr-img" alt="">
                                    <h5 class="center">AM Snack</h5>
                                    <?php
                                    // Your existing code to fetch breakfast data
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
                                                       FROM logs_tbl WHERE LMEAL_TIME = 'AM Snack' AND DATE(LDATE) = CURDATE()";
                                    $Result = mysqli_query($conn, $Query);

                                    if ($Row = mysqli_fetch_assoc($Result)) {
                                        $_SESSION['data'] = $Row; // Store breakfast data in session
                                    } else {
                                        $_SESSION['data'] = null; // No data found, store null
                                    }
                                     if (isset($_SESSION['data']) && $_SESSION['data']): ?>
                                    <p><b>Calories:</b> <?php echo htmlspecialchars($_SESSION['data']['total_energy']) ?> kcal</p>
                                    <p><b>Carbohydrates:</b> <?php echo htmlspecialchars($_SESSION['data']['total_carbs']) ?> g</p>
                                    <p><b>Protein:</b> <?php echo htmlspecialchars($_SESSION['data']['total_protein']) ?> g</p>
                                    <p><b>Fat:</b> <?php echo htmlspecialchars($_SESSION['data']['total_fats']) ?> g</p>
                                    <p><b>Fiber:</b> <?php echo htmlspecialchars($_SESSION['data']['total_fiber']) ?> g</p>
                                    <?php else: ?>
                                    <p>Calories: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- kcal</p>
                                    <p>Carbohydrates:&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                    <p>Protein:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                    <p>Fat:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; -- g</p>
                                    <p>Fiber:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="carousel-item cs-item">
                        <div class="row">
                            <div class="col s12">
                                <div class="card-panel cp-flr3">
                                    <img src="images/3 - Lunch.png" class="flr-img" alt="">
                                    <h5 class="center">Lunch</h5>
                                    <?php
                                    // Your existing code to fetch breakfast data
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
                                                       FROM logs_tbl WHERE LMEAL_TIME = 'Lunch' AND DATE(LDATE) = CURDATE()";
                                    $Result = mysqli_query($conn, $Query);

                                    if ($Row = mysqli_fetch_assoc($Result)) {
                                        $_SESSION['data'] = $Row; // Store breakfast data in session
                                    } else {
                                        $_SESSION['data'] = null; // No data found, store null
                                    }
                                     if (isset($_SESSION['data']) && $_SESSION['data']): ?>
                                    <p><b>Calories:</b> <?php echo htmlspecialchars($_SESSION['data']['total_energy']) ?> kcal</p>
                                    <p><b>Carbohydrates:</b> <?php echo htmlspecialchars($_SESSION['data']['total_carbs']) ?> g</p>
                                    <p><b>Protein:</b> <?php echo htmlspecialchars($_SESSION['data']['total_protein']) ?> g</p>
                                    <p><b>Fat:</b> <?php echo htmlspecialchars($_SESSION['data']['total_fats']) ?> g</p>
                                    <p><b>Fiber:</b> <?php echo htmlspecialchars($_SESSION['data']['total_fiber']) ?> g</p>
                                    <?php else: ?>
                                    <p>Calories: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- kcal</p>
                                    <p>Carbohydrates:&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                    <p>Protein:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                    <p>Fat:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; -- g</p>
                                    <p>Fiber:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="carousel-item cs-item">
                        <div class="row">
                            <div class="col s12">
                                <div class="card-panel cp-flr4">
                                    <img src="images/4 - PM Snack.png" class="flr-img" alt="">
                                    <h5 class="center">PM Snack</h5>
                                    <?php
                                    // Your existing code to fetch breakfast data
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
                                                       FROM logs_tbl WHERE LMEAL_TIME = 'PM Snack' AND DATE(LDATE) = CURDATE()";
                                    $Result = mysqli_query($conn, $Query);

                                    if ($Row = mysqli_fetch_assoc($Result)) {
                                        $_SESSION['data'] = $Row; // Store breakfast data in session
                                    } else {
                                        $_SESSION['data'] = null; // No data found, store null
                                    }
                                     if (isset($_SESSION['data']) && $_SESSION['data']): ?>
                                    <p><b>Calories:</b> <?php echo htmlspecialchars($_SESSION['data']['total_energy']) ?> kcal</p>
                                    <p><b>Carbohydrates:</b> <?php echo htmlspecialchars($_SESSION['data']['total_carbs']) ?> g</p>
                                    <p><b>Protein:</b> <?php echo htmlspecialchars($_SESSION['data']['total_protein']) ?> g</p>
                                    <p><b>Fat:</b> <?php echo htmlspecialchars($_SESSION['data']['total_fats']) ?> g</p>
                                    <p><b>Fiber:</b> <?php echo htmlspecialchars($_SESSION['data']['total_fiber']) ?> g</p>
                                    <?php else: ?>
                                    <p>Calories: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- kcal</p>
                                    <p>Carbohydrates:&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                    <p>Protein:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                    <p>Fat:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; -- g</p>
                                    <p>Fiber:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="carousel-item cs-item">
                        <div class="row">
                            <div class="col s12">
                                <div class="card-panel cp-flr5">
                                    <img src="images/5 - Dinner.png" class="flr-img" alt="">
                                    <h5 class="center">Dinner</h5>
                                    <?php
                                    // Your existing code to fetch breakfast data
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
                                                       FROM logs_tbl WHERE LMEAL_TIME = 'Dinner' AND DATE(LDATE) = CURDATE()";
                                    $Result = mysqli_query($conn, $Query);

                                    if ($Row = mysqli_fetch_assoc($Result)) {
                                        $_SESSION['data'] = $Row; // Store breakfast data in session
                                    } else {
                                        $_SESSION['data'] = null; // No data found, store null
                                    }
                                     if (isset($_SESSION['data']) && $_SESSION['data']): ?>
                                    <p><b>Calories:</b> <?php echo htmlspecialchars($_SESSION['data']['total_energy']) ?> kcal</p>
                                    <p><b>Carbohydrates:</b> <?php echo htmlspecialchars($_SESSION['data']['total_carbs']) ?> g</p>
                                    <p><b>Protein:</b> <?php echo htmlspecialchars($_SESSION['data']['total_protein']) ?> g</p>
                                    <p><b>Fat:</b> <?php echo htmlspecialchars($_SESSION['data']['total_fats']) ?> g</p>
                                    <p><b>Fiber:</b> <?php echo htmlspecialchars($_SESSION['data']['total_fiber']) ?> g</p>
                                    <?php else: ?>
                                    <p>Calories: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- kcal</p>
                                    <p>Carbohydrates:&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                    <p>Protein:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                    <p>Fat:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; -- g</p>
                                    <p>Fiber:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="carousel-item cs-item">
                        <div class="row">
                            <div class="col s12">
                                <div class="card-panel cp-flr6">
                                    <img src="images/6 - Midnight Snack.png" class="flr-img" alt="">
                                    <h5 class="center">Midnight Snack</h5>
                                    <?php
                                    // Your existing code to fetch breakfast data
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
                                                       FROM logs_tbl WHERE LMEAL_TIME = 'Midnight Snack' AND DATE(LDATE) = CURDATE()";
                                    $Result = mysqli_query($conn, $Query);

                                    if ($Row = mysqli_fetch_assoc($Result)) {
                                        $_SESSION['data'] = $Row; // Store breakfast data in session
                                    } else {
                                        $_SESSION['data'] = null; // No data found, store null
                                    }
                                     if (isset($_SESSION['data']) && $_SESSION['data']): ?>
                                    <p><b>Calories:</b> <?php echo htmlspecialchars($_SESSION['data']['total_energy']) ?> kcal</p>
                                    <p><b>Carbohydrates:</b> <?php echo htmlspecialchars($_SESSION['data']['total_carbs']) ?> g</p>
                                    <p><b>Protein:</b> <?php echo htmlspecialchars($_SESSION['data']['total_protein']) ?> g</p>
                                    <p><b>Fat:</b> <?php echo htmlspecialchars($_SESSION['data']['total_fats']) ?> g</p>
                                    <p><b>Fiber:</b> <?php echo htmlspecialchars($_SESSION['data']['total_fiber']) ?> g</p>
                                    <?php else: ?>
                                    <p>Calories: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- kcal</p>
                                    <p>Carbohydrates:&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                    <p>Protein:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                    <p>Fat:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; -- g</p>
                                    <p>Fiber:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;-- g</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
        </div>

    <!-- Macronutrients -->
    <div class="container">
        <h3 class="center nit-h3">Macronutrients</h3>
    </div>
        <div class="carousel cs">
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
           FROM logs_tbl WHERE DATE(LDATE) = CURDATE()";
           $Result = mysqli_query($conn, $Query);

if ($Row = mysqli_fetch_assoc($Result)) {
    $_SESSION['data'] = $Row; // Store the result in session
} else {
    $_SESSION['data'] = null; // Ensure session data is cleared if no results
}

//energy 1800-3000
  $energy = isset($_SESSION['data']['total_energy']) ? (int)$_SESSION['data']['total_energy'] : 0;
$energyClass = ($energy >= 3000) ? 'mn-icons' : 'mn-icons-inadequate';

//protein 45-56
$protein = isset($_SESSION['data']['total_protein']) ? (int)$_SESSION['data']['total_protein'] : 0;
$proteinClass = ($protein >= 56) ? 'mn-icons' : 'mn-icons-inadequate';

//carbs 225-325
$carbs = isset($_SESSION['data']['total_carbs']) ? (int)$_SESSION['data']['total_carbs'] : 0;
$carbsClass = ($carbs >= 325) ? 'mn-icons' : 'mn-icons-inadequate';

//fats 44- 78
$fats = isset($_SESSION['data']['total_fats']) ? (int)$_SESSION['data']['total_fats'] : 0;
$fatsClass = ($fats >= 78) ? 'mn-icons' : 'mn-icons-inadequate';

//fiber 25-38
$fiber = isset($_SESSION['data']['total_fiber']) ? (int)$_SESSION['data']['total_fiber'] : 0;
$fiberClass = ($fiber >= 100) ? 'mn-icons' : 'mn-icons-inadequate';

//vitc 75-90
$vitc = isset($_SESSION['data']['total_vitc']) ? (int)$_SESSION['data']['total_vitc'] : 0;
$vitcClass = ($vitc >= 90) ? 'mn-icons' : 'mn-icons-inadequate';

//vitb12 1-2.4 change this!!!
$vitb12 = isset($_SESSION['data']['total_vitb12']) ? (int)$_SESSION['data']['total_vitb12'] : 0;
$vitb12Class = ($vitb12 >= 2.4) ? 'mn-icons' : 'mn-icons-inadequate';

//calcium 800-1000 change this!!!
$calc = isset($_SESSION['data']['total_calcium']) ? (int)$_SESSION['data']['total_calcium'] : 0;
$calcClass = ($calc >= 1000) ? 'mn-icons' : 'mn-icons-inadequate';

//iron - 15-18 change thisss
$iron = isset($_SESSION['data']['total_iron']) ? (int)$_SESSION['data']['total_iron'] : 0;
$ironClass = ($iron >= 18) ? 'mn-icons' : 'mn-icons-inadequate';

//zinc - 8-11
$zinc = isset($_SESSION['data']['total_zinc']) ? (int)$_SESSION['data']['total_zinc'] : 0;
$zincClass = ($zinc >= 11) ? 'mn-icons' : 'mn-icons-inadequate';



?>


  <a href="#energymodal" class="carousel-item cs-item modal-trigger">
<div class="row">
    <div class="col s12">
        <div class="card-panel <?php echo $energyClass; ?>">
            <p class="center">Energy</p>
            <!-- <p class="center">(kcal)</p> -->
            <p class="center"><?php echo $energy; ?> kcal</p>
        </div>
    </div>
</div>
</a>
<a href="#proteinmodal" class="carousel-item cs-item modal-trigger">
<div class="row">
  <div class="col s12">
      <div class="card-panel <?php echo $proteinClass; ?>">
          <p class="center">Protein</p>
          <!-- <p class="center">(kcal)</p> -->
          <p class="center"><?php echo $protein; ?> g</p>
      </div>
  </div>
</div>
</a>
<a href="#carbsmodal" class="carousel-item cs-item modal-trigger">
<div class="row">
  <div class="col s12">
      <div class="card-panel <?php echo $carbsClass; ?>">
          <p class="center">Carbohydrates</p>
          <!-- <p class="center">(kcal)</p> -->
          <p class="center"><?php echo $carbs; ?> g</p>
      </div>
  </div>
</div>
</a>
<a href="#fatsmodal" class="carousel-item cs-item modal-trigger">
<div class="row">
  <div class="col s12">
      <div class="card-panel <?php echo $fatsClass; ?>">
          <p class="center">Fats</p>
          <!-- <p class="center">(kcal)</p> -->
          <p class="center"><?php echo $fats; ?> g</p>
      </div>
  </div>
</div>
</a>
<a href="#fibermodal" class="carousel-item cs-item modal-trigger">
<div class="row">
  <div class="col s12">
      <div class="card-panel <?php echo $fiberClass; ?>">
          <p class="center">Dietary Fiber</p>
          <!-- <p class="center">(kcal)</p> -->
          <p class="center"><?php echo $fiber; ?> g</p>
      </div>
  </div>
</div>
</a>

        </div>

        <!-- Modal Structure for Macronutrients -->
        <div id="energymodal" class="modal modal-sheet">
            <div class="modal-content">
                <div class="card-panel cp1">
                    <h2 class="light-green-text text-darken-4">Energy</h2>
                    <?php
            $energy = isset($_SESSION['data']['total_energy']) ? (int)$_SESSION['data']['total_energy'] : 0;
            if ($energy >= 3000) {
                $statusColor = "#33691e"; // Green color for adequate
                $statusText = "Adequate";
            } else {
                $statusColor = "#d32f2f"; // Red color for inadequate
                $statusText = "Inadequate";
            }
            ?>
            <p class="flow-text black-text text-darken-4 ">Amount Intake: <?php echo "<font color =$statusColor>$energy  kcal</font>"; ?></p>
            <p class="flow-text black-text text-darken-4 status">Status: <i class="fa-solid fa-circle" style="color: <?php echo $statusColor; ?>;"></i> <?php echo "<font color =$statusColor>$statusText </font>"; ?></p>
            <br>

                    <h4 class="light-green-text text-darken-4">Risks</h4>
                    <p class="light-green-text text-darken-4">Severe carb limits can cause your body to break down fat into ketones for energy. This is called ketosis. Ketosis can cause side effects such as:</p>
                    <li><a>Bad Breath</a></li>
                    <li><a>Headache</a></li>
                    <li><a>Fatigue</a></li>
                    <li><a>Weakness</a></li>
                    <br>
                    <p class="light-green-text text-darken-4">If you limit carbs in the long term, it may cause you to have too little of some vitamins or minerals and to have digestive issues.</p>
                    <br>
                    <h4 class="light-green-text text-darken-4">Benefits</h4>
                    <p class="light-green-text text-darken-4">There are five primary functions of carbohydrates in the human body. The following are:</p>
                    <li><a>Energy Production</a></li>
                    <li><a>Energy Storage</a></li>
                    <li><a>Building Macromolecules</a></li>
                    <li><a>Sparing Protein</a></li>
                    <li><a>Assisting Lipid Metabolism</a></li>
                    <br>
                    <h4 class="light-green-text text-darken-4">Recommendations</h4>
                    <p class="light-green-text text-darken-4">Excess carbohydrate intake places a large metabolic load on the body. When the body constantly has high levels of blood sugars (the end point of food sugar and starch) to deal with over time, this leads to weight gain, poor metabolic health and an increased risk of heart disease.</p>
                    <br>
                    <?php
                        // Target and current calories
                        $targetCalories = 3000; // Example target
                        $currentCalories = isset($_SESSION['data']['total_energy']) ? (int)$_SESSION['data']['total_energy'] : 0;

                        // Determine status
                        $status = ($currentCalories >= $targetCalories) ? 'Adequate' : 'Inadequate';

                        // Fetching foods based on status
                        if ($status == 'Adequate') {
                            // User has met or exceeded the target, suggest high-energy foods as general recommendations
                            $query = "SELECT FOOD_NAME, FGROUP, ENERGY FROM foodlist_tbl ORDER BY ENERGY DESC LIMIT 5";
                        } else {
                            // User has not met the target, suggest foods to help reach the target calories
                            $caloriesNeeded = $targetCalories - $currentCalories;
                            $query = "SELECT FOOD_NAME, FGROUP, ENERGY FROM foodlist_tbl WHERE ENERGY <= $caloriesNeeded ORDER BY ENERGY DESC LIMIT 5";
                        }

                        $result = mysqli_query($conn, $query);
                        ?>

                        <h5 class="light-green-text text-darken-4">Food Recommendations</h5>
                        <!-- Display status -->
                        <!-- <p>Status: <span style="color: <?= $status == 'Adequate' ? '#33691e' : '#d32f2f'; ?>;"><?= $status ?></span></p> -->
                        <table class="highlight centered responsive-table">
                            <thead>
                                <tr>
                                    <th>Food Name</th>
                                    <th>Food Group</th>
                                    <th>Energy (kcal)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($row['FOOD_NAME']) ?></td>
                                        <td><?= htmlspecialchars($row['FGROUP']) ?></td>
                                        <td><?= htmlspecialchars($row['ENERGY']) ?></td>

                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>


                </div>
            </div>
        </div>
        <div id="proteinmodal" class="modal modal-sheet">
            <div class="modal-content">
                <div class="card-panel cp1">
                    <h2 class="light-green-text text-darken-4">Protein</h2>
                    <?php
                        $protein = isset($_SESSION['data']['total_protein']) ? (int)$_SESSION['data']['total_protein'] : 0;
                        if ($protein >= 56) {
                            $statusColor = "#33691e"; // Green color for adequate
                            $statusText = "Adequate";
                        } else {
                            $statusColor = "#d32f2f"; // Red color for inadequate
                            $statusText = "Inadequate";
                        }
                        ?>
                        <p class="flow-text black-text text-darken-4 ">Amount Intake: <?php echo "<font color =$statusColor>$protein  g</font>"; ?></p>
                        <p class="flow-text black-text text-darken-4 status">Status: <i class="fa-solid fa-circle" style="color: <?php echo $statusColor; ?>;"></i> <?php echo "<font color =$statusColor>$statusText </font>"; ?></p>

                    <br><br>
                    <h4 class="light-green-text text-darken-4">Risks</h4>
                    <p class="light-green-text text-darken-4">Protein deficiency can cause symptoms such as:</p>
                    <li><a>Swelling</a></li>
                    <li><a>Stunted Growth</a></li>
                    <li><a>Weak Immune System</a></li>
                    <li><a>Skin and Hair Changes</a></li>
                    <li><a>Bone and Muscle Loss</a></li>
                    <br>
                    <p class="light-green-text text-darken-4">The amount of protein you need depends on factors like age and activity levels.</p>
                    <br>
                    <h4 class="light-green-text text-darken-4">Benefits</h4>
                    <p class="light-green-text text-darken-4">Your body uses protein to:</p>
                    <li><a>Build and Repair Body Tissue</a></li>
                    <li><a>Make Enzymes</a></li>
                    <li><a>Energy Metabolism</a></li>
                    <li><a>Optimal Infection Immunity</a></li>
                    <br>
                    <h4 class="light-green-text text-darken-4">Recommendations</h4>
                    <p class="light-green-text text-darken-4">Consuming more protein than the body needs can cause symptoms such as intestinal discomfort, dehydration, nausea, fatigue, headaches, and more. Chronic protein overconsumption can also increase the risk of conditions such as cardiovascular disease, blood vessel disorders, liver and kidney issues, and seizures.</p>
                    <br>
                    <?php
                        // Target and current calories
                        $targetProtein = 56; // Example target
                        $currentProtein = isset($_SESSION['data']['total_protein']) ? (int)$_SESSION['data']['total_protein'] : 0;

                        // Determine status
                        $status = ($currentProtein >= $targetProtein) ? 'Adequate' : 'Inadequate';

                        // Fetching foods based on status
                        if ($status == 'Adequate') {
                            // User has met or exceeded the target, suggest high-energy foods as general recommendations
                            $query = "SELECT FOOD_NAME, FGROUP, PROTEIN FROM foodlist_tbl ORDER BY PROTEIN DESC LIMIT 5";
                        } else {
                            // User has not met the target, suggest foods to help reach the target calories
                            $proteinNeeded = $targetProtein - $currentProtein;
                            $query = "SELECT FOOD_NAME, FGROUP, PROTEIN FROM foodlist_tbl WHERE PROTEIN <= $proteinNeeded ORDER BY PROTEIN DESC LIMIT 5";
                        }

                        $result = mysqli_query($conn, $query);
                        ?>

                        <h5 class="light-green-text text-darken-4">Food Recommendations</h5>
                        <!-- Display status -->
                        <!-- <p>Status: <span style="color: <?= $status == 'Adequate' ? '#33691e' : '#d32f2f'; ?>;"><?= $status ?></span></p> -->
                        <table class="highlight centered responsive-table">
                            <thead>
                                <tr>
                                    <th>Food Name</th>
                                    <th>Food Group</th>
                                    <th>Protein (g)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($row['FOOD_NAME']) ?></td>
                                        <td><?= htmlspecialchars($row['FGROUP']) ?></td>
                                        <td><?= htmlspecialchars($row['PROTEIN']) ?></td>

                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>


                </div>
            </div>
        </div>
        <div id="carbsmodal" class="modal modal-sheet">
            <div class="modal-content">
                <div class="card-panel cp1">
                    <h2 class="light-green-text text-darken-4">Carbohydrates</h2>
                    <?php
                        $carbs = isset($_SESSION['data']['total_carbs']) ? (int)$_SESSION['data']['total_carbs'] : 0;
                        if ($carbs >= 325) {
                            $statusColor = "#33691e"; // Green color for adequate
                            $statusText = "Adequate";
                        } else {
                            $statusColor = "#d32f2f"; // Red color for inadequate
                            $statusText = "Inadequate";
                        }
                        ?>
                        <p class="flow-text black-text text-darken-4 ">Amount Intake: <?php echo "<font color =$statusColor>$carbs  g</font>"; ?></p>
                        <p class="flow-text black-text text-darken-4 status">Status: <i class="fa-solid fa-circle" style="color: <?php echo $statusColor; ?>;"></i> <?php echo "<font color =$statusColor>$statusText </font>"; ?></p>

                    <br><br>
                    <h4 class="light-green-text text-darken-4">Risks</h4>
                    <p class="light-green-text text-darken-4">Health conditions linked to a low fibre diet includes:</p>
                    <li><a>Constipation</a></li>
                    <li><a>Irritable Bowel Syndrome</a></li>
                    <li><a>Diverticulitis</a></li>
                    <li><a>Heart Diseases</a></li>
                    <li><a>Cancer (Bowel)</a></li>
                    <br>
                    <p class="light-green-text text-darken-4">A lack of fiber can lead to both short and long-term health complications.</p>
                    <br>
                    <h4 class="light-green-text text-darken-4">Benefits</h4>
                    <p class="light-green-text text-darken-4">Dietary fiber increases the weight and size of your stool and softens it. A bulky stool is easier to pass, decreasing your chance of constipation. If you have loose, watery stools, fiber may help to solidify the stool because it absorbs water and adds bulk to stool. Helps maintain bowel health.</p>
                    <br>
                    <h4 class="light-green-text text-darken-4">Recommendations</h4>
                    <p class="light-green-text text-darken-4">Eating too much fiber can lead to symptoms such as bloating, gas, abdominal pain, and constipation. In rare cases, people could experience a bowel obstruction or blockage.</p>
                    <br>
                    <?php
                        // Target and current calories
                        $targetCarbs = 325; // Example target
                        $currentCarbs = isset($_SESSION['data']['total_carbs']) ? (int)$_SESSION['data']['total_carbs'] : 0;

                        // Determine status
                        $status = ($currentCarbs >= $targetCarbs) ? 'Adequate' : 'Inadequate';

                        // Fetching foods based on status
                        if ($status == 'Adequate') {
                            // User has met or exceeded the target, suggest high-energy foods as general recommendations
                            $query = "SELECT FOOD_NAME, FGROUP, CARBS FROM foodlist_tbl ORDER BY CARBS DESC LIMIT 5";
                        } else {
                            // User has not met the target, suggest foods to help reach the target calories
                            $carbsNeeded = $targetCarbs - $currentCarbs;
                            $query = "SELECT FOOD_NAME, FGROUP, CARBS FROM foodlist_tbl WHERE CARBS <= $carbsNeeded ORDER BY CARBS DESC LIMIT 5";
                        }

                        $result = mysqli_query($conn, $query);
                        ?>

                        <h5 class="light-green-text text-darken-4">Food Recommendations</h5>
                        <!-- Display status -->
                        <!-- <p>Status: <span style="color: <?= $status == 'Adequate' ? '#33691e' : '#d32f2f'; ?>;"><?= $status ?></span></p> -->
                        <table class="highlight centered responsive-table">
                            <thead>
                                <tr>
                                    <th>Food Name</th>
                                    <th>Food Group</th>
                                    <th>Carbohydrates (g)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($row['FOOD_NAME']) ?></td>
                                        <td><?= htmlspecialchars($row['FGROUP']) ?></td>
                                        <td><?= htmlspecialchars($row['CARBS']) ?></td>

                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
        <div id="fatsmodal" class="modal modal-sheet">
            <div class="modal-content">
                <div class="card-panel cp1">
                    <h2 class="light-green-text text-darken-4">Fats</h2>
                    <?php
                        $fats = isset($_SESSION['data']['total_fats']) ? (int)$_SESSION['data']['total_fats'] : 0;
                        if ($fats >= 78) {
                            $statusColor = "#33691e"; // Green color for adequate
                            $statusText = "Adequate";
                        } else {
                            $statusColor = "#d32f2f"; // Red color for inadequate
                            $statusText = "Inadequate";
                        }
                        ?>
                        <p class="flow-text black-text text-darken-4 ">Amount Intake: <?php echo "<font color =$statusColor>$fats  g</font>"; ?></p>
                        <p class="flow-text black-text text-darken-4 status">Status: <i class="fa-solid fa-circle" style="color: <?php echo $statusColor; ?>;"></i> <?php echo "<font color =$statusColor>$statusText </font>"; ?></p>


                    <br><br>
                    <h4 class="light-green-text text-darken-4">Risks</h4>
                    <p class="light-green-text text-darken-4">Not drinking enough water can increase the risk of:</p>
                    <li><a>Kidney Stones</a></li>
                    <li><a>Urinary Tract Infections (UTIs)</a></li>
                    <li><a>Salivary Gland Malfunction</a></li>
                    <li><a>Dehydration</a></li>
                    <li><a>Fatigue</a></li>
                    <br>
                    <p class="light-green-text text-darken-4">Severe dehydration can lead to dizziness and collapse.</p>
                    <br>
                    <h4 class="light-green-text text-darken-4">Benefits</h4>
                    <p class="light-green-text text-darken-4">Water helps your body:</p>
                    <li><a>Keep a normal temperature.</a></li>
                    <li><a>Lubricate and cushion joints.</a></li>
                    <li><a>Protect your spinal cord and other sensitive tissues.</a></li>
                    <li><a>Get rid of wastes through urination, perspiration, and bowel movements.</a></li>
                    <br>
                    <h4 class="light-green-text text-darken-4">Recommendations</h4>
                    <p class="light-green-text text-darken-4">When you drink too much water, your kidneys can't get rid of the excess water. The sodium content of your blood becomes diluted. This is called hyponatremia and it can be life-threatening.</p>
                    <br>
                    <?php
                        // Target and current calories
                        $targetFats = 78; // Example target
                        $currentFats = isset($_SESSION['data']['total_fats']) ? (int)$_SESSION['data']['total_fats'] : 0;

                        // Determine status
                        $status = ($currentFats >= $targetFats) ? 'Adequate' : 'Inadequate';

                        // Fetching foods based on status
                        if ($status == 'Adequate') {
                            // User has met or exceeded the target, suggest high-energy foods as general recommendations
                            $query = "SELECT FOOD_NAME, FGROUP, FATS FROM foodlist_tbl ORDER BY FATS DESC LIMIT 5";
                        } else {
                            // User has not met the target, suggest foods to help reach the target calories
                            $fatsNeeded = $targetFats - $currentFats;
                            $query = "SELECT FOOD_NAME, FGROUP, FATS FROM foodlist_tbl WHERE  FATS <= $fatsNeeded ORDER BY FATS DESC LIMIT 5";
                        }

                        $result = mysqli_query($conn, $query);
                        ?>

                        <h5 class="light-green-text text-darken-4">Food Recommendations</h5>
                        <!-- Display status -->
                        <!-- <p>Status: <span style="color: <?= $status == 'Adequate' ? '#33691e' : '#d32f2f'; ?>;"><?= $status ?></span></p> -->
                        <table class="highlight centered responsive-table">
                            <thead>
                                <tr>
                                    <th>Food Name</th>
                                    <th>Food Group</th>
                                    <th>Fats (g)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($row['FOOD_NAME']) ?></td>
                                        <td><?= htmlspecialchars($row['FGROUP']) ?></td>
                                        <td><?= htmlspecialchars($row['FATS']) ?></td>

                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
        <div id="fibermodal" class="modal modal-sheet">
            <div class="modal-content">
                <div class="card-panel cp1">
                    <h2 class="light-green-text text-darken-4">Dietary Fiber</h2>
                    <?php
                        $fiber = isset($_SESSION['data']['total_fiber']) ? (int)$_SESSION['data']['total_fiber'] : 0;
                        if ($fiber >= 100) {
                            $statusColor = "#33691e"; // Green color for adequate
                            $statusText = "Adequate";
                        } else {
                            $statusColor = "#d32f2f"; // Red color for inadequate
                            $statusText = "Inadequate";
                        }
                        ?>
                        <p class="flow-text black-text text-darken-4 ">Amount Intake: <?php echo "<font color =$statusColor>$fiber  g</font>"; ?></p>
                        <p class="flow-text black-text text-darken-4 status">Status: <i class="fa-solid fa-circle" style="color: <?php echo $statusColor; ?>;"></i> <?php echo "<font color =$statusColor>$statusText </font>"; ?></p>

                    <br><br>
                    <h4 class="light-green-text text-darken-4">Risks</h4>
                    <p class="light-green-text text-darken-4">Low-fat diet risks include:</p>
                    <li><a>Hormone Imbalances</a></li>
                    <li><a>Insulin Resistance</a></li>
                    <li><a>Weight Gain</a></li>
                    <li><a>Gut Problem</a></li>
                    <li><a>Cognitive Disorders</a></li>
                    <br>
                    <p class="light-green-text text-darken-4">The bottom line. Your body needs dietary fat for many biological processes.</p>
                    <br>
                    <h4 class="light-green-text text-darken-4">Benefits</h4>
                    <p class="light-green-text text-darken-4">A small amount of fat is an essential part of a healthy, balanced diet. Fat is a source of essential fatty acids, which the body cannot make itself. Fat helps the body absorb vitamin A, vitamin D and vitamin E. These vitamins are fat-soluble, which means they can only be absorbed with the help of fats.</p>
                    <br>
                    <h4 class="light-green-text text-darken-4">Recommendations</h4>
                    <p class="light-green-text text-darken-4">Excessive dietary fat intake has been linked to increased risk of obesity, coronary heart disease and certain types of cancer.</p>
                    <br>
                    <?php
                        // Target and current calories
                        $targetFiber = 100; // Example target
                        $currentFiber = isset($_SESSION['data']['total_fiber']) ? (int)$_SESSION['data']['total_fiber'] : 0;

                        // Determine status
                        $status = ($currentFiber >= $targetFiber) ? 'Adequate' : 'Inadequate';

                        // Fetching foods based on status
                        if ($status == 'Adequate') {
                            // User has met or exceeded the target, suggest high-energy foods as general recommendations
                            $query = "SELECT FOOD_NAME, FGROUP, FIBER FROM foodlist_tbl ORDER BY FIBER DESC LIMIT 5";
                        } else {
                            // User has not met the target, suggest foods to help reach the target calories
                            $fiberNeeded = $targetFiber - $currentFiber;
                            $query = "SELECT FOOD_NAME, FGROUP, FIBER FROM foodlist_tbl WHERE  FIBER <= $fiberNeeded ORDER BY FIBER DESC LIMIT 5";
                        }

                        $result = mysqli_query($conn, $query);
                        ?>

                        <h5 class="light-green-text text-darken-4">Food Recommendations</h5>
                        <!-- Display status -->
                        <!-- <p>Status: <span style="color: <?= $status == 'Adequate' ? '#33691e' : '#d32f2f'; ?>;"><?= $status ?></span></p> -->
                        <table class="highlight centered responsive-table">
                            <thead>
                                <tr>
                                    <th>Food Name</th>
                                    <th>Food Group</th>
                                    <th>Fiber (g)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($row['FOOD_NAME']) ?></td>
                                        <td><?= htmlspecialchars($row['FGROUP']) ?></td>
                                        <td><?= htmlspecialchars($row['FIBER']) ?></td>

                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>

                </div>
            </div>
        </div>



    <!-- Micronutrients -->
    <section class="micronutrients">
        <div class="container">
            <h3 class="center nit-h3">Micronutrients</h3>
        </div>
            <div class="carousel cs">

                <a href="#vitcmodal" class="carousel-item cs-item modal-trigger">
                    <div class="row">
                        <div class="col s12">
                          <div class="card-panel <?php echo $vitcClass; ?>">
                              <p class="center">Vitamin C</p>
                              <!-- <p class="center">(kcal)</p> -->
                              <p class="center"><?php echo $vitc; ?> mg</p>
                          </div>
                        </div>
                    </div>
                </a>
                <a href="#vitb12modal" class="carousel-item cs-item modal-trigger">
                    <div class="row">
                        <div class="col s12">
                          <div class="card-panel <?php echo $vitb12Class; ?>">
                              <p class="center">Vitamin B12</p>
                              <!-- <p class="center">(kcal)</p> -->
                              <p class="center"><?php echo $vitb12; ?> μg</p>
                          </div>
                        </div>
                    </div>
                </a>
                <a href="#calciummodal" class="carousel-item cs-item modal-trigger">
                    <div class="row">
                        <div class="col s12">
                          <div class="card-panel <?php echo $calcClass; ?>">
                              <p class="center">Calcium</p>
                              <!-- <p class="center">(kcal)</p> -->
                              <p class="center"><?php echo $calc; ?> mg</p>
                          </div>
                        </div>
                    </div>
                </a>
                <a href="#ironmodal" class="carousel-item cs-item modal-trigger">
                    <div class="row">
                        <div class="col s12">
                          <div class="card-panel <?php echo $ironClass; ?>">
                              <p class="center">Iron</p>
                              <!-- <p class="center">(kcal)</p> -->
                              <p class="center"><?php echo $iron; ?> mg</p>
                          </div>
                        </div>
                    </div>
                </a>
                <a href="#zincmodal" class="carousel-item cs-item modal-trigger">
                    <div class="row">
                        <div class="col s12">
                          <div class="card-panel <?php echo $zincClass; ?>">
                              <p class="center">Zinc</p>
                              <!-- <p class="center">(kcal)</p> -->
                              <p class="center"><?php echo $zinc; ?> mg</p>
                          </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Modal Structure for Micronutrients -->
            <div id="vitcmodal" class="modal modal-sheet">
                <div class="modal-content">
                    <div class="card-panel cp1">
                        <h2 class="light-green-text text-darken-4">Vitamin C</h2>
                        <?php
                            $vitc = isset($_SESSION['data']['total_vitc']) ? (int)$_SESSION['data']['total_vitc'] : 0;
                            if ($vitc >= 90) {
                                $statusColor = "#33691e"; // Green color for adequate
                                $statusText = "Adequate";
                            } else {
                                $statusColor = "#d32f2f"; // Red color for inadequate
                                $statusText = "Inadequate";
                            }
                            ?>
                            <p class="flow-text black-text text-darken-4 ">Amount Intake: <?php echo "<font color =$statusColor>$vitc  mg</font>"; ?></p>
                            <p class="flow-text black-text text-darken-4 status">Status: <i class="fa-solid fa-circle" style="color: <?php echo $statusColor; ?>;"></i> <?php echo "<font color =$statusColor>$statusText </font>"; ?></p>



                        <br><br>
                        <h4 class="light-green-text text-darken-4">Risks</h4>
                        <p class="light-green-text text-darken-4">Vitamin B12 deficiency might result to:</p>
                        <li><a>Weak Muscles and Numbness</a></li>
                        <li><a>Trouble Walking</a></li>
                        <li><a>Nausea</a></li>
                        <li><a>Weight Loss</a></li>
                        <li><a>Irritability, Fatigue, And Increased Heart Rate</a></li>
                        <br>
                        <p class="light-green-text text-darken-4">Some stomach conditions or stomach operations can prevent the absorption vitamin B12. For example, a gastrectomy, increases your risk of developing a vitamin B12 deficiency.</p>
                        <br>
                        <h4 class="light-green-text text-darken-4">Benefits</h4>
                        <p class="light-green-text text-darken-4">Vitamin B12 is a nutrient that helps keep your body's blood and nerve cells healthy and helps make DNA, the genetic material in all of your cells. Vitamin B12 also helps prevent megaloblastic anemia, a blood condition that makes people tired and weak.</p>
                        <br>
                        <h4 class="light-green-text text-darken-4">Recommendations</h4>
                        <p class="light-green-text text-darken-4">High doses of vitamin B-12, such as those used to treat a deficiency, might cause: Headache. Nausea and vomiting with diarrhea.</p>
                        <br>
                        <?php
                            // Target and current calories
                            $targetVitc = 90; // Example target
                            $currentVitc = isset($_SESSION['data']['total_vitc']) ? (int)$_SESSION['data']['total_vitc'] : 0;

                            // Determine status
                            $status = ($currentVitc >= $targetVitc) ? 'Adequate' : 'Inadequate';

                            // Fetching foods based on status
                            if ($status == 'Adequate') {
                                // User has met or exceeded the target, suggest high-energy foods as general recommendations
                                $query = "SELECT FOOD_NAME, FGROUP, VITC FROM foodlist_tbl ORDER BY VITC DESC LIMIT 5";
                            } else {
                                // User has not met the target, suggest foods to help reach the target calories
                                $vitcNeeded = $targetVitc - $currentVitc;
                                $query = "SELECT FOOD_NAME, FGROUP, VITC FROM foodlist_tbl WHERE  VITC <= $vitcNeeded ORDER BY VITC DESC LIMIT 5";
                            }

                            $result = mysqli_query($conn, $query);
                            ?>

                            <h5 class="light-green-text text-darken-4">Food Recommendations</h5>
                            <!-- Display status -->
                            <!-- <p>Status: <span style="color: <?= $status == 'Adequate' ? '#33691e' : '#d32f2f'; ?>;"><?= $status ?></span></p> -->
                            <table class="highlight centered responsive-table">
                                <thead>
                                    <tr>
                                        <th>Food Name</th>
                                        <th>Food Group</th>
                                        <th>Vitamin C (mg)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($row['FOOD_NAME']) ?></td>
                                            <td><?= htmlspecialchars($row['FGROUP']) ?></td>
                                            <td><?= htmlspecialchars($row['VITC']) ?></td>

                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
            <div id="vitb12modal" class="modal modal-sheet">
                <div class="modal-content">
                    <div class="card-panel cp1">
                        <h2 class="light-green-text text-darken-4">Vitamin B12</h2>
                        <?php
                            $vitb12 = isset($_SESSION['data']['total_vitb12']) ? (int)$_SESSION['data']['total_vitb12'] : 0;
                            if ($vitb12 >= 2.4) {
                                $statusColor = "#33691e"; // Green color for adequate
                                $statusText = "Adequate";
                            } else {
                                $statusColor = "#d32f2f"; // Red color for inadequate
                                $statusText = "Inadequate";
                            }
                            ?>
                            <p class="flow-text black-text text-darken-4 ">Amount Intake: <?php echo "<font color =$statusColor>$vitb12  mg</font>"; ?></p>
                            <p class="flow-text black-text text-darken-4 status">Status: <i class="fa-solid fa-circle" style="color: <?php echo $statusColor; ?>;"></i> <?php echo "<font color =$statusColor>$statusText </font>"; ?></p>



                        <br><br>
                        <h4 class="light-green-text text-darken-4">Risks</h4>
                        <p class="light-green-text text-darken-4">Vitamin C (ascorbic acid) is essential for the formation, growth, and repair of bone, skin, and connective tissue (which binds other tissues and organs together and includes tendons, ligaments, and blood vessels).</p>
                        <br>
                        <h4 class="light-green-text text-darken-4">Scurvy</h4>
                        <p class="light-green-text text-darken-4">Severe vitamin C deficiency causes scurvy. Scurvy in infants is rare because breast milk usually supplies enough vitamin C and infant formulas are fortified with the vitamin. Scurvy is rare in the United States but may occur in people with alcohol use disorder and older people who are malnourished.</p>
                        <br>
                        <h4 class="light-green-text text-darken-4">Benefits</h4>
                        <p class="light-green-text text-darken-4">Vitamin C is touted for its many health benefits:</p>
                        <li><a>Boost Immunity</a></li>
                        <li><a>Improves Heart Health</a></li>
                        <li><a>Bolsters Iron Absorption</a></li>
                        <br>
                        <h4 class="light-green-text text-darken-4">Recommendations</h4>
                        <p class="light-green-text text-darken-4">Serious side effects from too much vitamin C are very rare, because the body cannot store the vitamin. However, amounts greater than 2,000 mg/day are not recommended. Doses this high can lead to stomach upset and diarrhea, and rarely, kidney stones.</p>
                        <br>
                        <?php
                            // Target and current calories
                            $targetVitb12 = 2.4; // Example target
                            $currentVitb12 = isset($_SESSION['data']['total_vitb12']) ? (int)$_SESSION['data']['total_vitb12'] : 0;

                            // Determine status
                            $status = ($currentVitb12 >= $targetVitb12) ? 'Adequate' : 'Inadequate';

                            // Fetching foods based on status
                            if ($status == 'Adequate') {
                                // User has met or exceeded the target, suggest high-energy foods as general recommendations
                                $query = "SELECT FOOD_NAME, FGROUP, VITB12 FROM foodlist_tbl ORDER BY VITB12 DESC LIMIT 5";
                            } else {
                                // User has not met the target, suggest foods to help reach the target calories
                                $vitb12Needed = $targetVitb12 - $currentVitb12;
                                $query = "SELECT FOOD_NAME, FGROUP, VITB12 FROM foodlist_tbl WHERE  VITB12 <= $vitb12Needed ORDER BY VITB12 DESC LIMIT 5";
                            }

                            $result = mysqli_query($conn, $query);
                            ?>

                            <h5 class="light-green-text text-darken-4">Food Recommendations</h5>
                            <!-- Display status -->
                            <!-- <p>Status: <span style="color: <?= $status == 'Adequate' ? '#33691e' : '#d32f2f'; ?>;"><?= $status ?></span></p> -->
                            <table class="highlight centered responsive-table">
                                <thead>
                                    <tr>
                                        <th>Food Name</th>
                                        <th>Food Group</th>
                                        <th>Vitamin B12 (mg)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($row['FOOD_NAME']) ?></td>
                                            <td><?= htmlspecialchars($row['FGROUP']) ?></td>
                                            <td><?= htmlspecialchars($row['VITB12']) ?></td>

                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
            <div id="calciummodal" class="modal modal-sheet">
                <div class="modal-content">
                    <div class="card-panel cp1">
                        <h2 class="light-green-text text-darken-4">Calcium</h2>
                        <?php
                            $calcium = isset($_SESSION['data']['total_calcium']) ? (int)$_SESSION['data']['total_calcium'] : 0;
                            if ($calcium >= 1000) {
                                $statusColor = "#33691e"; // Green color for adequate
                                $statusText = "Adequate";
                            } else {
                                $statusColor = "#d32f2f"; // Red color for inadequate
                                $statusText = "Inadequate";
                            }
                            ?>
                            <p class="flow-text black-text text-darken-4 ">Amount Intake: <?php echo "<font color =$statusColor>$calcium  mg</font>"; ?></p>
                            <p class="flow-text black-text text-darken-4 status">Status: <i class="fa-solid fa-circle" style="color: <?php echo $statusColor; ?>;"></i> <?php echo "<font color =$statusColor>$statusText </font>"; ?></p>


                        <br><br>
                        <h4 class="light-green-text text-darken-4">Risks</h4>
                        <p class="light-green-text text-darken-4">Inadequate calcium intake in adults can lead to various health risks and complications, as calcium is an essential mineral with crucial functions in the body.</p>
                        <li><a>Osteopenia</a></li>
                        <li><a>Osteoporosis</a></li>
                        <li><a>Cataracts</a></li>
                        <li><a>Dental Changes</a></li>
                        <li><a>Muscle Problems</a></li>
                        <br>
                        <p class="light-green-text text-darken-4">Inadequate calcium intake over the long-term can contribute to the development of osteoporosis, a condition characterized by weakened and brittle bones.</p>
                        <br>
                        <h4 class="light-green-text text-darken-4">Benefits</h4>
                        <p class="light-green-text text-darken-4">Calcium is essential for adults for:</p>
                        <li><a>Bone Health, Teeth Health</a></li>
                        <li><a>Muscle Function, Blood Clotting</a></li>
                        <li><a>Nerve Transmission</a></li>
                        <br>
                        <h4 class="light-green-text text-darken-4">Recommendations</h4>
                        <p class="light-green-text text-darken-4">However, excessive calcium intake can lead to hypercalcemia and kidney stones.It's advisable to consult with a healthcare professional to determine individual needs and ensure a balanced and healthy diet.</p>
                        <br>
                        <?php
                            // Target and current calories
                            $targetCalcium = 1000; // Example target
                            $currentCalcium = isset($_SESSION['data']['total_calcium']) ? (int)$_SESSION['data']['total_calcium'] : 0;

                            // Determine status
                            $status = ($currentCalcium >= $targetCalcium) ? 'Adequate' : 'Inadequate';

                            // Fetching foods based on status
                            if ($status == 'Adequate') {
                                // User has met or exceeded the target, suggest high-energy foods as general recommendations
                                $query = "SELECT FOOD_NAME, FGROUP, CALCIUM FROM foodlist_tbl ORDER BY CALCIUM DESC LIMIT 5";
                            } else {
                                // User has not met the target, suggest foods to help reach the target calories
                                $calciumNeeded = $targetCalcium - $currentCalcium;
                                $query = "SELECT FOOD_NAME, FGROUP, CALCIUM FROM foodlist_tbl WHERE  CALCIUM <= $calciumNeeded ORDER BY CALCIUM DESC LIMIT 5";
                            }

                            $result = mysqli_query($conn, $query);
                            ?>

                            <h5 class="light-green-text text-darken-4">Food Recommendations</h5>
                            <!-- Display status -->
                            <!-- <p>Status: <span style="color: <?= $status == 'Adequate' ? '#33691e' : '#d32f2f'; ?>;"><?= $status ?></span></p> -->
                            <table class="highlight centered responsive-table">
                                <thead>
                                    <tr>
                                        <th>Food Name</th>
                                        <th>Food Group</th>
                                        <th>Calcium (mg)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($row['FOOD_NAME']) ?></td>
                                            <td><?= htmlspecialchars($row['FGROUP']) ?></td>
                                            <td><?= htmlspecialchars($row['CALCIUM']) ?></td>

                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
            <div id="ironmodal" class="modal modal-sheet">
                <div class="modal-content">
                    <div class="card-panel cp1">
                        <h2 class="light-green-text text-darken-4">Iron</h2>
                        <?php
                            $iron = isset($_SESSION['data']['total_iron']) ? (int)$_SESSION['data']['total_iron'] : 0;
                            if ($iron >= 18) {
                                $statusColor = "#33691e"; // Green color for adequate
                                $statusText = "Adequate";
                            } else {
                                $statusColor = "#d32f2f"; // Red color for inadequate
                                $statusText = "Inadequate";
                            }
                            ?>
                            <p class="flow-text black-text text-darken-4 ">Amount Intake: <?php echo "<font color =$statusColor>$iron  g</font>"; ?></p>
                            <p class="flow-text black-text text-darken-4 status">Status: <i class="fa-solid fa-circle" style="color: <?php echo $statusColor; ?>;"></i> <?php echo "<font color =$statusColor>$statusText </font>"; ?></p>



                        <br><br>
                        <h4 class="light-green-text text-darken-4">Risks</h4>
                        <p class="light-green-text text-darken-4">Without enough iron, your body can't produce enough of a substance in red blood cells that enables them to carry oxygen (hemoglobin). Iron deficiency can also cause:</p>
                        <li><a>Being pale or having yellow "sallow" skin.</a></li>
                        <li><a>Unexplained fatigue or lack of energy</a></li>
                        <li><a>Shortness of breath or chest pain</a></li>
                        <li><a>Unexplained generalized weakness</a></li>
                        <li><a>Rapid heartbeat</a></li>
                        <br>
                        <p class="light-green-text text-darken-4">As a result, iron deficiency anemia may leave you tired and short of breath.</p>
                        <br>
                        <h4 class="light-green-text text-darken-4">Benefits</h4>
                        <p class="light-green-text text-darken-4">Iron is a mineral that the body needs for growth and development. Your body uses iron to make hemoglobin, a protein in red blood cells that carries oxygen from the lungs to all parts of the body, and myoglobin, a protein that provides oxygen to muscles. Your body also needs iron to make some hormones.</p>
                        <br>
                        <h4 class="light-green-text text-darken-4">Recommendations</h4>
                        <p class="light-green-text text-darken-4">Large amounts of iron might also cause more serious effects, including inflammation of the stomach lining and ulcers. High doses of iron can also decrease zinc absorption. Extremely high doses of iron (in the hundreds or thousands of mg) can cause organ failure, coma, convulsions, and death.</p>
                        <br>
                        <?php
                            // Target and current calories
                            $targetIron = 18; // Example target
                            $currentIron= isset($_SESSION['data']['total_iron']) ? (int)$_SESSION['data']['total_iron'] : 0;

                            // Determine status
                            $status = ($currentIron >= $targetIron) ? 'Adequate' : 'Inadequate';

                            // Fetching foods based on status
                            if ($status == 'Adequate') {
                                // User has met or exceeded the target, suggest high-energy foods as general recommendations
                                $query = "SELECT FOOD_NAME, FGROUP, IRON FROM foodlist_tbl ORDER BY IRON DESC LIMIT 5";
                            } else {
                                // User has not met the target, suggest foods to help reach the target calories
                                $ironNeeded = $targetIron - $currentIron;
                                $query = "SELECT FOOD_NAME, FGROUP, IRON FROM foodlist_tbl WHERE  IRON <= $ironNeeded ORDER BY IRON DESC LIMIT 5";
                            }

                            $result = mysqli_query($conn, $query);
                            ?>

                            <h5 class="light-green-text text-darken-4">Food Recommendations</h5>
                            <!-- Display status -->
                            <!-- <p>Status: <span style="color: <?= $status == 'Adequate' ? '#33691e' : '#d32f2f'; ?>;"><?= $status ?></span></p> -->
                            <table class="highlight centered responsive-table">
                                <thead>
                                    <tr>
                                        <th>Food Name</th>
                                        <th>Food Group</th>
                                        <th>Iron (mg)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($row['FOOD_NAME']) ?></td>
                                            <td><?= htmlspecialchars($row['FGROUP']) ?></td>
                                            <td><?= htmlspecialchars($row['IRON']) ?></td>

                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
            <div id="zincmodal" class="modal modal-sheet">
                <div class="modal-content">
                    <div class="card-panel cp1">
                        <h2 class="light-green-text text-darken-4">Zinc</h2>
                        <?php
                            $zinc = isset($_SESSION['data']['total_zinc']) ? (int)$_SESSION['data']['total_zinc'] : 0;
                            if ($zinc >= 11) {
                                $statusColor = "#33691e"; // Green color for adequate
                                $statusText = "Adequate";
                            } else {
                                $statusColor = "#d32f2f"; // Red color for inadequate
                                $statusText = "Inadequate";
                            }
                            ?>
                            <p class="flow-text black-text text-darken-4 ">Amount Intake: <?php echo "<font color =$statusColor>$zinc  mg</font>"; ?></p>
                            <p class="flow-text black-text text-darken-4 status">Status: <i class="fa-solid fa-circle" style="color: <?php echo $statusColor; ?>;"></i> <?php echo "<font color =$statusColor>$statusText </font>"; ?></p>


                        <br><br>
                        <h4 class="light-green-text text-darken-4">Risks</h4>
                        <p class="light-green-text text-darken-4">Zinc deficiency can result in:</p>
                        <li><a>Skin Eczema</a></li>
                        <li><a>Diabetes Mellitus</a></li>
                        <li><a>Obesity</a></li>
                        <li><a>Dermatitis</a></li>
                        <li><a>Cheilitis</a></li>
                        <br>
                        <p class="light-green-text text-darken-4">Zinc deficiency can happen in people who have problems absorbing nutrients from food, for example, older people and those who have some gastrointestinal (gut) problems.</p>
                        <br>
                        <h4 class="light-green-text text-darken-4">Benefits</h4>
                        <p class="light-green-text text-darken-4">Zinc is a mineral that is essential for many of the body's normal functions and systems, including:</p>
                        <li><a>The Immune System</a></li>
                        <li><a>Wound Healing</a></li>
                        <li><a>Blood Clotting</a></li>
                        <li><a>Thyroid Function</a></li>
                        <li><a>Senses Of Taste and Smell</a></li>
                        <br>
                        <h4 class="light-green-text text-darken-4">Recommendations</h4>
                        <p class="light-green-text text-darken-4">If you take too much zinc for a long time, you could have problems such as lower immunity, low levels of high-density lipoprotein (HDL) (good) cholesterol, and low copper levels.</p>
                        <br>
                        <?php
                            // Target and current calories
                            $targetZinc = 11; // Example target
                            $currentZinc= isset($_SESSION['data']['total_zinc']) ? (int)$_SESSION['data']['total_zinc'] : 0;

                            // Determine status
                            $status = ($currentZinc >= $targetZinc) ? 'Adequate' : 'Inadequate';

                            // Fetching foods based on status
                            if ($status == 'Adequate') {
                                // User has met or exceeded the target, suggest high-energy foods as general recommendations
                                $query = "SELECT FOOD_NAME, FGROUP, ZINC FROM foodlist_tbl ORDER BY ZINC DESC LIMIT 5";
                            } else {
                                // User has not met the target, suggest foods to help reach the target calories
                                $zincNeeded = $targetZinc - $currentZinc;
                                $query = "SELECT FOOD_NAME, FGROUP, ZINC FROM foodlist_tbl WHERE  ZINC <= $zincNeeded ORDER BY ZINC DESC LIMIT 5";
                            }

                            $result = mysqli_query($conn, $query);
                            ?>

                            <h5 class="light-green-text text-darken-4">Food Recommendations</h5>
                            <!-- Display status -->
                            <!-- <p>Status: <span style="color: <?= $status == 'Adequate' ? '#33691e' : '#d32f2f'; ?>;"><?= $status ?></span></p> -->
                            <table class="highlight centered responsive-table">
                                <thead>
                                    <tr>
                                        <th>Food Name</th>
                                        <th>Food Group</th>
                                        <th>Zinc (mg)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($row['FOOD_NAME']) ?></td>
                                            <td><?= htmlspecialchars($row['FGROUP']) ?></td>
                                            <td><?= htmlspecialchars($row['ZINC']) ?></td>

                                        </tr>
                                    <?php endwhile; ?>
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
