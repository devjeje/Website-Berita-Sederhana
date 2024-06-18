<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-success d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card mx-auto rounded-0 shadow-lg" style="width: 500px; height: 333px">
        <div class="card-body d-flex flex-column justify-content-center">
            <form action="welcome.php" method="post" class="p-5">
                <div class="mb-4">
                    <input type="text" name="username" class="form-control rounded-0" style="height: 50px;" placeholder="Username" required>
                </div>
                <div class="mb-4">
                    <input type="password" name="password" class="form-control rounded-0" style="height: 50px;" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-success form-control rounded-0" style="height: 50px;">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
