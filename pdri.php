<?php
session_start();
if (isset($_GET['firstname']) && isset($_GET['id'])) {
    $firstName = htmlspecialchars($_GET['firstname']);
    $userId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); // Validate ID as integer

    if (false === $userId) {
        // Handle the case where ID is not valid
        echo "Invalid ID.";
    } else {
        // Proceed with using $firstName and $userId
    //    echo "<script>alert('Welcome, " . $firstName . "');</script>";
        // You can use $userId as needed here
    }
} else {
    header("Location: index.php"); // Redirect if required parameters are missing
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
    <!-- PDRI slider -->
    <div class="container">
        <div class="carousel carousel-slider center pdri-cs">
            <!-- <div class="carousel-fixed-item center">
            </div> -->
            <div class="carousel-item black-text pdri-items" href="#one!">
                <div class="flex-container">
                    <div class="pdri-img1"></div>
                <h5>Are you making sure to nourish your body with the nutrients it needs everyday?</h5>
                <h5 class="center swipe-text-right">Swipe <i class="fa-solid fa-angles-right swipe-text"></i></h5>
                </div>

            </div>

            <div class="carousel-item black-text pdri-items-long" href="#two!">
                <h4>According to PDRI, </h4>
                <div class="pdri-img2"></div>
                <h5 class="center swipe-text-down">Swipe <i class="fa-solid fa-angles-down"></i></h5>
                <p>our body needs the following nutrients every single day:</p>
                <table class="highlight centered">
                    <thead>
                        <tr>
                            <th>Nutrion</th>
                            <th>Unit</th>
                            <th>Values</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Energy</td>
                            <td>kcal</td>
                            <td>1,800 - 3,000</td>
                        </tr>
                        <tr>
                            <td>Protein</td>
                            <td>g</td>
                            <td>45 - 56</td>
                        </tr>
                        <tr>
                            <td>Carbohydrates</td>
                            <td>g</td>
                            <td>225 - 325</td>
                        </tr>
                        <tr>
                            <td>Fats</td>
                            <td>g</td>
                            <td>44 - 78</td>
                        </tr>
                        <tr>
                            <td>Dietary Fiber</td>
                            <td>g</td>
                            <td>25 - 38</td>
                        </tr>
                        <tr>
                            <td>Vitamin A</td>
                            <td>μg</td>
                            <td>700 - 900</td>
                        </tr>
                        <tr>
                            <td>Vitamin C</td>
                            <td>mg</td>
                            <td>75 - 90</td>
                        </tr>
                        <tr>
                            <td>Vitamin B12</td>
                            <td>μg</td>
                            <td>2.4 (Supplementation may be necessary for vegetarians)</td>
                        </tr>
                        <tr>
                            <td>Choline</td>
                            <td>mg</td>
                            <td>400 - 550</td>
                        </tr>
                        <tr>
                            <td>Calcium</td>
                            <td>mg</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>Magnesium</td>
                            <td>mg</td>
                            <td>310 - 400</td>
                        </tr>
                        <tr>
                            <td>Potassium</td>
                            <td>mg</td>
                            <td>2,600 - 3,400</td>
                        </tr>
                        <tr>
                            <td>Iron</td>
                            <td>mg</td>
                            <td>8 for men | 18 for women (Vegetarians may need more)</td>
                        </tr>
                        <tr>
                            <td>Zinc</td>
                            <td>mg</td>
                            <td>8 - 11</td>
                        </tr>
                        <tr>
                            <td>Vitamin D</td>
                            <td>IU</td>
                            <td>600 - 800</td>
                        </tr>
                        <tr>
                            <td>Vitamin E</td>
                            <td>mg</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Vitamin K</td>
                            <td>μg</td>
                            <td>75 - 120</td>
                        </tr>
                        <tr>
                            <td>Thiamin</td>
                            <td>mg</td>
                            <td>1.1 - 1.2</td>
                        </tr>
                        <tr>
                            <td>Riboflavin</td>
                            <td>mg</td>
                            <td>1.1 - 1.3</td>
                        </tr>
                        <tr>
                            <td>Vitamin B6</td>
                            <td>mg</td>
                            <td>1.3 - 1.7</td>
                        </tr>
                        <tr>
                            <td>Folate</td>
                            <td>μg</td>
                            <td>400</td>
                        </tr>
                        <tr>
                            <td>Selenium</td>
                            <td>μg</td>
                            <td>55</td>
                        </tr>
                        <tr>
                            <td>Iodine</td>
                            <td>μg</td>
                            <td>150</td>
                        </tr>
                        <tr>
                            <td>Phosphorus</td>
                            <td>mg</td>
                            <td>700</td>
                        </tr>
                        <tr>
                            <td>Flouride</td>
                            <td>mg</td>
                            <td>3.1 - 3.8</td>
                        </tr>
                        <tr>
                            <td>Sodium</td>
                            <td>mg</td>
                            <td>Less than 2,300</td>
                        </tr>
                        <tr>
                            <td>Chloride</td>
                            <td>mg</td>
                            <td>2,300 - 3,400</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p>Do you meet them everyday?</p>
                <h5 class="center swipe-text-right">Swipe <i class="fa-solid fa-angles-right swipe-text"></i></h5>
            </div>
            <div class="carousel-item black-text pdri-items" href="#three!">
                <div class="pdri-img3"></div>
                <h6 class="center nu-h6">Discover a healthier U with NourishU:</h6>
                <h6 class="center nu-h6">Lifelong Wellness through Nutrition!</h6>
                <h6 class="center nu-h6p">This easy-to-use food logger app, grounded in PDRI's nutrition guidelines, simplifies tracking your meals and nutritional intake. Whether you're embracing vegetarianism or striving for a well-rounded diet, NourishU is here to guide you towards your dietary objectives. Begin your path to improved health and wellness with NourishU today!</h6>
                <br>
                <a href="main.php" class="pdri-btn">Get Started</a>
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
</body>
</html>
