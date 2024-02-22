<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = mysqli_connect('localhost', 'root', '', 'nourishu_db');
    // Include first_name in the SELECT query
    $query = "SELECT ID, FN FROM userinfo_tbl WHERE EMAIL='$email' AND PW='$password'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $user = mysqli_fetch_assoc($result); // Fetch the user's data
        $_SESSION['email'] = $email;
        // Make sure you fetch the correct column for the first name
        $_SESSION['first_name'] = $user['FN']; // Assuming 'FN' is the column name for the first name
        $_SESSION['user_id'] = $user['ID']; // Store the ID in session
        // URL-encode the first name to ensure it's a valid URL part
        $firstNameUrl = urlencode($user['FN']);
          $userId = $user['ID'];
       header("Location: pdri.php?firstname=$firstNameUrl&id=$userId");
        exit();
    } else {
        // Handle login failure
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neuton:ital,wght@0,200;0,300;0,400;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Avant+Garde+Gothic" rel="stylesheet">
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

    <title>Login | NourishU</title>
</head>
<body>

    <div class="container">

        <img src="images/Text+Logo.png" class="center responsive-img logo-img" alt="">

        <h4 class="center light-green-text text-darken-4 header-text">Login</h4>

        <div class="row">
            <form action="" method="POST" class="col s12">
                <div class="row">
                  <div class="input-field col s12 center email">
                      <input autocomplete="off" name="email" id="email" type="email" required>
                      <label for="email" class="light-green-text text-darken-4">Email or phone number</label>
                  </div>
                  <div class="input-field col s12 password">
                      <input autocomplete="off" name="password" id="password" type="password" required>
                      <label for="password" class="light-green-text text-darken-4">Password</label>
                  </div>
                </div>
                <button type="submit" name="login" class="create-btn">Log in</button>

            </form>
            <?php if(isset($_POST['login'])): ?>
            <p class="error-message" style="color: red">Invalid email or password. Please try again.</p>
        <?php endif; ?>
      </div>

        <p class="flow-text center">Don't have an account? Sign Up <a class="sign-up-btn modal-trigger" data-target="modal1">here</a></p>
    </div>

    <!-- Sign Up Structure Mobile & Tablet -->
    <div class="modal modal-sheet" id="modal1">
        <div class="modal-content">
            <div class="row center-align">
                <div class="col s12">
                    <div class="card-panel cp1">
                        <img src="images/AppLogo.png" height="100px" alt="">
                        <br><br><br>
                        <h4 class="center light-green-text text-accent-4">Get started.</h4>
                        <p>Fill-in the necessary information to get you started.</p>
                        <br><br>
                        <div class="row">
                          <form action="signup_handler.php" method="POST" class="col s12">
    <div class="input-field col s12 center email">
        <input name="email" id="email" type="email" required>
        <label for="email" class="light-green-text text-darken-4">Email or phone number</label>
    </div>
    <div class="input-field col s12 password">
        <input name="password" id="password" type="password" required>
        <label for="password" class="light-green-text text-darken-4">Password</label>
    </div>
    <div class="input-field col s6 center fname">
        <input name="fname" id="fname" type="text" required>
        <label for="fname" class="light-green-text text-darken-4">First Name</label>
    </div>
    <div class="input-field col s6 center lname">
        <input name="lname" id="lname" type="text" required>
        <label for="lname" class="light-green-text text-darken-4">Last Name</label>
    </div>
    <div class="input-field col s12 center bdate">
        <input name="bdate" id="bdate" type="date" required>
        <label for="bdate" class="light-green-text text-darken-4">Birthdate</label>
    </div>
    <div class="input-field col s6 center age">
        <input name="age" id="age" type="number" required>
        <label for="age" class="light-green-text text-darken-4">Age</label>
    </div>
    <div class="input-field col s6 center sex">
        <input name="sex" id="sex" type="text" required>
        <label for="sex" class="light-green-text text-darken-4">Sex</label>
    </div>
    <div class="input-field col s12 center weight">
        <input name="weight" id="weight" type="number" required>
        <label for="weight" class="light-green-text text-darken-4">Weight(kg)</label>
    </div>
    <div class="input-field col s12 center height">
        <input name="height" id="height" type="number" required>
        <label for="height" class="light-green-text text-darken-4">Height(cm)</label>
    </div>
    <button type="submit" name="signup" class="create-btn">Create account</button>
</form>

                        </div>

                        <p>By creating an account, you agree to NourishU's <a href="" class="sign-up-btn">Privacy Policy</a> and <a href="" class="sign-up-btn">Terms of Use.</a></p>
                        <br><br>

                        <p>Already a member? <a href="" class="sign-up-btn">Sign in.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <img src="images/Food Bowl.png" class="login-bg-img responsive-img"alt="">


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
