<?php
$servername = 'localhost';
$username = 'id14348500_localhost';
$password = 'Frankenstein-1998';
$database = 'id14348500_emails';

$conn = mysqli_connect($servername, $username, $password, $database);


if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $email = $_POST = mysqli_real_escape_string($conn, $email);

    $query = "INSERT INTO Emails(email) VALUES('$email')";

    $res = mysqli_query($conn, $query);

    if($res) {
        echo "
        <script>
            const successBar = document.querySelector('#email-success');
            const showSuccessBar = () => {
                successBar.style.display = 'flex';
                const hideSuccessBar = () => {
                    successBar.style.display = 'none';
                }
                setTimeout(hideSuccessBar, 2000);
            };
        </script>
        ";
    } else {
        echo "
        <script>
            const failureBar = document.querySelector('#email-failure');
            const showFailureBar = () => {
                failureBar.style.display = 'flex';
                const hideFailureBar = () => {
                    failureBar.style.display = 'none';
                }
                setTimeout(hideFailureBar, 2000);
            };
        </script>
        ";
    }
}

?>