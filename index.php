<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line-notify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 class="mt-5">Line notify</h3>
        <hr>
        <form action="line-notify.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First name:</label>
                <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your full name with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Last name:</label>
                <input type="text" name="lastname" class="form-control" id="exampleInputPassword1">
                <div id="emailHelp" class="form-text">We'll never share your last name with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone:</label>
                <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" name="phone" class="form-control" id="exampleInputPassword1">
                <div id="emailHelp" class="form-text">We'll never share your phone with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">More:</label>
                <textarea class="form-control" name="more" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>
