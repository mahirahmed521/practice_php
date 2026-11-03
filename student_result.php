<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class student{
        public $id;
        public $name;
        public $batch;
        public $data;
        public function __construct($file){
            $filehandle = file($file);
            $this->data = $filehandle;
            return $this->data;

        }
        public function results($id) { 
            foreach($this->data as $line){
                list($stid,$name,$batch,$result) = explode(",",$line);
                if($stid == $id){
                    echo "Student ID: ".$stid."<br>";
                    echo "Student Name: ".$name."<br>";
                    echo "Student Batch: ".$batch."<br>";
                    echo "Result: ".$result."<br>";
                }
            }
        }
        

        }
    $object = new student("results.txt");
    $object->results('103');

    ?>
</body>
</html>