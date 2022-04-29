<?php
session_start();
require 'connection.php';
?>
<!DOCTYPE html>
<html>

<head>
    <div class="container">
        <h1>A Fancy Table</h1>
        <?php
        $sql = "SELECT * FROM library";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        ?>
            <table id="users">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>operations</th>

                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td>
                            <a href="edit.php?email=<?= $row['email'] ?>"   class="li" >Edit</a>
                            <a href="delete.php?email=<?= $row['email'] ?>" class="li2" >Delete</a>
                        </td>
                        <td>
                            <div class="box1">
                            <div class="box2"></div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php  } else {
            echo '<span class="err">No Rows</span>';
        } ?>
    </div>

<section class="books">
<div class="container">
        <h1>Books Table</h1>
        <?php
        $sql = "SELECT * FROM library";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        ?>
            <table id="books">
                <tr>
                    <th>id</th>
                    <th>img</th>
                    <th>Name</th>
                    <th>price</th>
                    <th>operations</th>

                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['img'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['price'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id'] ?>"   class="li" >Edit</a>
                            <a href="delete.php?id=<?= $row['id'] ?>" class="li2" >Delete</a>
                        </td>
                        <td>
                            <div class="box1">
                            <div class="box2"></div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php  } else {
            echo '<span class="err">No Rows</span>';
        } ?>
    </div>

</section>
</body>

</html>

