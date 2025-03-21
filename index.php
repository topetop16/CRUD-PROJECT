<?php
    include('connect.php');

    $select = "SELECT * FROM movies";
    $sqlSelect = mysqli_query($connect, $select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Project1.0</title>
    <style>
    body{
            background: linear-gradient(135deg, #e0bbff, #d1c4e9);
        }
    a {
        font-size: 20px;
        background-color: #4CAF50; 
        color: #eee;
        text-decoration: none;
        padding: 8px 12px;
        border-radius: 6px;
        transition: background-color 0.3s ease;
    }

    a:hover {
        background-color: #45a049;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 18px;
        background: linear-gradient(135deg, #e0bbff, #d1c4e9); 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px 15px;
        text-align: center;
    }

    th {
        background-color: #8e44ad; 
        color: white;
        font-weight: bold;
    }

    td {
        background-color: rgba(255, 255, 255, 0.8); 
        color: #333;
    }

    button, .btn {
        font-size: 16px;
        cursor: pointer;
        padding: 8px 12px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        border: none;
    }

    .edit {
        background-color: #4CAF50;
        color: white;
    }

    .edit:hover {
        background-color: #45a049;
    }

    .delete {
        background-color: #f44336;
        color: white;
    }

    .delete:hover {
        background-color: #e53935;
    }
</style>

</head>
<body>
    <a type="button" id="add" href="add.php">Add+</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Movie Name</th>
            <th>Genre</th>
            <th>Author</th>
            <th>Release year</th>
            <th>Rating</th>
            <th colspan="2">Action</th>
        </tr>

        <?php foreach($sqlSelect as $result => $value) {  ?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['genre'] ?></td>
                <td><?php echo $value['author'] ?></td>
                <td><?php echo $value['release_year'] ?></td>
                <td><?php echo $value['rating'] ?></td>
                <td>
                    <form action="update.php" method="post">
                        <input class="btn edit" type="submit" value="Edit" name="edit">
                        <input type="hidden" name="edId" value="<?= $value['id'] ?>">
                        <input type="hidden" name="edName" value="<?= $value['name'] ?>">
                        <input type="hidden" name="edGenre" value="<?= $value['genre'] ?>">
                        <input type="hidden" name="edAuthor" value="<?= $value['author'] ?>">
                        <input type="hidden" name="edRelease_year" value="<?= $value['release_year'] ?>">
                        <input type="hidden" name="edRating" value="<?= $value['rating'] ?>">
                    </form>
                </td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="delID" value="<?= $value['id'] ?>">
                        <input class="btn delete" type="submit" value="Delete" name="delete">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>