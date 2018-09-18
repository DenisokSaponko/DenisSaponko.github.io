<?php

global $link;
include 'Db_connect.php';
if(isset($_POST['button']))
{

    $author_name = $_POST['Author'];
    $query = "SELECT * FROM `books_descriptions` WHERE  `author_name` = '$author_name' ";
    $sql = mysqli_query($link,$query) or trigger_error(mysqli_error(). "in" .$query);
    while($row = mysqli_fetch_array($sql)){

        echo'<table>';


        echo  "<tr><td>"."<h1>" .$row['book_title']."</h1></td></tr>";
        echo  "<tr><td>Author name: ".$row['author_name']."</td><tr/>";
        echo  "<tr><td>Genre: " .$row['genre']."</td></tr>";
        echo  "<tr><td>price: ".$row['price']."</td></tr>";
        echo  "<tr><td>Descriptions: ".$row['descriptions']."</td></tr>";


        echo'</table>';
    }
}



