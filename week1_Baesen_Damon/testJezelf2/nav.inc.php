<?php
$pad = $_SERVER['SCRIPT_NAME'];
?> 
<style>
ul
    {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }   
    li 
    {
        width: 50%;
        float: left;
        display: block;
        margin-bottom: 20px;
        text-align: center;
        background-color: #107902;
        padding-top: 30px;
        padding-bottom: 30px;
        margin-left: auto;
        margin-right: auto;
        
    }
    li a
    {
     color: white;
        font-weight: bold;
        text-decoration: none;
      
    }
    
    
     li a:hover,
    li a:active
    {
     color: blue;
      
    }
    
    .active
    {
        background-color: #19bc03;
    }
</style>
       <nav>
        <ul>
            <li <?php if (stripos($pad, "index.php")){echo 'class="active"';} ?>><a href="index.php">Home</a></li>
            <li <?php if (stripos($pad, "contact.php")){echo 'class="active"';} ?>><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    
   
  
