<?php
    // Assuming $name is defined elsewhere in your code
    $name = isset($name) ? $name : "Default Name";
    $gender = isset($gender) ? $gender : "default_gender"; // Provide a default gender or handle it appropriately

    echo '<div class="topbar">
            <div class="toggle">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="search">
                <label>
                    <input type="search" placeholder=" Search here... ">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </label>    
            </div>
            <!-- admin img -->
            <div class="profile">
                <div class="admin">
                    <img src="../images/'.$gender.'.png" alt="Admin">
                </div>
                <div class="admin_name">
                    <span>'.$name.'</span>
                </div>
            </div>
        </div>';
?>
