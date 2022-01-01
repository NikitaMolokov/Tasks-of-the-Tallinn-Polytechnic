

<?php



$Eng_select='';
$Ru_select='';
$language='';

if((isset($_GET['language']) && $_GET['language']=='Ru') || !isset($_GET['language'])){
  $Ru_select='selected';
  $language='Ru';
}
else{
  $Eng_select='selected';
  $language='Eng';
}



$con = new mysqli('localhost','root','','language');
$sql = "SELECT word FROM words WHERE lang = '$language'";
$con->set_charset('utf8');
$result = $con->query($sql);
$row=$result->fetch_all(MYSQLI_ASSOC);



?>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .page{
  overflow: hidden;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.footer {
  margin-top:auto;
  padding: 20px;
  background-color:#00bfff
}
.ROWS{
  position: absolute;
  bottom: 20; right: 60px;
}
.ROW{
  position: absolute;
  bottom: 20; right: 0;
}

  </style>
</head>
<body>
<div class="page">
    <header class="header">
    
          
    
    
    <div class="row ">
        <div class="col-12">
          
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"><?php echo $row['22']['word'] ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/index.php"><?php echo $row['1']['word'] ?> <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/SPLR01.php"><?php echo $row['2']['word'] ?> <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/SPLR02.HTML"><?php echo $row['3']['word'] ?> <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/SPLR03.HTML"><?php echo $row['4']['word'] ?> <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/SPLR04.HTML"><?php echo $row['5']['word'] ?> <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/SPLR07.HTML"><?php echo $row['6']['word'] ?><span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/SPLR08.HTML"><?php echo $row['7']['word'] ?> <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#"><?php echo $row['8']['word'] ?> <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#"><?php echo $row['9']['word'] ?> <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#"><?php echo $row['10']['word'] ?>  <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#"><?php echo $row['11']['word'] ?> <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#"><?php echo $row['12']['word'] ?> <span class="sr-only"></span></a>
                </li>
                
                <li class="ROWS" >
                  <a ><?php echo $row['13']['word'] ?><span class="sr-only"></span></a>
                </li>
               
                

                <li  >
                <select class="ROW" onchange="set_language()" name="language" id="language" aria-label="Default select example">
          
                <option value="Ru"<?php echo $Ru_select?>>Ru</option>
                <option value="Eng"<?php echo $Eng_select?>>Eng</option>
          

                </select>
                </li>
                
           
       
               
             
              </ul>
             
            </div>
          </nav>
     </div>
    </div>
    </header>
    <main class="content">
        <div>
            <p class="font-weight-bold" ><?php echo $row['23']['word'] ?></p>
            <img src="/In.jpg" width="250px"height="250px"alt="..." class="rounded-left">
            <img src="/In2.jpg" width="250px"height="250px" alt="..." class="rounded-left">
            <img src="/In3.jpg" width="250px"height="250px"alt="..." class="rounded-left">     
            <p class="font-weight-bold"style="float:right;" >
            <?php echo $row['25']['word'] ?></br>
            <?php echo $row['26']['word'] ?></br>
                
            <?php echo $row['27']['word'] ?></br>
            <?php echo $row['28']['word'] ?></br>
            <?php echo $row['29']['word'] ?></br>
                
            <?php echo $row['30']['word'] ?></br>
            <?php echo $row['31']['word'] ?> </br>
            <?php echo $row['32']['word'] ?></br>
            <?php echo $row['33']['word'] ?></br>
            <?php echo $row['34']['word'] ?></br>
            <?php echo $row['35']['word'] ?></br></br></br></br></br></br></br></br>
    
    
            <?php echo $row['36']['word'] ?></br>
            <?php echo $row['37']['word'] ?></br>
            <?php echo $row['38']['word'] ?></br>
    
            <?php echo $row['39']['word'] ?></br>
            <?php echo $row['40']['word'] ?></br>
    
            <?php echo $row['41']['word'] ?></br>
            <?php echo $row['42']['word'] ?></br>
    
            <?php echo $row['43']['word'] ?></br>
            <?php echo $row['44']['word'] ?></br>
            <?php echo $row['45']['word'] ?></br>

                
                
                
                
                
                
                </p>  
        </div>
    
       <div>
        <p class="font-weight-bold" ><?php echo $row['24']['word'] ?></p>
        <img src="/Foto/1.png" width="800px"height="450px"alt="..." class="rounded-left"> 
       </div>
       


    </main>
    
    <footer class="footer">

      <div class="text-center p-3" >
      
      <a class="text-white" ><?php echo $row['21']['word'] ?></a>
      </div>


    </footer>


 


</div>


<!--//  Конец всего сайта  // -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
  function set_language(){
    var language=jQuery('#language').val();
    window.location.href='http://localhost:3000/SPLR01.php/?language='+language;
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>