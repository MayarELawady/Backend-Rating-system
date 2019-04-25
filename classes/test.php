<form  method="post">
   <input type="submit" name="view" value="view all products" >
</form>
<form  method="post">
   <input type="submit" name="viewu" value="view all users" >
</form>
<form  method="post">
   <input type="submit" name="viewc" value="view all categories" >
</form>

<?php 
  include('Admin.php');
  if(isset($_POST['view'])){

  session_start(); 

 echo "<h3>List pf all products: </h3>";
   $a = new Admin(); 
   $a->allProducts(); 
     echo "<h3>if you want to delete: </h3>";
 echo"<form method='post'>
          <input type='text' name='option' placeholder='Entert PID'required>
          <input type='submit' name='delete' value='delete'required >
         
  </form>";
  echo "<h3>if you want to update: </h3>";
   echo "<form method='post'>
           <input type='text' name='pid' placeholder='Entert PID'required>
          <input type='text' name='pnname' placeholder='Entert new name'required>
          <input type='text' name='pndesc' placeholder='Entert new description 'required >
          <input type='text' name='pnprice' placeholder='Entert new price'>
          <input type='text' name='pncateg' placeholder='Entert new category'required>
          <input type='submit' name='update'value='update'>  
         
 </form>";
 echo "<h3>if you want to add: </h3>";
 echo"<form method='post'>
           
          <input type='text' name='pname' placeholder='Entert name'>
          <input type='text' name='pdesc' placeholder='Entert description ' required>
          <input type='text' name='pprice' placeholder='Entert price' required>
          <input type='text' name='pcateg' placeholder='Entert category' required>
          <input type='submit' name='add'value='update'>  
         
 </form>";
  }

  if(isset($_POST['delete']))
  {
      $a = new Admin();
      $a->deleteProduct(); 
 }
if (isset($_POST['update']))
{  
  $a = new Admin();
      $a->updateProduct(); 
      $a->allProducts();
      
}
if(isset($_POST['add']))
  {
      $a = new Admin();
      $a->addProduct(); 
      $a->allProducts();
 }
  if(isset($_POST['viewc'])){
      $a=new Admin();
       
      $a->allCategories();
    }
    if(isset($_POST['viewu'])){
      $a=new Admin();
       
      $a->allUsers();
    }
    
      
      




?>
