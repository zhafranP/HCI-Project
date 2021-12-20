<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <title>Survey Vaksinasi - Main</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-75 fw-bold">
        <div class="container " style="font-family: 'Manrope', sans-serif">
            <a class="navbar-brand" href="#">Survey Vaksinasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-auto" id="navbarNavDarkDropdown">
                <ul class="navbar-nav ms-auto">
                    <?php
                        if (isset($_SESSION["useruid"])) {
                            echo "<li class='nav-item'><a href='profile.php' class='nav-link text-light'>Hai, " . $_SESSION["username"] . "!</a></li>";
                            echo "<li class='nav-item px-2'><a href='includes/logout.inc.php' class='nav-link text-light'>Logout</a></li>";
                          
                          if ($_SESSION["useruid"] == "admin") {
                                echo "<li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDarkDropdownMenuLink\" role=\"button\"
                                            data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            Menu
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"navbarDarkDropdownMenuLink\">
                                            <li><a class=\"dropdown-item\" href=\"result.php\">Dashboard</a></li>
                                        </ul>
                                      </li>";
                            }
                        }
                        else {
                            echo "<li class='nav-item px-2'><a href='login.php' class='nav-link text-light'>Login</a></li>";
                            echo "<li class='nav-item px-2'><a href='signup.php' class='nav-link text-light'>Sign Up</a></li>";
                        }
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="result.php">Dashboard</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
