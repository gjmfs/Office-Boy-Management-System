<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Bootstrap/dist/css/bootstrap.css">
    <script src="../Bootstrap/dist/js/bootstrap.js"><script>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>

    <div class="login"> 
        <div class="container">
            <form action="./loginCheck.php" method="post">
                <h2 class="text-center pb-3">Login</h2>
                <div class="row mb-3">
                    <div class="col-3">
                        <label for="un">User Name:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="adminUserName" class="form-control">
                    </div>
                
                </div>
                <div class="row pb-3">
                <div class="col-3">
                        <label for="un">Password:</label>
                    </div>
                    <div class="col">
                        <input type="password" name="adminPassword" class="form-control">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">login</button>
            </form>
        </div>
    </div>    
</body>
</html>