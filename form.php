<?php
if($_POST["form"]) {
    mail("jxkhoo19@gmail.com", "Here is the sample subject line",
    $_POST["Insert Your Message"]. "From: jxkhoo19@gmail.com");
}
?>
