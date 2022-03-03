<!-- toevoegen aan de database -->
<?php
    include_once("../inlcudes/config.php");
    if(isset($_POST['submit'])) {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["password"];
        $birthday = $_POST["birthday"];
        $sex = $_POST["sex"];
        $power = $_POST["power"];

        $sql = "INSERT INTO Person (Firstname, Lastname, Age, sex) VALUES ('$firstname', '$lastname', '$age', '$sex');";
        $result = mysqli_query($conn, $sql);
        //nog geen idee naar link --> moet verder bekeken worden
        header("http://localhost:8888/.....", true, 303);

    }
?>