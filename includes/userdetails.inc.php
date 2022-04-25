<?php
if (isset($_POST['emails-submit'])) { //* CHANGE "signup-submit" to "emails.submit"

    require 'dbh.inc.php';

    
    $email = $_POST['mail']; //*CHANGE '$email' into $lastName = $_POST['lasnam']; *//



    

    if (empty($email)) { //* delete everything other than email *// 
        header("Location: ../index.php?error=emptyfields&mail=".$email); //* change signup.php INTO index.php?error=emptyfields&mail= DELETE $username*//
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/")) { //*DELETE $username *//
        header("Location: ../index.php?error=invalidmail"); //* change signup.php INTO index.php?error=invalidmail *//
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidmail&uid=".$username); //*DELETE MAYBE*//
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduid&mail=".$email); //* change signup.php INTO index.php?signup.success  OR DELETE THIS*//
        exit();
    }
    else {

        $sql = "SELECT ranEmails FROM emails WHERE ranEmails=?"; //* CHANGE to "SELECT ranEmails FROM emails WHERE ranEmails=?" *//
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror"); //* change signup.php INTO index.php?signup.success *//
        exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $email); //* IDK WHAT TO DO HERE*//
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../signup.php?error=usertaken&mail=".$email); //* change signup.php INTO index.php?signup.success *//
                exit();
            }
            else {
                $sql = "INSERT INTO emails (ranEmails) VALUES (?)"; //* change "users" to emails (ranEmails) VALUES (?); *//
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../index.php?error=sqlerror"); //* change signup.php INTO index.php?signup.success *//
                exit();
            }
            else {

                mysqli_stmt_bind_param($stmt, "s", $email); //* DELETE "$hashedPwd, username" change "sss" to "s"
                mysqli_stmt_execute($stmt);
                header("Location: ../index.php?signup=success"); //* change signup.php INTO index.php?signup.success *//
                exit();
            }
        }
    }
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

}
else {
    header("Location: ../index.php"); //*change to index.php *//
    exit();
}