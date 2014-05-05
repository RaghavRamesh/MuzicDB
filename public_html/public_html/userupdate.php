<?php
    if (isset($_POST['newEmail'])) {
        $message = "";
        $newName = $_POST['newUsername'];
        $newEmail = $_POST['newEmail'];
        $newPassword = $_POST['newPassword'];
        $oldEmail = $_POST['oldEmail'];
        
        if ($newName != "" && $newEmail != "" && $newPassword != "") {
            $queryA = "UPDATE user SET name='" . $newName . "' WHERE email='" . $oldEmail . "';";
            $queryB = "UPDATE user SET email='" . $newEmail . "' WHERE email='" . $oldEmail . "';";
            $queryC = "UPDATE user SET password='" . $newPassword . "' WHERE email='" . $oldEmail . "';";
            
            $statusA = $mysqli->query($queryA);
            $statusB = $mysqli->query($queryB);
            $statusC = $mysqli->query($queryC);
            
            if ($statusA == 1 && $statusB == 1 && $statusC == 1) {
                $message = "User credentials successfully updated!";
            } else {
                $message = "Database error - please try again";
            }
                
        } else {
            $message = "Empty credentials are not allowed.";
        }
        unset($_POST);
    }
?>