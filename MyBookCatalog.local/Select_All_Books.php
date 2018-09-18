<html>
    <head>
        <link rel="stylesheet" href="/css/BookSearch.css" type="text/css">
        <title></title>
    </head>
    <body>

  </body>
</html>

<?php
global $link;
include 'Db_connect.php';


$query = "SELECT `book_title`,`author_name`,`genre`,`price`,`descriptions` FROM `books_descriptions`  ";

$sql = mysqli_query($link,$query);
while($row = mysqli_fetch_array($sql)) {

    echo '<div class="books">';
    echo '<p class="book_title">' . $row['book_title'] . '<br /></p>';
    echo '<p class="author_name">' . $row['author_name'] . '<br /></p>';
    echo '<p class="genre">' . $row['genre'] . '<br /></p>';
    echo '<p class="price">' . $row['price'] . '<br /></p>';
    echo '<form action="BookDescription.php" method="post"><p class="but"><button type="button" class="btn btn-secondary">Secondary</button>'.'<br /></p></form>';
    echo '</div>';
}