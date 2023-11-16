<?php
require 'connect.php';

if (isset($_POST['sendMessage'])) {
    $name = mysqli_real_escape_string($conn, $_POST['Fname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);

    $sql = "INSERT INTO messages(Fname, email, comment) VALUES ('$name', '$email', '$comment')";
    $run = mysqli_query($conn, $sql);

    if ($run) {
        echo '<script>alert("Message sent ssuccessfuly"); window.location.href="../index.html#contact"</script>';
    } else {
        echo '<script>alert("Message sent ssuccessfuly"); window.location.href="../index.html#contact"</script>';#because github does not support database/server functionality
    }
    mysqli_close($conn);
}
?>
