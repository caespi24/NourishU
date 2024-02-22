<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // If the user ID is not set, redirect to login page
    header("Location: index.php");
    exit();
}

// Include your database connection code here
$conn = mysqli_connect('localhost', 'root', '', 'nourishu_db');
if (!$conn) {
    die("Connection failed: " . mysqli_error($conn));
}

$userId = $_SESSION['user_id'];

// Prepare a statement to avoid SQL injection
$stmt = $conn->prepare("SELECT * FROM userinfo_tbl WHERE ID = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $userInfo = $result->fetch_assoc();
    // Now you can use $userInfo['column_name'] to access user information
} else {
    echo "No user found.";
}
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

    <!-- Account -->
    <div class="container">
        <!-- Back button -->
        <br>
        <a href="main.php" class="back-btn"><i class="material-icons">arrow_back</i></a>
        <div class="about-account-img1"></div>
        <div class="row">
          <div class="col s7">
            <h5 class="left nit-h3">Account Information</h5>
          </div>
          <div class="col s5">
            <!-- Switch -->
            <div class="switch" style="padding: 1rem 0">
              <label>
                Off
                <input type="checkbox" id="mySwitch">
                <span class="lever"></span>
                On
              </label>
            </div>
          </div>
        </div>
        <br><br><br><br>
        <div class="row">
            <!-- <form action="" class="col s12"> -->
              <form action="updateAccountInfo.php" method="POST" class="col s12">
                <div class="input-field col s6 center fname">
                  <input class="fname" id="fname" placeholder="First Name" type="text" value="<?php echo htmlspecialchars($userInfo['FN']); ?>" disabled required>

                    <!-- <input class="fname" id="fname" placeholder="First Name" type="text" readonly required> -->
                    <label for="fname">First Name</label>
                </div>
                <div class="input-field col s6 center lname">

                    <input class="lname" id="lname" placeholder="Last Name" type="text" value="<?php echo htmlspecialchars($userInfo['LN']); ?>" disabled required>
                    <label for="lname">Last Name</label>
                </div>
                <br><br><br><br>
                <div class="input-field col s12 center bdate">
                    <input class="bdate-up" id="bdate" placeholder="Birthdate" type="text" value="<?php echo htmlspecialchars($userInfo['BDATE']); ?>" disabled required>
                    <label for="bdate">Birthdate</label>
                </div>
                <br><br><br><br>
                <div class="input-field col s6 center age">
                    <input class="age" id="age" placeholder="Age" type="text" value="<?php echo htmlspecialchars($userInfo['AGE']); ?>" disabled required>
                    <label for="age">Age</label>
                </div>

                <div class="input-field col s6 center sex">
                    <input class="sex" id="sex" placeholder="Sex" type="text" value="<?php echo htmlspecialchars($userInfo['SEX']); ?>" disabled required>
                    <label for="sex">Sex</label>
                </div>
                <br><br><br><br>
                <div class="input-field col s12 center weight">
                    <input class="weight" id="weight" placeholder="Weight(kg)" type="text" value="<?php echo htmlspecialchars($userInfo['WEIGHT']); ?>" disabled required>
                    <label for="weight">Weight</label>
                </div>
                <br><br><br><br>
                <div class="input-field col s12 center height">
                    <input class="height" id="height" placeholder="Height(cm)" type="text" value="<?php echo htmlspecialchars($userInfo['HEIGHT']); ?>" disabled required>
                    <label for="height">Height</label>
                </div>
                <button class="create-btn" type="submit" id="edit-btn" disabled><i class="left material-icons">mode_edit</i>Update</button>
            </form>
        </div>

        <button class="sign-out-btn"><i class="left material-icons">exit_to_app</i>Sign Out</button>
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
