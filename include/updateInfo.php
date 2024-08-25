<?php 
require './db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM personal_info WHERE id=$id";
$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_assoc($result);


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
    
    <?php include'./../component/navabar.php' ?>

      <div class="container mt-5">
        <div class="row">
          <div class=" col-md-6 offset-md-3">
          <div class="card">
            <div class="card-body">
            <h5 class="card-title text-center">Update</h5>

              <form action="./updateActionInfo.php?id=<?=$data['id'] ?>" method="POST" >

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="<?= $data['name'] ?>">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $data['email'] ?>">
                </div>

                <div class="mb-3">
                    <label for="roll" class="form-label">Department</label>
                    <select class="form-control" name="department">
                        <option value="">Choose one</option>
                        <option value="eee" <?php echo $data['department'] == 'eee' ? 'selected' : '' ; ?> >EEE</option>
                        <option value="cse" <?php echo $data['department'] == 'cse' ? 'selected' : '' ; ?>>CSE</option>
                    </select>
                </div>

                <div>
                    <button type="submit" name="update-submit" class="btn btn-primary btn-block ">Update</button>
                </div>

              </form>

            </div>
          </div>
          </div>
        </div>



      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>