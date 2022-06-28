<?php

include_once "../../utilis/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>

    <link rel="stylesheet" href="./includes/css/style.css">
   
   
</head>

<body>

    <style>
        .form-group {
            margin-top: 10px;
        }

        label {}

        .container-form {
            max-width: 960px;
        }
    </style>

    <div class="container container-form">
        <main>
            <div class="py-5 text-center">
                <img class="d-block   mx-auto mb-4" src="https://www.freepnglogos.com/uploads/student-png/student-png-sammilani-mahavidyalaya-undergraduate-and-24.png" alt="" width="72" height="57">
                <h2>Add students </h2>
                <p class="lead">Enter the Data of students to add them .</p>
            </div>
            <?php
            if (isset($_GET['sucess']) == "sucess") {
                echo " <div class='alert alert-success' role='alert'>
                <span>x</span>
                Sucess!
            </div>";
            } elseif (isset($_GET['sucess']) == 'error') {
                echo "   <div class='alert alert-danger' role='alert'>
                <span>x</span>
                Error!
            </div>";
            } else {
                echo "";
            }
            ?>




            <div class="row  ">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Recent added</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <?php
                        $sql = "SELECT * FROM students";

                        $result = $conn->query($sql);


                        if ($result->num_rows > 0) {
                            while ($students = $result->fetch_assoc()) {

                        ?>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0"><?= $students['name']; ?></h6>
                                        <small class="text-muted"><?= $students['email']; ?></small>
                                    </div>
                                    <span class="text-muted"><?= $students['nationality']; ?></span>
                                </li>
                        <?php

                            }
                        } else {
                        }
                        ?>


                    </ul>


                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Students Form</h4>
                    <?php
                    $sql = "SELECT * FROM students";

                    $id = $_POST['id'];

                    $sql = "SELECT * FROM students WHERE students.id = '$id'";

                    $result = $conn->query($sql);



                    $result = $conn->query($sql);


                    if ($result->num_rows > 0) {
                        $students = $result->fetch_assoc();



                    ?>
                        <form class="needs-validation" action="../save/index.php" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12">
                                
                                    <input type="hidden" class="form-control" id="name" name="id" value="<?= $students['id']; ?>" >

                                </div>
                                <div class="col-12">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value="<?= $students['name']; ?>" required>

                                </div>

                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Email</label>
                                    <input type="email" value="<?= $students['email']; ?>" class="form-control" id="email" name="email" placeholder="email@padandas.com" required>

                                </div>

                               

                                <div class="col-3">
                                    <label for="date" class="form-label">Date </label>
                                    <input type="date" value="<?= $students['dob']; ?>" class="form-control" id="date" name="date">

                                </div>


                                <div class="col-md-5">
                                    <label for="country" class="form-label">Country</label>
                                    <select name="nation" class="form-select" id="country">
                                        <option value="NP" <?php if ($students['nationality'] == 'NP') {
                                                                echo "selected";
                                                            } ?>>Nepal</option>
                                        <option value="IN" <?php if ($students['nationality'] == 'IN') {
                                                                echo "selected";
                                                            } ?>>India</option>
                                        <option value="CH" <?php if ($students['nationality'] == 'CH') {
                                                                echo "selected";
                                                            } ?>>China</option>
                                        <option value="UK" <?php if ($students['nationality'] == 'UK') {
                                                                echo "selected";
                                                            } ?>>United Kingdom</option>
                                    </select>
                                </div>

                                <div class="col-2">
                                    <label for="weight" class="form-label">Weight </label>
                                    <input type="number" value="<?= $students['weight']; ?>" class="form-control" id="weight" name="weight">
                                </div>
                                <div class="col-2">
                                    <label for="color" class="form-label">Color</label>
                                    <input type="color" value="<?= $students['favorite_color']; ?>" class="form-control h-50 d-inline-block" id="color" name="color" required>

                                </div>





                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Gender </label>


                                    <div class="form-check">
                                        <label class="form-check-label" for="male">Male</label>
                                        <input <?php if ($students['gender'] == 'male') {
                                                    echo "checked";
                                                } ?> id="male" name="gender" type="radio" value="male" class="form-check-input" required>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="female">Female</label>
                                        <input <?php if ($students['gender'] == 'female') {
                                                    echo "checked";
                                                } ?> class="form-check-input" id="female" value="female" name="gender" type="radio" class="form-check-input" required>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="other">Other</label>
                                        <input <?php if ($students['gender'] == 'other') {
                                                    echo "checked";
                                                } ?> class="form-check-input" id="other" value="female" name="gender" type="radio" value="other" class="form-check-input" required>
                                    </div>
                                </div>
                                <div class="col-md-6  ">
                                    <label for="hobby" class="form-label">Hobbies </label>
                                    <div class="form-check">
                                        <label class="form-check-label" for="travelling">Travelling</label>
                                        <input class="form-check-input" type="checkbox" class="form-check-input" id="travelling" value="travelling" name="hobby[]">
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="reading" value="reading" name="hobby[]">
                                        <label class="form-check-label" for="reading">Reading</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="singing" value="singing" name="hobby[]">
                                        <label class="form-check-label" class="form-check-label" for="singing">Singing</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="coding" value="coding" name="hobby[]">
                                        <label class="form-check-label" for="coding">Coding</label>
                                    </div>




                                </div>
                                <div class="col-md-5  ">

                                    <label class="form-check-label" id="profile">Profile</label>
                                    <input type="file" value="<?= $students['profile']; ?>" name="profile" id="profile" class="form-control" accept=".png">


                                </div>
                                <hr class="my-4">



                            </div>









                            <button class="w-25 btn btn-primary btn-lg" type="submit" name="update">Submit</button>
                            <button class="w-25 btn btn-danger btn-lg" type="submit" name="cancel">Cancel</button>




                        </form>
                    <?php


                    } else {
                    }
                    ?>
                </div>
            </div>
        </main>
        </div>


</body>

</html>