<?php
$todo = [
     [
        "beschrijving" => "Post screenshot to Dribble",
        "urenWerk" => "1",
        "categorie" => "thuis"
     ],   
     [
        "beschrijving" => "Publish website",
        "urenWerk" => "15",
        "categorie" => "school"
     ],   
     [
        "beschrijving" => "Launch Mac version",
        "urenWerk" => "3",
        "categorie" => "school"
     ],   
     [
        "beschrijving" => "Release iPhone Update",
        "urenWerk" => "2",
        "categorie" => "werk"
     ],    
     [
        "beschrijving" => "Publish Application",
        "urenWerk" => "7",
        "categorie" => "werk"
     ]
        ];

    $teller = 0;

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oefening 3</title>
</head>
<body>
  
  <h1>TODO</h1>
   <style>
       body
       {
        background-color: lightblue;   
       }
       
       h1
       {
         text-align: center;
           font-weight: bold;
       }
       
       p
       {
         padding-top: 10px;
           padding-bottom: 10px;
           margin-top: 0px;
           margin-bottom: 1px;
           text-align: center;
           font-weight: bold;
           color: white;
       }
       
       .greenTask
        {
            background-color: green;
        }
        
        .orangeTask
        {
            background-color: orange;
        }
        
        .redTask
        {
            background-color: red;
        }
    </style> 
   
    <?php foreach ( $todo as $post ): ?>
    <article>
       <div>
            <p <?php  
                if ($post['urenWerk'] <= 1)
                    {
                        echo 'class="greenTask"';
                    }
                elseif ($post['urenWerk'] <= 5)
                    {
                        echo 'class="orangeTask"';
                    }
                else
                    {
                        echo 'class="redTask"';
                        
                    }            
      ?> >   
           <?php echo $post['beschrijving'];  ?>         
            </p>
        </div>
    </article>
    <?php endforeach ?>
    
</body>
</html>