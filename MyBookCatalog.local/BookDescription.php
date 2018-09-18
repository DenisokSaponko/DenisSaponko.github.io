<?php

include 'Db_connect.php';
global $link;

$query = "SELECT `book_title`,`author_name`,`genre`,`price`,`descriptions` FROM `books_descriptions` WHERE `book_Id`=1";

$sql = mysqli_query($link,$query);





    while ($row = mysqli_fetch_array($sql)) {
        echo '<div class ="bok"><table>';



        echo "<tr><td><h1>" . $row['book_title'] . "</h1></td></tr><br>";
        echo "<tr><td>Author name: " . $row['author_name'] . "</td><tr/><br>";
        echo "<tr><td>Genre: " . $row['genre'] . "</td></tr><br>";
        echo "<tr><td>price: " . $row['price'] . "</td></tr><br>";




        echo '</table></div>';
        echo "</form>";

    }


