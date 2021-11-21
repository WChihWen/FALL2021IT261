<?php include 'includes/header.php';?> 

<script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
<section>  
   <div id="tabs">
      <ul>     
         <li><a href="#tabs-1">About Myself</a></li>   
         <li><a href="#tabs-2">Screenshot of MAMP</a></li>         
      </ul>      
      <div id="tabs-1">
         <div class="wrapper">
            <img class="person" src="images/desktop.jpg" alt="Chih Wen Wang" /> 
            <p>
               &nbsp;&nbsp;My name is Chih Wen Wang, and I come from Taiwan. When I was a university student in Taiwan, I studied information technology and management. However, I focused on learning how to build software and let it work on a computer or the Internet. While graduating, I became a programmer at a technology company in my country and worked for almost ten years. 
            </p>
            <p>
               &nbsp;&nbsp;However, my life was changed because I came to the United States with my wife. I have two goals now. One is that I have to improve my English ability. So, I go to study the ESL Program here. Another goal is that I yearn to earn an IT Program degree or certificate in the United States because I do not have any degree in the United States. In addition, I believe that I can learn more things from you guys.
            </p>
         </div>
      </div>
      <div id="tabs-2">
         <div class="divscreenshot">
            <h2>Screenshot of displaying MAMP</h2>
            <img src="images/MAMP.png" alt="MAMP" /> 
            <br><br>
            <h2>Screenshot of the error page</h2>
            <img src="images/errorpage.png" alt="errorpage" />             
         </div>  
      </div>        
   </div>
</section>
<aside>
<?php include 'includes/aside.php';?>
</aside>

<?php include 'includes/footer.php';?>
    
