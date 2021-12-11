//HELLO Admin
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
    <!--Bootstrap live demo pop-up-->
    <!-- Button trigger modal -->


    <!-- Modal 
    <div class="modal fade" id="eventsmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

-->
    <!--BOOTSTRAP-->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> FACULTIES
                    <a href="neweventform.php" class="btn btn-primary">ADD</a>

                </h6>
            </div>


            <div class="card-body">
                <?php
                if (isset($_SESSION['sucesss']) && $_SESSION['sucesss'] != "") {
                    echo '<h3 class="bg-primary text-white">' . $_SESSION['success'] . '</h3>';
                    unset($_SESSION['success']);
                }

                if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                    echo '<h3 class="bg-danger text-white">  ' . $_SESSION['status'] . '</h3>';
                }




                // Selecting query from database
                //SELECT * FROM `events`
                $sql = "SELECT * FROM `events`";
                $result = mysqli_query($connection, $sql);

                ?>

                <div class="table-responsive">
                    <table class="table table-bordered" id="eventTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Genre</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>running dates</th>
                                <th>Description</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {
                                    //Here, we concatenate the data from the tables columns of the database into the html markup
                                    //print_r($row);
                                    //die();
                                    echo "<tr>" .
                                        "<td>" . $row["Genre"] . "</td>" .
                                        "<td>" . $row["Title"] . "</td>" .
                                        "<td>" . $row["Image"] . "</td>" .
                                        "<td>" . date("M d, Y", strtotime($row["Start"])) . " - " . date("M d, Y", strtotime($row["End"])) . "</td>" .
                                        "<td>" . $row["Description"] . "</td>" .
                                        '<td><a href="editevent.php?event=' . $row["id"] . '" class="btn btn-success">EDIT</a></td>' .
                                        //Before element is deleted, confirmation is asked. If confirm returns true, get by ID and delete particular row
                                        '<td><a href="#" class="btn btn-danger" onclick="if(confirm(message)) deleteevent(' . $row["id"] . ');">DELETE</a>' .
                                        '<form  action="../controllers/deleteevent.php" id="delete-event-' . $row["id"] . '"><input type="hidden" name="eventid" value="' . $row["id"] . '" ></form></td>' .
                                        "</tr>";
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
        <!-- Button trigger modal 
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eventsmodal">
            ADD
        </button>
-->

        <!-- Modal -->
        <div class="modal fade" id="eventsmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!--source:W3schools-->
                    <form method="POST" action="../controllers/newEvent.php" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="Genre" class="form-label">Genre</label>
                                <input type="text" class="form-control" name="genre" value="<?php echo (isset($_GET['genre']) ? $_GET['genre'] : ''); ?> ">
                            </div>

                            <div class="mb-3">
                                <label for="Title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="<?php echo (isset($_GET['title']) ? $_GET['title'] : ''); ?> " required>
                            </div>


                            <div class="mb-3">
                                <label for="Image" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="mb-3">
                                <label for="startDate" class="form-label">Running Dates</label>
                                <input id="startDate" type="date" class="form-control" name="startDate" value="<?php echo (isset($_GET['startDate']) ? date('d/m/Y', $_GET['startDate']) : ''); ?> ">
                            </div>

                            <div class="mb-3">
                                <label for="endDate" class="form-label">End Date</label>
                                <input id="endDate" type="date" class="form-control" name="endDate" value="">
                            </div>



                            <div class="mb-3">
                                <label for="descrpt" class="form-label">Description</label>
                                <textarea name="descrpt" id="descrpt" class="form-control" cols="30" rows="10"></textarea>
                            </div>



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" name="add">Add event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <a href="logout.php">Logout</a>;







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>



</html>