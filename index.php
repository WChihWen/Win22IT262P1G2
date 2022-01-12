<?php include 'conversion.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Voltaire&display=swap" rel="stylesheet">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title>Temperature Conversion - P1G2</title>

</head>

<body>
    <div class="wrapper">
        <fieldset>
            <legend>Temperature Conversion</legend>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <p>
                    Value: <input type="number" name="Val" value="<?php if (isset($_POST['Val'])) echo htmlspecialchars($_POST['Val']); ?>">
                    <select name="selectFrom">
                        <option value="NULL" <?php if (isset($_POST['selectFrom']) && $_POST['selectFrom'] == NULL) echo 'selected="unselected"'; ?>>Select one!</option>
                        <option value="C" <?php if (isset($_POST['selectFrom']) && $_POST['selectFrom'] == "C") echo 'selected="selected"'; ?>>°C</option>
                        <option value="F" <?php if (isset($_POST['selectFrom']) && $_POST['selectFrom'] == "F") echo 'selected="selected"'; ?>>°F</option>
                        <option value="K" <?php if (isset($_POST['selectFrom']) && $_POST['selectFrom'] == "K") echo 'selected="selected"'; ?>>°K</option>
                    </select>
                </p>
                <p>
                    Convert to:
                    <select name="selectTo">
                        <option value="NULL" <?php if (isset($_POST['selectFrom']) && $_POST['selectFrom'] == NULL) echo 'selected="unselected"'; ?>>Select one!</option>
                        <option value="C" <?php if (isset($_POST['selectTo']) && $_POST['selectTo'] == "C") echo 'selected="selected"'; ?>>°C</option>
                        <option value="F" <?php if (isset($_POST['selectTo']) && $_POST['selectTo'] == "F") echo 'selected="selected"'; ?>>°F</option>
                        <option value="K" <?php if (isset($_POST['selectTo']) && $_POST['selectTo'] == "K") echo 'selected="selected"'; ?>>°K</option>
                    </select>
                </p>

                <div class="button">
                    <p><input class="convert" type="submit" value="Convert"></p>
                    <p><a class="reset" href="">Reset</a></p>
                </div>
            </form>
        </fieldset>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $all_set = true;
            if ($_POST['Val'] == NULL) {
                echo '<p><span class="error">Please fill out value!</span></p>';
                $all_set = false;
            }

            if ($_POST['selectFrom'] == "NULL") {
                echo '<p><span class="error">Please select converted unit!</span></p>';
                $all_set = false;
            }

            if ($_POST['selectTo'] == "NULL") {
                echo '<p><span class="error">Please select convert to unit!</span></p>';
                $all_set = false;
            }
            if ($all_set == true) {
                $type = $_POST['selectFrom'] . "to" . $_POST['selectTo'];

                switch ($type) {
                    case 'CtoC':
                        echo '<span class="error">Please select different units!</span>';
                        break;
                    case 'CtoF':
                        $myTemp = celsius_to_fahrenheit($_POST['Val']);
                        echo '<p class="temp">The temperature is ' . $myTemp . ' degrees Fahrenheit.</p>';
                        // echo '<span >Convert C to F</span>';
                        break;
                    case 'CtoK':
                        $myTemp = celsius_to_kelvin($_POST['Val']);
                        echo '<p class="temp">The temperature is ' . $myTemp . ' Kelvins.</p>';
                        //echo '<span >Convert C to K</span>';
                        break;
                    case 'FtoC':
                        $myTemp = fahrenheit_to_celsius($_POST['Val']);
                        echo '<p class="temp">The temperature is ' . $myTemp . ' degrees Celsius.</p>';
                        //echo '<span>Convert F to C</span>';           
                        break;
                    case 'FtoF':
                        echo '<span class="error">Please select different units!</span>';
                        break;
                    case 'FtoK':
                        $myTemp = fahrenheit_to_kelvin($_POST['Val']);
                        echo '<p class="temp">The temperature is ' . $myTemp . ' Kelvins.</p>';
                        //echo '<span>Convert F to K</span>';
                        break;
                    case 'KtoC':
                        $myTemp = kelvin_to_celsius($_POST['Val']);
                        echo '<p class="temp">The temperature is ' . $myTemp . ' degrees Celsius.</p>';
                        // echo '<span >Convert K to C</span>';
                        break;
                    case 'KtoF':
                        $myTemp = kelvin_to_fahrenheit($_POST['Val']);
                        echo '<p class="temp">The temperature is ' . $myTemp . ' degrees Fahrenheit.</p>';
                        // echo '<span \>Convert K to F</span>';
                        break;
                    case 'KtoK':
                        echo '<span class="error">Please select different units!</span>';
                        break;
                }
            }
        }
        ?>

        <footer>
            <ul>
                <li>Copyright &copy;
                    <?php
                    $date_current = date('Y');
                    $date_created = 2022;
                    if ($date_current == $date_created) {
                        echo $date_current;
                    } else {
                        echo '' . $date_created . ' - ' . $date_current . '';
                    }
                    ?>
                <li>All Rights Reserved</li>
                <li><a href="https://github.com/WChihWen" target="_blank">Chih Wen Wang</a></li>
                <li><a href="https://github.com/jmgarza94" target="_blank">Joey Garza</a></li>
                <li><a href="https://github.com/RANovelli" target="_blank">Ryan Novelli</a></li>
            </ul>
        </footer>

    </div> <!-- end wrapper -->
</body>

</html>
