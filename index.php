<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Temperature Conversion - P1G2</title>

</head>
<body>
    Temperature Conversion
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">       
        <p> 
            Value: <input type="number" name="Val" value="<?php if(isset($_POST['Val'])) echo htmlspecialchars($_POST['Val']); ?>">
            <select name="selectFrom">
                <option value="NULL"  <?php if(isset($_POST['selectFrom']) && $_POST['selectFrom'] == NULL ) echo 'selected="unselected"'; ?>>Select one!</option>
                <option value="C" <?php if(isset($_POST['selectFrom']) && $_POST['selectFrom'] == "C" ) echo 'selected="selected"'; ?>>°C</option>
                <option value="F" <?php if(isset($_POST['selectFrom']) && $_POST['selectFrom'] == "F" ) echo 'selected="selected"'; ?>>°F</option>
                <option value="K" <?php if(isset($_POST['selectFrom']) && $_POST['selectFrom'] == "K" ) echo 'selected="selected"'; ?>>°K</option>          
            </select>
        </p>
        <p>
            Convert to 
            <select name="selectTo">
                <option value="NULL" <?php if(isset($_POST['selectFrom']) && $_POST['selectFrom'] == NULL ) echo 'selected="unselected"'; ?>>Select one!</option>
                <option value="C" <?php if(isset($_POST['selectTo']) && $_POST['selectTo'] == "C" ) echo 'selected="selected"'; ?>>°C</option>
                <option value="F" <?php if(isset($_POST['selectTo']) && $_POST['selectTo'] == "F" ) echo 'selected="selected"'; ?>>°F</option>
                <option value="K" <?php if(isset($_POST['selectTo']) && $_POST['selectTo'] == "K" ) echo 'selected="selected"'; ?>>°K</option>          
            </select>
        </P>

        <p><input type="submit" value="Convert"></p>        
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] =='POST'){ 
            $all_set = true;
            if($_POST['Val'] == NULL){
                echo '<p><span class="error">Please fill out Value!</span></p>';
                $all_set = false;
            }                        
            
            if($_POST['selectFrom'] == "NULL"){
                echo '<p><span class="error">Please select converted unit!</span></p>';
                $all_set = false;
            }       

            if($_POST['selectTo'] == "NULL"){
                echo '<p><span class="error">Please select convert to unit!</span></p>';
                $all_set = false;
            } 
            if ($all_set == true) {                
                $type = $_POST['selectFrom']."to".$_POST['selectTo'];

                switch ($type){
                    case 'CtoC':  
                        echo '<span class="error">Please select different units!</span>';              
                        break;
                    case 'CtoF':
                        echo '<span >Convert C to F</span>';
                        break;
                    case 'CtoK':
                        echo '<span >Convert C to K</span>';
                        break;                      
                    case 'FtoC': 
                        echo '<span>Convert F to C</span>';           
                        break;
                    case 'FtoF':
                        echo '<span >Please select different units!</span>';
                        break;
                    case 'FtoK':
                        echo '<span>Convert F to K</span>';
                        break;                        
                    case 'KtoC':  
                        echo '<span >Convert K to C</span>';
                        break;
                    case 'KtoF':
                        echo '<span \>Convert K to F</span>';
                        break;
                    case 'KtoK':
                        echo '<span class="error">Please select different units!</span>';
                        break;
                }
            }  
        }
    ?>
</body>
</html>