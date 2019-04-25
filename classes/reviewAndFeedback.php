<?php 
require_once('Database.php');
class reviewAndFeedback 
{
	private $uiid, $piid; 
	function __construct()
	{ 
		$this->piid; 
        $this->uiid ;
	}
public function AddReview()
{
if(isset($_POST['addrev'])){
    $db = new Database(); 
    $review=$_POST['review'];
    $email=$_SESSION['mail'];
    $search=$db->getdata('users', $data=array('e_mail'=>$email),'u_id'); 
    while ($uid= mysqli_fetch_assoc($search) ){
           $u_id=$uid['u_id']; 
        }
    if($db->AddData($data= array($review,$u_id),$column_name= array('review','u_id'),'review')) 
    	{echo "added"; 
}
else echo "not added"; 
        } 
} 

public function userReview(){
    $db = new Database();
    if(isset($_POST['view'])){
      $email=$_SESSION['mail'];
    $search=$db->getdata('users', $data=array('e_mail'=>$email),'u_id'); 
    while ($uid= mysqli_fetch_assoc($search) ){
           $u_id=$uid['u_id']; 
           echo $u_id."<br>"; 
           $review=$db->getdata('review', $data=array('u_id'=>$u_id),'review'); 
    while ($revs= mysqli_fetch_assoc($review) ){
    
        echo "this is review ".$i."<br>"; 
           $rev=$revs['review']; 
           echo $rev."<br>"; 
        }
       }
   }
  }

  public function productReview(){
    $db = new Database();
    if(isset($_POST['view'])){
      $email=$_SESSION['mail'];
      $pname= $_SESSION['pname']; 
    $search=$db->getdata('product', $data=array('p_name'=>$pname),'p_id'); 
    while ($uid= mysqli_fetch_assoc($search) ){
           $p_id=$pid['p_id']; 
           echo $p_id."<br>"; 
           $review=$db->getdata('review', $data=array('p_id'=>$p_id),'review'); 
    while ($revs= mysqli_fetch_assoc($review) ){
        echo "this is review ".$i."<br>"; 
           $rev=$revs['review']; 
           echo $rev."<br>"; 
        }
       }
   }
  }


}
?>