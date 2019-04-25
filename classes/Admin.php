<?php 
include('Database.php');

class Admin{
private $id; 
function __construct()
{

	$this->id; 
}

        


public function allProducts() {
  $obj= new Database(); 
  $pid =$obj->getdata('products',$data= array(''),'p_id');
$pnamee =$obj->getdata('products',$data= array(''),'p_name');
$desc  =$obj->getdata('products',$data= array(''),'p_category');
$categ =$obj->getdata('products',$data= array(''),'p_description');
$price =$obj->getdata('products',$data= array(''),'p_price');
echo "<table  border='1px solid black'>"; 
echo "<tr><th>PID</th><th>Proudct Name</th><th>Product Category</th><th>Description</th><th>Price</th></tr>";

   
while ($pids= mysqli_fetch_assoc($pid)){
      $pnames  = mysqli_fetch_assoc($pnamee);
      $pdescs = mysqli_fetch_assoc($desc);
      $pcategs= mysqli_fetch_assoc($categ);
      $prices = mysqli_fetch_assoc($price);
         $proid  = $pids['p_id'];
         $pname  = $pnames['p_name'];
         $pdesc  = $pdescs['p_category'];
         $pcateg = $pcategs['p_description']; 
         $pprice = $prices['p_price'];
          echo "<tr><td>$proid</td><td>$pname</td><td>$pdesc</th><td>$pcateg</td><td>$pprice</td></tr>";
        }        
  echo "</table> ";
}         


public function deleteProduct(){

         $obj= new Database(); 
         $productname =$_POST['prodname'];
         $productcatg= $_POST['prodcatg']; 

          $delete = $obj->Delete_Data('products', $data = array('p_name'=> $productname, 'p_category'=>$productcatg));
          if($delete)
            {
              echo "deleted!";
            } 
          else"please try again.";
}




public function updateProduct(){
        
           $obj= new Database();
           $edited= $_POST['editedprod'];
           $newwname =$_POST['newname'];
           $newwprice =$_POST['newprice'];
           $newwdesc =$_POST['newdesc'];
           $newwcatg= $_POST['newcatg'];

           
      $search= $obj->getdata('products',$data1=array('p_name'=>$edited),'*');
      while ($result= mysqli_fetch_assoc($search)) {
            $productid = $result['p_id'];
            
      }
            
      $update= $obj->update_data('products',$data=array('p_name'=>$newwname,'p_price'=>$newwprice,'p_description'=>$newwdesc,'p_category'=>$newwcatg),$where = array('p_id'=>$productid));

      if($update)
        echo "updatedd";

      else
        echo "Failed";
}

public function allCategories() {

$conn= new mysqli('127.0.0.1','root','','product_review');
       if($conn->connect_error){
       die("Connection failed: " . $conn->connect_error);
          }
      $sql = "SELECT DISTINCT p_category FROM products";
$result = $conn->query($sql);
          

echo "<table  border='1px solid black'>"; 
echo "<tr><th>ID</th><th>Product Category</th></tr>";
   $i=1;
if ($result->num_rows > 0) {
   
    while($rows = $result->fetch_assoc()) {
               $row= $rows['p_category']; 
        echo "<tr><td>$i</td><td>$row</td></tr>"; 
        $i++; 
    }
   
  echo "</table> "; 
  $conn->close();
}
}          
 
public function addProduct()
{

         $pnamee=$_POST['pname'];
         $pdesc=$_POST['pdesc'];
         $pcateg=$_POST['checkout_country'];
         $pprice=$_POST['pprice'];
         $obj = new Database();
         $obj-> AddData($data= array('p_name'=> $pnamee,'p_description'=> $pdesc,'p_category'=>$pcateg,'p_price'=>$pprice),
         $column_name= array('p_name','p_description','p_category','p_price'),'products') ;
         header("Location:../test/UI/Admin2.php");


}
        
       



}
?>
