<?php
       include 'connect.php';
        ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>view data</title>
    
</head>

<body>
  
    <div class="container-fluid mt-4">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Detail</h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped  table-hover">
                            <thead>
                                <thead>

              <tr>
                <th>id</th>
               <th>full_name</th>
                <th>user_name</th>
                <th>email</th>
                <th>contact</th>
                <th>password</th>
                <th>cpassword</th>
                <th>gendar</th>
                <th colspan="2">Actions</th>
            </tr>
                            
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM student";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $student['id']; ?></td>
                                                <td><?= $student['full_name']; ?></td>
                                                <td><?= $student['user_name']; ?></td>
                                                <td><?= $student['email']; ?></td>
                                                <td><?= $student['contact']; ?></td>
                                                <td><?= $student['password']; ?></td>  
                                                <td><?= $student['cpassword']; ?></td>
                                                <td><?= $student['gendar']; ?></td>
                                                <td>
                                                        <td><a href="update.php?id=<?php echo $student['id'];?>" class="btn btn-success btn-sm">Edit</a></td>
                                                     <td><a class="btn btn-danger btn-sm " href="insert_db.php?id=<?php echo $student['id']; ?>">Delete</a></td>

                                                    
                                                        
                                                </td>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

 <?php  include 'footer.php' ?>

</body>
</html>