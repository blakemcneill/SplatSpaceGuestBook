<?php
    $DBServer = "localhost";
    $DBUserName = 'blake';
    $DBPassword = "abcd1234";
    $DBDatabase = "EmailTest";

    $Conn = new mysqli($DBServer, $DBUserName, $DBPassword, $DBDatabase);

    if ($Conn->connect_error) {
        die("Connection Failed: " . $Conn->connect_error);
    }

    $FName = $_GET["FNameInput"];
    $LName = $_GET["LNameInput"];
    $Email = $_GET["EmailInput"];
    $Message = $_GET["MessageInput"];

    $SqlStatement = "INSERT INTO GuestSignInEmail VALUES (1, '" . $FName . "','" . $LName . "','" . $Email . "','" . $Message . "')";

    $Conn->query($SqlStatement);

    $Html = "<p>Thanks for signing the SplatSpace guestbook, " . $FName . "! An email will be sent to you shortly with details telling you what SplatSpace has to offer!<p>";
    $Html = $Html . "<br><a href=\"index.html\">Back to guest sign-in</a>"; 

    echo $Html;
?>