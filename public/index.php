<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <span class="navbar-brand">Personal Blog</span>
    </div>
</nav>

<div class="container mt-4">
    <div class="row">
        <?php
        include "../config/db.php";

        $result = mysqli_query($conn, "SELECT * FROM posts ORDER BY created_at DESC");

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5><?= $row['title'] ?></h5>
                        <p><?= substr($row['content'], 0, 100) ?>...</p>
                        <a href="post.php?slug=<?= $row['slug'] ?>" class="btn btn-sm btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

</body>
</html>
