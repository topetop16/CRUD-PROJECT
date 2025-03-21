<?php
    include('connect.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $author = $_POST['author'];
        $release_year = $_POST['release_year'];
        $rating = $_POST['rating'];

        $insert = "INSERT INTO movies VALUES (NULL,'$name', '$genre', '$author', '$release_year', '$rating')";
        $insertSQL = mysqli_query($connect, $insert);

        echo "<script>alert('Data Added')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <style>
        body {
            background: linear-gradient(135deg, #e0bbff, #d1c4e9);
        }

        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px; 
            background-color: #8e44ad;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #732d91;
        }

        form {
            max-width: 400px;
            margin: 4rem auto;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;

            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2), 
                        0 6px 20px rgba(0, 0, 0, 0.19);

            font-family: Arial, sans-serif;
        }

        form input, form select, form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        form input:focus, form select:focus, form textarea:focus {
            border-color: #8e44ad;
            outline: none;
            box-shadow: 0 0 5px rgba(142, 68, 173, 0.5);
        }

        form button, form input[type="submit"] {
            background-color: #8e44ad;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover, form input[type="submit"]:hover {
            background-color: #732d91;
        }
    </style>
</head>
<body>

    <a href="index.php" class="back-btn">← Back</a>

    <form action="add.php" method="post">
        <label for="name">Movie Name</label>
        <input type="text" name="name" id="name"><br>

        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre"><br>
        
        <label for="author">Author</label>
        <input type="text" name="author" id="author"><br>

        <label for="release_year">Release year</label>
        <input type="number" name="release_year" id="release_year"><br>

        <label for="rating">Rating</label>
        <input type="number" name="rating" id="rating"><br>
        
        <input type="submit" name="submit" id="submit" value="Add Movie"><br>
    </form>
    
</body>
</html>
