<?php
    include('connect.php');

    if(isset($_POST['edit'])){
        $EdID = $_POST['edId'];
        $EdName = $_POST['edName'];
        $EdGenre = $_POST['edGenre'];
        $EdAuthor = $_POST['edAuthor'];
        $EdRelease_year = $_POST['edRelease_year'];
        $EdRating = $_POST['edRating'];
    }

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $author = $_POST['author'];
        $release_year = $_POST['release_year'];
        $rating = $_POST['rating'];

        $update = "UPDATE movies SET name = '$name', genre='$genre', author='$author', release_year='$release_year', rating='$rating'  WHERE id=$id";
        $sqlUp = mysqli_query($connect, $update);

        echo "<script>alert('Data Updated')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #e0bbff, #d1c4e9);
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
    }

    a {
        font-size: 20px;
        background-color: #8e44ad; 
        color: #eee;
        text-decoration: none;
        padding: 8px 12px;
        border-radius: 6px;
        transition: background-color 0.3s ease;
        margin-top: 2rem;
        align-self: flex-start;
        margin-left: 2rem;
    }

    a:hover {
        background-color: #732d91; 
    }

    form {
        background: rgba(255, 255, 255, 0.9);
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2), 
        0 6px 20px rgba(0, 0, 0, 0.19);

        margin-top: 2rem;
        width: 90%;
        max-width: 500px;
    }

    label {
        display: block;
        margin-top: 1rem;
        font-weight: bold;
        color: #8e44ad;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
    }

    input[type="submit"] {
        margin-top: 1.5rem;
        background-color: #8e44ad;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    input[type="submit"]:hover {
        background-color: #732d91;
    }
</style>

</head>
<body>

    <a href="index.php">&larr; Back</a>

    <form action="update.php" method="post">
        <label for="name">Movie Name</label>
        <input type="text" name="name" id="name" value="<?= $EdName ?>">

        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre" value="<?= $EdGenre ?>">

        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="<?= $EdAuthor ?>">

        <label for="release_year">Release Year</label>
        <input type="number" name="release_year" id="release_year" value="<?= $EdRelease_year ?>">

        <label for="rating">Rating</label>
        <input type="number" name="rating" id="rating" value="<?= $EdRating ?>">

        <input type="hidden" name="id" id="id" value="<?= $EdID ?>">

        <input type="submit" name="submit" id="submit" value="Update">
    </form>

</body>
</html>
