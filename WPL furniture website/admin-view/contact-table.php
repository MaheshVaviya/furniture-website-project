<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Contact Table</title>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f9f6f2;
            padding: 20px;
        }

        .container {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        .title-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 40px;
            color: #4d3520;
        }

        .title-container img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 3px solid #6f4b26;
        }

        h2 {
            font-size: 24px;
            font-weight: 600;
            color: #4d3520;
            margin-bottom: 20px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .updateform {
            max-width: 400px;
            margin: 0 auto 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .updateform label {
            display: block;
            font-size: 16px;
            font-weight: 500;
            color: #555;
            margin-bottom: 8px;
        }

        .updateform input[type="text"],
        .updateform input[type="email"] {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .updateform input:focus {
            border-color: #4d3520;
            outline: none;
        }

        .updateinfo {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            background-color: #4d3520;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .updateinfo:hover {
            background-color: #3a2818;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #6f4b26;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #fdf7f0;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .home-btn {
            background-color: #6f4b26;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .home-btn:hover {
            background-color: #4d3520;
        }

        .msg {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>

<div class="title-container">
    <h1>Contact Submissions</h1>
    <img src="../img/img.jpg" alt="Logo">
</div>

<?php
// DB connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact-form";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("<p class='msg error'>Connection failed: " . $conn->connect_error . "</p>");
}

$msg = "";
$error = "";

// Update Record
if (isset($_POST['update_record'])) {
    $update_name = $_POST['update_name'];
    $new_name = $_POST['new_name'];
    $new_phone = $_POST['new_phone'];
    $new_email = $_POST['new_email'];

    $stmt = $conn->prepare("UPDATE contact SET name = IF(? = '', name, ?), phone = IF(? = '', phone, ?), email = IF(? = '', email, ?) WHERE name = ?");
    $stmt->bind_param("sssssss", $new_name, $new_name, $new_phone, $new_phone, $new_email, $new_email, $update_name);

    if ($stmt->execute()) {
        $msg = "Record updated successfully";
    } else {
        $error = "Error updating record: " . $stmt->error;
    }
    $stmt->close();
}

// Delete Record
if (isset($_POST['delete_record'])) {
    $delete_name = $_POST['delete_name'];

    $stmt = $conn->prepare("DELETE FROM contact WHERE name = ?");
    $stmt->bind_param("s", $delete_name);

    if ($stmt->execute()) {
        $msg = "Record deleted successfully";
    } else {
        $error = "Error deleting record: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!-- Feedback Messages -->
<?php if ($msg) echo "<p class='msg success'>$msg</p>"; ?>
<?php if ($error) echo "<p class='msg error'>$error</p>"; ?>

<h2>Update Record</h2>
<form method="POST" class="updateform">
    <label for="update_name">Name to Update:</label>
    <input type="text" id="update_name" name="update_name" required>

    <label for="new_name">New Name:</label>
    <input type="text" id="new_name" name="new_name">

    <label for="new_phone">New Phone:</label>
    <input type="text" id="new_phone" name="new_phone">

    <label for="new_email">New Email:</label>
    <input type="email" id="new_email" name="new_email">

    <button type="submit" name="update_record" class="updateinfo">Update Record</button>
</form>

<h2>Delete Record</h2>
<form method="POST" class="updateform">
    <label for="delete_name">Name to Delete:</label>
    <input type="text" id="delete_name" name="delete_name" required>

    <button type="submit" name="delete_record" class="updateinfo">Delete Record</button>
</form>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT name, phone, email, message FROM contact";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['message']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No submissions found.</td></tr>";
    }
    $conn->close();
    ?>
    </tbody>
</table>

<a href="../index.php" class="home-btn">Return to Home</a>

</body>
</html>
