<?php

require_once 'Db_connect.php';
function get_books()
{
    global $link;
    $quarry = "SELECT * FROM books_descriptions ";

    $result = mysqli_query($link,$quarry);

$books = mysqli_fetch_all($result,MYSQLI_ASSOC);

    return  $books;
}

/**
 *
 */
function Search_gener()
{
    global $link;

    if (isset($_POST['checka'])) {
        foreach ($_POST['checka'] as $key => $value) {
            echo $value . '<b>';

            $link = mysqli_connect('localhost', 'root', '', 'BookCatalog');
            $query = "SELECT * FROM `books_descriptions` WHERE  author_name = $value";


        }
    }
    if (!empty($query)) {
        while ($q = mysqli_fetch_array($query)) {
            echo "<div class='please'>
                book_Id: $q[book_Id]'<br>'
                book_title: $q[book_title]'<br>'
                genre: $q[genre]'<br>'
                descriptions: $q[descriptions].'<br>'
                price: $q[price].'<br>'


                </div>";
        }
    }



}
Search_gener();




    //$query = "SELECT * FROM `books_descriptions` WHERE  author_name = $value";

      //      while ($q = mysqli_fetch_array($query)) {
        //        echo "<div class='please'>
    //book_Id: $q[book_Id]'<br>'
    //book_title: $q[book_title]'<br>'
    //genre: $q[genre]'<br>'
    //escriptions: $q[descriptions].'<br>'
    //price: $q[price].'<br>'


    //</div>";
      //      }
        //}

    //}
//}
