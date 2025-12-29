<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Personal Blog Admin</span>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>

<div class="container mt-4">
    <h3>Admin Dashboard</h3>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h5>Add Post</h5>
                    <a href="add_post.php" class="btn btn-primary">Open</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h5>Manage Categories</h5>
                    <a href="categories.php" class="btn btn-success">Open</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h5>Manage Tags</h5>
                    <a href="tags.php" class="btn btn-warning">Open</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
