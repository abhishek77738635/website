<?php
$servername='localhost';
$username='root';
$password='';
$dbname= 'details';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $query="INSERT INTO mydetails(name, email ,subject , message) VALUES ('$name' , '$email' , ' $subject' , ' $message ' )";
    $run= mysqli_query($conn,$query) ;

    if ($run){
        ?>
        <script>
       alert("data inserted succesfully");

       
       </script>
       <?php
       echo" DATA INSERTED SUCCESFULLY";
       header('LOCATION: index.php');
    }else {
        ?>
        <script>
        alert("data not inserted");
        </script>
        <?php
    }
}

?>