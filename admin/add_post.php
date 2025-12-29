<!DOCTYPE html>
<html>
<head>
    <title>Add Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h4>Add Blog Post</h4>

            <form method="post">
                <div class="mb-3">
                    <input type="text" name="title" class="form-control" placeholder="Post Title" required>
                </div>

                <div class="mb-3">
                    <textarea name="content" class="form-control" rows="5" placeholder="Post Content" required></textarea>
                </div>

                <div class="mb-3">
                    <select name="category" class="form-control">
                        <?php
                        $cats = mysqli_query($conn, "SELECT * FROM categories");
                        while ($row = mysqli_fetch_assoc($cats)) {
                            echo "<option value='{$row['id']}'>{$row['name']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <button name="submit" class="btn btn-primary">Publish</button>
                <a href="dashboard.php" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
