<?php
 $posts = [
        ["profilePicture" =>  "https://s3.amazonaws.com/uifaces/faces/twitter/k/128.jpg" , 
         "name" => "Theresa W." , 
         "place" => "East River Park",
        "placeExtra" => "Brooklyn, NY",
        "picturePlace" => "http://photos.cntraveler.com/2015/11/24/56549f68659c4b48748655fc_benagil-sea-cave-algarve-portugal-cr-getty.jpg",
        "time" => "older"],
        
     ["profilePicture" =>  "https://s3.amazonaws.com/uifaces/faces/twitter/k/128.jpg" , 
         "name" => "Nina M." , 
         "place" => "Rubirosa",
        "placeExtra" => "New York, NY",
        "pricturePlace" => "",
        "time" => "older"],
     
     ["profilePicture" =>  "https://s3.amazonaws.com/uifaces/faces/twitter/k/128.jpg" , 
         "name" => "Sean B." , 
         "place" => "Blue Bottle Coffee",
        "placeExtra" => "South of Market, San Fransisco",
        "picturePlace" => "",
        "time" => "recent"],
     
     ["profilePicture" =>  "https://s3.amazonaws.com/uifaces/faces/twitter/k/128.jpg" , 
         "name" => "Mike A." , 
         "place" => "Land's Workout",
        "placeExtra" => "San Fransisco",
        "picturePlace" => "http://photos.cntraveler.com/2015/11/24/56549cc7659c4b4874865506_mu-cang-chai-vietnam-cr-getty.jpg",
        "time" => "older"],
    ];

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SWARM</title>
</head>
<body>

<style>
    
    body
    {
        font-family: Helvetica;
    }
    
    #profilePicture
    {
        border-radius = 10px;
    }
    article 
    {
        display: flex;
        margin-bottom: 30px;
    }
    
    article img
    {
        width: 60px;
    }
    
    article h3
    {
        margin-top: 0;
        padding-top: 0;
        margin-bottom: 0.2em;
        color: #149ACF;
        font-size: 1.3em;
    }
    
    article div
    {
        display: block;
    }
    
    #picturePlace
    {
    width: 200px;  
        margin-top: 10px;
    }
    
    #place1
    {
        color: #149ACF;
        font-weight: bold;
    }
    
    #place2
    {
        color: black;
        font-weight: bold;
    }
    
    #text
    {
        padding-left: 5px;
    }
    
    </style>
    

    <?php 
if(isset($_POST['btnOld']))
{
 
?>
    
<section class="timeline">
    <?php foreach ( $posts as $post ): if ($post[ 'time']=="older" ) { ?>
    <article>
        <div>
            <img id="profilePicture" src="<?php echo $post['profilePicture'] ?>" alt="">
        </div>

         <div id="text">
            <h3><?php echo $post['name'] ?></h3>
            <div id="place1">
                <?php echo $post['place'] ?>
            </div>
            <div id="place2">
                <?php echo $post['placeExtra'] ?>
            </div>
            <?php if(!empty($post['picturePlace'])  ) { ?>
                <img id="picturePlace" src="<?php echo $post['picturePlace']; ?>"><?php
            }?>
        </div>
    </article>
    <?php } endforeach ?>
</section>

 <?php   
    }
    ?>
    
     <?php 
if(isset($_POST['btnNew']))
{
 
?>
    
<section class="timeline">
    <?php foreach ( $posts as $post ): if ($post[ 'time']=="recent" ) { ?>
    <article>
        <div>
            <img id="profilePicture" src="<?php echo $post['profilePicture'] ?>" alt="">
        </div>

        <div id="text">
            <h3><?php echo $post['name'] ?></h3>
            <div id="place1">
                <?php echo $post['place'] ?>
            </div>
            <div id="place2">
                <?php echo $post['placeExtra'] ?>
            </div>
            <?php if(!empty($post['picturePlace'])  ) { ?>
                <img id="picturePlace" src="<?php echo $post['picturePlace']; ?>"><?php
            }?>
            
        </div>
    </article>
    <?php } endforeach ?>
</section>

 <?php   
    }
    ?>

    <form action="" method="post">
     <input type="submit" name="btnOld" value="Show older than 1 hour" />
    <input type="submit" name="btnNew" value="Show newer than 1 hour" />
    </form>
    
    
</body>
</html>