
<?php

$mysql = new mysqli('localhost','root','','farum');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>

<body>
    
<div class="container">
    
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Comments</h2>
        </div>

        <div class="col-lg-12">
            <form action="Validation/cont.php" method="POST">
                <div class="form-group">
                    <label for="comment-name">Comment name:</label>
                    <input type="name" name="Cn"class="form-control" id="comment-name"placeholder="Your comment name">
                </div>
                <div class="form-group">
                    <label for="comment-body">Comment:</label>
                    <input type="name" name="Com" class="form-control" id="comment-body"placeholder="Your comment">
                </div>
                <div class="form-group text-right">
                    <button type="submit"name="But" id="comment-add" class="btn btn-primary">add comment</button>
                </div>
                
               
               
               <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
               <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>


            </form>

            <div class="col-lg-12">
                <h3 class="text-center">Forum</h3>
            </div>
            <tr>
            <th><a style="color: green;">Comment name</a></th>
            <th>Comment</th><br />
            </tr>
          
            <?php
            $comments = mysqli_query($mysql, query: "SELECT * FROM `comments`");
            $comments = mysqli_fetch_all($comments);
            foreach ($comments as $comment){
                ?>
                <tr >
                <td><a style="color: green;">  <?= $comment[1]?></a></td><br />
                <td>  <?= $comment[2]?></td><br />
                </tr>
                <?php


            }
           
            ?>
                

        </div>
         
        
    </div >

       
                                            

</div>





<script language="javascript" scr="js/jquery-3.5.1.slim.min.js"></script>
<script language="javascript" scr="js/popper.min.js"></script>
<script language="javascript" scr="js/bootstrap.min.js"></script>
</body>
</html>