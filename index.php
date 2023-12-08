<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bug Tracker</title>
    <link rel="stylesheet" href="../bugtrackerphpcrud/css/style.css" />
    <link rel="normalize" href="../bugtrackerphpcrud/css/normalize.css" />
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="../bugtrackerphpcrud/bugs/listbugs.php">Bug List</a></li>
                <?php
                session_start();
                $reportBugLink = isset($_SESSION['username']) ? '../bugtrackerphpcrud/bugs/createbugs.php' : '../bugtrackerphpcrud/users/loginusers.php';
                echo "<li><a href='$reportBugLink'>Report bug</a></li>";
                if (isset($_SESSION['username']) && isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
                    echo '<li><a href="users/listusers.php">User List</a></li>';
                }
                // Check if the user is logged in
                if (isset($_SESSION['username'])) {
                    echo '<li><a href="users/logout.php">Logout</a></li>';
                    echo '<li>(Currently logged in as ' . $_SESSION['username'] . ')</li>';
                } else {
                    echo '<li><a href="users/loginusers.php">Login</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Home Page -->
        <section id="home">
            <h1>Welcome to the Bug Tracker</h1>
            <p>Track and manage software bugs efficiently</p>
        </section>
        <div class="signup">
            <?php
            if (isset($_SESSION['username'])) {
                echo "<p>Hello, {$_SESSION['username']}! <a href='../bugtrackerphpcrud/users/logout.php'>Click here</a> to log out.</p>";
            } else {
                echo "<p>You are currently not logged in. <a href='../bugtrackerphpcrud/users/loginusers.php'>Click here</a> to login.</p>";
                echo "<p>Don't have an account? <a href='../bugtrackerphpcrud/users/createusers.php'>Sign up here</a>.</p>";
            }
            ?>
        </div>
        <!-- User List Page -->
        <?php
        // Check if the user is logged in and has admin privileges
        if (isset($_SESSION['username']) && isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
            echo '<p><a href="../bugtrackerphpcrud/users/listusers.php">View list of registered users</a></p>';
        }
        ?>
        <!-- Bug List Page -->
        <div id="bugs">
            <p><a href="../bugtrackerphpcrud/bugs/listbugs.php">View list of submitted bugs</a></p>
        </div>
        <!-- Report Bug Page -->
        <div id="reportbug">
            <?php
            $reportBugLink = isset($_SESSION['username']) ? '../bugtrackerphpcrud/bugs/createbugs.php' : '../bugtrackerphpcrud/users/loginusers.php';
            echo "<p><a href='$reportBugLink'>Report a new issue</a></p>";
            ?>
        </div>
        <!-- Home Image -->
        <div class="home-image">
            <img src="../bugtrackerphpcrud/images/bugreportsmall.png" alt="Bug Tracker Home Image" />
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Bug Tracker - A Project by Aaron A.</p>
    </footer>
</body>

</html>