<?php 

    require './include/db.php';

    $sql = "SELECT * FROM personal_info";
    $result = mysqli_query($conn, $sql);


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>connect mysqli</title>
  </head>
  <body>
    
    <?php include'./component/navabar.php' ?>

      <div class="container mt-5">
        <div class="row">
          <div class=" col-md-6 offset-md-3">
          <div class="card">
            <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
              <form action="./include/catchdata.php" method="POST" >

              <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Name...">
              </div>

              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email...">
              </div>

              <div class="mb-3">
                  <label for="roll" class="form-label">Department</label>
                  <select class="form-control" name="department">
                      <option value="">Choose one</option>
                      <option value="eee">EEE</option>
                      <option value="cse">CSE</option>
                  </select>
              </div>

              <div>
                  <button type="submit" name="register-submit" class="btn btn-primary btn-block ">Submit</button>
              </div>

              </form>

            </div>
          </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Depart</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) { 

                ?> 

                        <tr>
                            <th scope="row"> <?= $row['id'] ?> </th>
                            <td> <?= $row['name'] ?></td>
                            <td> <?= $row['email'] ?></td>
                            <td> <?= $row['department'] ?></td>
                            <td> 

                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="./include/deletePersonalInfo.php?id=<?= $row['id']?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                <?php 
                        
                        }
                    } else {
                        echo "0 results";
                    }
                
                        
                ?>
          
                </tbody>
                </table>

            </div>
        </div>


      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>