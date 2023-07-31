<?php
session_start();
ob_start();

if (!isset($_POST["forgotPw"])) {
    header("Location: ../View/Error/error.php");
} else {
    $cEmail = $_POST["email"];
    
    include "../Model/model.php";
    $sql = $pdo->prepare(
        "SELECT * FROM m_customers WHERE c_email = :email"
    );
    $sql->bindValue(":email", $cEmail);
    $sql->execute();
    $searchEmailResult = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (count($searchEmailResult) > 0) {
        // Import commonFunction to use getToken function 
        include "../View/resources/common/commonFunction.php";
        include "../View/resources/common/mailSender.php";

        // Genereate token 
        $token = getVerifyEmailToken();
        // send email 
        $domain = $_SERVER["SERVER_NAME"];
        $body = file_get_contents("../Mail/verifyEmailTemplate/index.html");
        $body = str_replace("REPLACE", "$token", $body);
        $mail = new SendMail();
        $mail->sendMail(
            $cEmail,
            "Verify Email for Change Password",
            $body
        );
        ob_clean();
        $_SESSION["verifyPwToken"] = $token;
        //for later use in verifyPassword's resend Token function 
        $_SESSION["c_verifyEmail"] = $_POST["email"];
        header("Location: ../View/Login/verifyPassword.php");
        
    }else {
        $_SESSION["forgotEmailError"] = "Email not found! Please type in the email you registered with us!";
        header("Location: ../View/Login/forgotPassword.php");
    }
}
?>