
  	 <?php
  	 session_start();
      
     if(isset($_POST['signup'])){
     	     require_once('Classes/User.php');
     	     $user= new User(); 
           echo "sssssssss"; 
     $user->signup();       
     }
     ///////////////login//////////
     if(isset($_POST['login'])){
    require_once('Classes/Person.php');
     $p= new Person();   
     $p->login();     
     }
     ///////logout/////////////////////
       if(isset($_POST['logout'])){
    require_once('Classes/Person.php');
     $p= new Person();   
     $p->logout();     
     }


/////////////////add///////////////////////
if(isset($_POST['addprod'])){
          require_once('classes/Admin.php'); 
   $a = new Admin(); 
   $a->addProduct(); }
/////////////////delete///////////////////////
if(isset($_POST['delprod'])){
          require_once('classes/Admin.php'); 
   $a = new Admin(); 
   $a->deleteProduct(); }
/////////////////updatate///////////////////////
if(isset($_POST['updprod'])){
          require_once('classes/Admin.php'); 
   $a = new Admin(); 
   $a->updateProduct(); }

   /////////////search/////////////////
   if(isset($_POST['search'])){
          require_once('classes/Person.php'); 
   $p= new Person(); 
   $p->search(); }
   ///////////////allusers///////////////
   if(isset($_POST['view'])){
          header('location:Classes/users.php');}


/////////////////addreview///////////////////////
if(isset($_POST['addrev'])){
          require_once('classes/User.php'); 
   $u = new User(); 
   $u->addreview(); }
/////////////////addreview///////////////////////
if(isset($_POST['addrate'])&&isset($_POST['rate'])){
          require_once('classes/User.php'); 
   $u = new User(); 
   $u->addrate(); }


