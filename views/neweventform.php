<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script>
        let message = "Are you sure to delete?";

        function deleteevent(event_id) {
            document.getElementById("delete-event-" + event_id).submit()
        }
    </script>
</head>

<body>
    <?php
    include '../models/database_connection.php';
    include '../models/connect.php';



    ?>


    <!--BOOTSTRAP-->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Events
                    <a href="neweventform.php" class="btn btn-primary">ADD</a>

                </h6>
            </div>

            <!--Bootstrap FORM TEMPLATE-->
            <div class="card-body">
                <!--Allows form to upload files (enctype)-->
                <form method="POST" action="../controllers/newEvent.php" enctype="multipart/form-data">
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-2">
                            <label for="genre" class="col-form-label ">Genre</label>
                        </div>
                        <div class="col-4">

                            <input type="text" id="genre" class="form-control" name="genre" minlength="5" maxlength="60" value="<?php if (isset($_GET['genre'])) echo $_GET['genre']; ?> " required>
                        </div>
                        <div class="col-5 ">

                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-2">
                            <label for="title" class="col-form-label ">Title</label>
                        </div>
                        <div class="col-4">

                            <input type="text" id="title" class="form-control" name="title" minlength="5" maxlength="60" value="<?php if (isset($_GET['title'])) echo $_GET['title']; ?>" required>
                        </div>
                        <div class="col-5 ">

                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-2">
                            <label for="image" class="col-form-label">Image</label>
                        </div>
                        <div class="col-4">

                            <input type="file" id="image" class="form-control" name="image">
                        </div>
                        <div class="col-5 ">

                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-2">

                            <label for="start" class="col-form-label ">Start</label>
                        </div>
                        <div class="col-4">

                            <input type="date" id="start" class="form-control" name="start" value="<?php if (isset($_GET['startDate'])) echo $_GET['startDate']; ?>" required>
                        </div>
                        <div class="col-5">

                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-2">
                            <label for="end" class="col-form-label"> End</label>
                        </div>
                        <div class="col-4">
                            <input type="date" id="end" class="form-control" name="end" value="<?php if (isset($_GET['endDate'])) echo $_GET['endDate']; ?>" required>
                        </div>
                        <div class="col-5 ">

                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-2">
                            <label for="description" class="col-form-label">Description</label>
                        </div>
                        <div class="col-4">
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" required><?php if (isset($_GET['descrpt'])) echo $_GET['descrpt']; ?></textarea>
                        </div>
                        <div class="col-5 ">

                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-3">
                        <div class="col-3">
                            <a href="adminpanel.php" class="btn btn-warning btn-lg">Cancel</a>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-success btn-lg" name="add">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <a class="btn btn-outline-primary mb-3" href="../login.php">Logout</a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>



</html>