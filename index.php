<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Tech_in_Tech School Admission form</title>

    <style>
        body {
            background-color: lightgray;
        }
    </style>
</head>
<body>
     <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img src="./photo_2023-07-16_13-38-19.jpg" width="70" height="80" class="d-block align-top" alt="Logo">
      Tech_in_Tech
    </a>
  </nav>

  


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4"> School Admission Form</h2>
                <form action="insert.php" method="POST">
                    <div class="form-group">
                        <label for="name">Sur Name</label>
                        <input type="text" class="form-control" name="surname" >
                    </div>
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" class="form-control" name="fname" >
                    </div>
                    <div class="form-group">
                        <label for="name">Last Name</label>
                        <input type="text" class="form-control" name="lastname" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" name="phone" >
                    </div>
                    <div class="form-group">
                        <label for="class">Class</label>
                        <select class = "form-control" id="class" name="class">
                            <option value="PRIMARY 1">PRIMARY 1</option>
                            <option value="PRIMARY 2">PRIMARY 2</option>
                            <option value="PRIMARY 3">PRIMARY 3</option>
                            <option value="PRIMARY 4">PRIMARY 4</option>
                            <option>PRIMARY 5</option>
                            <option>JSS 1</option>
                            <option>JSS 2</option>
                            <option>JSS 3</option>
                            <option>SS 1</option>
                            <option>SS 2</option>
                            <option>SS 3</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Apply Now</button>
                    
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                                  
    
</body>
</html>
