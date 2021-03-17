<?php

    if(isset($_COOKIE["login"])) {

        $connection = mysqli_connect("localhost", "root", "", "account information");

        $sql = "SELECT * FROM `account info table`";

        $result = mysqli_query($connection, $sql);

        echo "<table>";

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["Username"] . "</td><td>" . $row["Password"] . "</td><td>" . $row["Email"] . "</td><tr>";
        }
        echo "</table>";

        mysqli_close($connection);

    }

?>