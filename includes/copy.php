<?php
if (isset($_POST['signup-submit'])) { //* CHANGE "signup-submit" to "emails.submit"

    require 'dbh.inc.php';

    $username = $_POST['uid']; //*CHANGE '$username' into $firstName = $_POST['firnam']; *//
    $email = $_POST['mail']; //*CHANGE '$email' into $lastName = $_POST['lasnam']; *//
    $password = $_POST['pwd']; //*CHANGE '$password' into $middleName = $_POST['midnam']; *//
    $passwordRepeat = $_POST['pwd-repeat']; //*DELETE *//



    

    if (empty($username) ||  empty($email) || empty($password) || empty($passwordRepeat)) { //* delete everything other than email *// 
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email); //* change signup.php INTO index.php?error=emptyfields&mail= DELETE $username*//
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) { //*DELETE $username *//
        header("Location: ../signup.php?error=invalidmailuid"); //* change signup.php INTO index.php?error=invalidmail *//
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
    else if ($password !== $passwordRepeat) { //* DELETE *//
        header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    }
    else {

        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?"; //* CHANGE to "SELECT ranEmails FROM emails WHERE ranEmails=?" *//
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror"); //* change signup.php INTO index.php?signup.success *//
        exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username); //* IDK WHAT TO DO HERE*//
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../signup.php?error=usertaken&mail=".$email); //* change signup.php INTO index.php?signup.success *//
                exit();
            }
            else {
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)"; //* change "users" to emails (ranEmails) VALUES (?); *//
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror"); //* change signup.php INTO index.php?signup.success *//
                exit();
            }
            else {
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT); //* DELETE *//


                mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd); //* DELETE "$hashedPwd, username" change "sss" to "s"
                mysqli_stmt_execute($stmt);
                header("Location: ../signup.php?signup=success"); //* change signup.php INTO index.php?signup.success *//
                exit();
            }
        }
    }
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

}
else {
    header("Location: ../signup.php"); //*change to index.php *//
    exit();
}