
<!doctype html>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/BookSearch.css" type="text/css" >
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <title>Book Catalog</title>
</head>
<header class="Up-header">    <h1 class = "logo">Book Catalog</h1>
    <nav class="navbar">
        <ul class="navbar-ul">
            <li><a href ="MainPage.html">На главную</a></li>
            <li><a href ="BookSearch.php">Купить</a> </li>
            <li><a href ="admin/admin.php">Админ панель</a> </li>
        </ul>

    </nav>

</header>
<body>
<div id="Search">
    <div class="container">
        <div class="row">

                <div class = "col-md-6>">
                    <div class = "s">
                        <p><h1>Поиск книг по автору:</h1>
                        <form action = 'Search_Author.php' method="post">
                            <select name="Author" >
                                <option value="Д. Роулинг." title="">Д. Роулинг. </option>
                                <option value="Д. Толкиен">Д. Толкиен</option>
                                <option value="Антуан де Сент-Экзюпери.">Антуан де Сент-Экзюпери.</option>
                                <option value="Д. Браун.">Д. Браун.</option>
                                <option value="П. Коэльо ">П. Коэльо</option>
                                <option value="Маргарет Митчелл">Стивен Кинг</option>
                                <option value="Михаил Булгаков">Михаил Булгаков</option>
                                <option value="Э. М. Ремарк">Э. М. Ремарк</option>
                                <option value="Оскар Уайльд.">Оскар Уайльд.</option>
                            </select>
                            <input type="submit" name="button" value="Отправить">
                        </form>
                    </div>
            </div>

        <div class = "col-md-6>">

        <p><h1>Поиск книг по жанру :</h1>
        <form action = 'Search_Genre.php' method="post">
            <select name="Genre" >
                <option value="Фэнтази" title="">фэнтази </option>
                <option value="Сказка">Сказка</option>
                <option value="роман">роман</option>
                <option value="драма">драма</option>
                <option value="исторический роман">исторический роман</option>
            </select>

            <input type="submit" name="button" value="Отправить">
        </form>
    </div>
        </div>
</div>
        </div>
    </div>
</div>


<div class = "books">
<div class="col-md-6" >
<?php
include 'Select_All_Books.php';

?>
</div>
</div>
</body>


</html>

