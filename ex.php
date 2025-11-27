<?php
class Book{
    public $title;
    public $author;
    public $genre;

    function _constructor()
    {
        $this->setTitle("title");
        $this->setAuthor("author");
        $this->setGenre("genre");
        
    }

    function getTitle()
    {
        return $this->title;
    }

    function setTitle($title)
    {
        $this->title = $title;
    }
   

    function getAuthor(){
        return $this->author;
    }
       
    function setAuthor($author)
    {
        $this->author = $author;
    }
    function getGenre(){
        return $this->genre;
    }
    function setGenre($genre){
        $this->genre = $genre;
    }

}

if ( isset($_POST["submit"]) ) {

    $title = $_POST['title'];

    $author = $_POST['author'];

    $genre = $_POST['genre'];

    echo'Заглавието на книгата е <br>  '.$title.'   <br> Авора е <br>   '.$author.'   <br> Жанра е <br>  '.$genre.'';
}

?>
<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Книги</title>
</head>
<body>
    <form method="post">
	<label>Име:</label><br>
	<input type="text" name="title"><br>
	<label>Автор</label><br>
	<input type="text" name="author"><br>
	<label>Жанр</label><br>
	<input type="text" name="genre"><br>
	<input type="submit" name="submit" value="Изпрати">
</form>
</body>
</html>





