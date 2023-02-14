<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Exercise 3</title>
</head>
<body>
    <main class="container">
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="mb-3 form-control">
            File Upload: <input type="file" name="file">
            <input type="submit" name="submit" value="upload" accept=".pdf">
        </div>
        </form>
    </main>
</body>
</html>