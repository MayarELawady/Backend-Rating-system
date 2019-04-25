<?php 
require_once('Database.php');
class User {
 
private $uname; 


 function __construct(){
              
     $this->uname ;
     }

public function update_profile(){
       if(isset($_POST['sub'])){
      $use= $_SESSION['mail'];
      $fname=$_POST['f_name'];
      $lname=$_POST['l_name'];
      $password=$_POST['pass']; 
      $email=$_POST['e_mail'];
       $conn= new mysqli('127.0.0.1','root','','product_review');
       if($conn->connect_error){
       die("Connection failed: " . $conn->connect_error);
          }
       $sql = "UPDATE users SET f_name='$fname', l_name='$lname', pass='$password', e_mail='$email' WHERE e_mail= '$use'"; 
              //
           if($result = $conn->query($sql)){
            echo "updated";  
          }
          else{ 
            echo "not added ";
          }
          $conn->close();
        }
      }

public function signup(){    
        if(isset($_POST['signup'])){
       
          $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $password=$_POST['spassword'];
      $email=$_POST['semail'];
      $country=$_POST['checkout_country'];
      $address=$_POST['add'];
      $phone=$_POST['phone'];
      $_SESSION['mail']= $email;
      $name =$_SESSION['email']; 
        $obj = new Database();
        $obj-> AddData($data= array('f_name'=> $fname,'l_name'=> $lname,'e_mail'=>$email,'pass'=>$password,'addess'=>$address,'phone'=>$phone,'country'=>$country),
        $column_name= array('f_name','l_name','e_mail','pass','addess','phone','country'),'users') ;
        header("Location:../test/UI/index.php"); 
       } 
      
   }
   public function AddReview()
{
if(isset($_POST['addrev'])){

    $db = new Database(); 
    $myreview=$_POST['prreview'];
    $productname=$_POST['prname'];
    $email=$_SESSION['mail'];
    //$email="hadeer@yahoo.com";

    $productdata= $db->getdata('products',$data= array('p_name' => $productname ),'p_id');
   // $search=      $db->getdata('users', $data=array('e_mail'=>$email),'*'); 
    $search=   $db->getdata('users', $d=array('e_mail'=>$email),'u_id');

   while( $newpid= mysqli_fetch_assoc($productdata)){
         $p_id=$newpid['p_id']."<br>";
 echo "HELLOOOOOOO";

}
    while ($re= mysqli_fetch_assoc($search)){
           $u_id= $re['u_id']."<br>"; 

             echo "Helloooo";
        }



    if($db->AddData($data= array('review'=>$myreview,'u_id'=>$u_id,'p_id'=>$p_id),$column_name= array('review','u_id','p_id'),'review')) 
        {echo "added"; 
}
else echo "not added"; 

        } 
} 








//rattttttttttttte//
    public  function addrate()
{

    $db = new Database(); 
    $myrate=$_POST['rate'];
    $productname=$_POST['proname'];
    $email=$_SESSION['mail'];
    

    $productdata= $db->getdata('products',$data= array('p_name' => $productname ),'p_id');
   // $search=      $db->getdata('users', $data=array('e_mail'=>$email),'*'); 
    $search= $db->getdata('users', $d=array('e_mail'=>$email),'u_id');


   while( $newpid= mysqli_fetch_assoc($productdata)){

         $p_id=$newpid['p_id']."<br>";

}
    while ($re= mysqli_fetch_assoc($search)){
           $u_id= $re['u_id']."<br>"; 


        }



    if($db->AddData($data= array('rate'=>$myrate,'u_id'=>$u_id,'p_id'=>$p_id),$column_name= array('rate','u_id','p_id'),'rates')) 
        {echo "added"; 
}
else echo "not added"; 

        } 

  } 

?>