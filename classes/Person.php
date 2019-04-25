<?php
include('Database.php'); 
class Person {
private $uid; 

function __construct()
{  $this->uid; 
}

function login()
  { 
    if(isset($_POST['login'])){
    
    $db=new Database();
    $email= $_POST['email'];
    $password= $_POST['lpassword'];
    $found= $db->search_in_db('users', $data= array('e_mail'=>$email, 'pass'=>$password),'*'); 
    $search=$db->getdata('users', $data=array('e_mail'=>$email, 'pass'=>$password),'user_role'); 
    if($found){
       $_SESSION['mail']=$email;
       $_SESSION['pass']= $password;
      while ($urole= mysqli_fetch_assoc($search) ){
           $role=$urole['user_role']; 
        }
      switch ($role) {
        case 1:
           header("Location:../test/ui/Admin1.php");
             break;
        case 0: 
           header("Location:../test/UI/index.php");
             break; 
        default:
           header("Location:login.php");
             break;
        }
      }
      else echo "User Not Found! "; 
   }
}

public function search(){
  //error_reporting(0);
        $sdb = new database();
        $name=$_POST['name'];
        $Proddata= $sdb ->getdata('products',$data=array('p_name'=>$name),'*');

        while ($res = mysqli_fetch_assoc($Proddata)){
        $name=  $res['p_name'];
        $desc=  $res['p_description'];
        $price=  $res['p_price'];
        $category=  $res['p_category'];

    } if ($Proddata){
    echo "Product name is :".$name."<br>";
    echo "Product price is :".$price."<br>";
    echo "Product category is :".$category."<br>";
}
else
{echo "OOPs Not found ";}
        


}


public function logout() 
{
	session_destroy(); 
  header('location:../test/ui/login.php'); 
}
}
?>