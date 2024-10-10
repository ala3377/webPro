    <?php

    require "db.php";



        if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {

        $car_name = $_POST['car_name'];
        $Car_Model = $_POST['Car_Model'];
        $car_color = $_POST['Color'];
        $Car_Capacity = $_POST['Car_Capacity'];
        $Car_Fuel_Type = $_POST['Car_Fuel_Type'];
        $Car_Condition = $_POST['Car_Condition'];
        $Car_Price = $_POST['Car_Price'];
        $compony_name = $_POST['compony_name'];

        $image = $_FILES["image"]["name"]; //getting the image name from client machine
        /*
        ###Set image name with current time###
        $imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
        $randomName = "IMG_" . date("his") . "." . $imageFileType;
        */
        $tempName = $_FILES["image"]["tmp_name"]; //temporary file name of the file on the server.
        $imageName = $image; //set the the image name with current name
        $targetDirectory = "../Images_OF_CAR_BRAND/" . $imageName; //declaring the folder in which the image will be store
        move_uploaded_file($tempName, $targetDirectory); //move the image in that folder


        $image_of_car = $_FILES["car_image"]["name"]; //getting the image name from client machine
        /*
        ###Set image name with current time###
        $imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
        $randomName = "IMG_" . date("his") . "." . $imageFileType;
        */
        $temp_of_car_Name = $_FILES["car_image"]["tmp_name"]; //temporary file name of the file on the server.
        $image_of_car_Name = $image_of_car; //set the the image name with current name
        $targetDirectory_of_car_image = "../IMAGES_OF_CARS/" . $image_of_car_Name; //declaring the folder in which the image will be store
        move_uploaded_file($temp_of_car_Name, $targetDirectory_of_car_image); //move the image in that folder



        $query = "INSERT INTO cars_shop.car(CAR_Image_BRAND,car_image,car_name,CAR_MODEL,CAR_COLOR,CAR_CAPACITY,CAR_FUEL_TYPE,CAR_CONDITION,CAR_PRICE,compony_name) VALUES ('$targetDirectory','$targetDirectory_of_car_image','$car_name', '$Car_Model', '$car_color', '$Car_Capacity', '$Car_Fuel_Type', '$Car_Condition', '$Car_Price','$compony_name')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location:../html/Add_Cars.html"); // Redirect user to index.html

        } else {
            echo $result . "<br />" . mysqli_error($conn);
        }
        }
        ?>
