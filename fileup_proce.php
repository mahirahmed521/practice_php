 //FILE UPLOD
 <?php 
    if (isset($_POST['Upload'])){
   
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $filetampname = $_FILES['file']['tmp_name'];
    $trigerpath = "uploads/$name"; 


    move_uploaded_file($filetampname,$trigerpath);
    $allowedtyps = ["jpg", "pdf"];
    $size_kb =$size/1024;
    $fileext = pathinfo($name, PATHINFO_EXTENSION);
    $status = true;
    if (!in_array($fileext,$allowedtyps) ){
        echo "Sorry File Type is Not Matched";
        $status = false;
    }
    if ($size_kb >"400"){
         echo "Sorry File Size is Not Matched";
        $status = false;
    }
   if($status){
        move_uploaded_file($filetampname,$trigerpath);
        echo "Succes";

    }
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"> <br> <br>
        <input type="submit" name="Upload" value="Upload">
    </form>
    
    