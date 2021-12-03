<?php 

include 'includes/header.php';

if (isset($_GET["logout"])){
    if($_GET["logout"] == 'do'){
        session_destroy();
        header('Location: login.php');   
    }
}else{
    if (isset($_SESSION["USERNAME"]) && $_SESSION["USERNAME"] != NULL){  
      
    }else{
        header('Location: login.php');        
    }
}

?> 


 <form>
    <h1>Sign Out of Page</h1>
    <br><br> <br><br>
    <div class="center">
    <p><?php echo 'Hi '.$_SESSION["USERNAME"].', do you like to sign out?';?></p>
    </div>       
    <br>
    <br>
    <div class="center">
        <a class="button" href="logout.php?logout=do">Confirm</a>   
        <a href="index.php?type=logoutcancel" class="button">Cancel</a>
    </div>
</form>
<br><br><br>
<?php include 'includes/footer.php';?>