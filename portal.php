
 
<?php 
session_start();

?>
<?php
$_SESSION['res']="";
if(isset($_POST['send']))
{

$_SESSION['l1'] = $_POST['lng_f'];
$_SESSION['l2'] = $_POST['lng_s'];
}
$s1 = 0;
$s2 = 0;
 if(isset($_POST['send1']))
{

$text= $_POST['tex'];
$lng = $_SESSION['l2'];
$s1 = 1;
 Translate ($text, $lng);

  // Replace the subscriptionKey string value with your valid subscription key.
 

}
if(isset($_POST['send2']))
{

$text= $_POST['tex2'];
$lng = $_SESSION['l1'];
$s2 = 1;
 Translate ($text, $lng);

  // Replace the subscriptionKey string value with your valid subscription key.
 

}
  function Translate ($text, $target) {
    $key = 'ba2ebdf2cc0748f7b0bea6db34a15ca0';

  $host = "https://api.microsofttranslator.com";
  $path = "/V2/Http.svc/Translate";

  //$target = "hi";
  //$text = $_POST['tex'];

  $params = '?to=' . $target . '&text=' . urlencode($text);

  $content = '';

      $headers = "Content-type: text/xml\r\n" .
          "Ocp-Apim-Subscription-Key: $key\r\n";

      // NOTE: Use the key 'http' even if you are making an HTTPS request. See:
      // http://php.net/manual/en/function.stream-context-create.php
      $options = array (
          'http' => array (
              'header' => $headers,
              'method' => 'GET'
          )
      );
      $context  = stream_context_create ($options);
      $result = file_get_contents ($host . $path . $params, false, $context);
     // echo $result;
      $_SESSION['res']=$result;
      $_SESSION['req']=$text;

  

 


}

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    	/* Pen-specific styles */
html, body, section {
  height: 100%;
}

body {
  color: #0d0d0d;
  
  line-height: 150%;
  
  
}



h1 {
  font-size: 1.75rem;
  margin: 0 0 0.75rem 0;
}

/* Pattern styles */
.containr {
  display: flex;
}

.left-half {
  display: flex;
  flex-direction: column;
  background-color: #fff;
  flex: 1;
  padding: 1rem;
}

.right-half {
  display: flex;
  flex-direction: column;
  background-color: #0d0d0d;
  flex: 1;
  color: #fff;
  padding: 1rem;
}
.lgo{
  display: flex;
  flex-direction: column;
  justify-content: center;
}
    </style>
</head>

<body>
<nav class="navbar  navbar-dark unique-color-dark sticky-top">
    <span class="navbar-text white-text" value="from">
      
    </span>
    <span class="lgo">
      <i class="fa fa-language fa-2x" aria-hidden="true"></i>
    </span>
    <span class="navbar-text white-text" value="to">
        
    </span>
        <a style="margin-left: 50%;color:white;" href="logout.php">Logout</a>.</p>
</nav>
<section class="containr">
  <div class="left-half">
    <article>
      <h1></h1>
      <p><?php 
      	$myfile1 = fopen('u1.html','a');
      	$myfile2 = fopen('u2.html','a');
      if($_SESSION['res']){
      	if($s1 == 1){
        $txt = '<p style="color:black"><b>You:</b> '.$_SESSION['req'].'</p>'.'<br>';
        $trans = '<p style="color:white"><b>Client:</b> '.$_SESSION['res'].'</p>'.'<br>';
        fwrite($myfile1, $txt);
        fwrite($myfile2, $trans);
		fclose($myfile1);
		fclose($myfile2);
		}
		else
		{
		$txt = '<p style="color:white"><b>You:</b> '.$_SESSION['req'].'</p>'.'<br>';
        $trans = '<p style="color:black"><b>Client:</b> '.$_SESSION['res'].'</p>'.'<br>';
        fwrite($myfile2, $txt);
        fwrite($myfile1, $trans);
		fclose($myfile1);
		fclose($myfile2);
		}
      
      }
      ?>
      	<iframe src="u1.html" width="500" height="400" frameborder="0" style="overflow:scroll;"></iframe>
      </p>
    </article>
    <p>Download this Chat <a href="u1.html" download>here</a>.</p>
    <form action="" method="POST">
    <div class="md-form" style="position:fixed;bottom: 0;width:78%;">
      
    <input type="text" id="form11" class="form-control" style="display: inline;width:50%" name="tex">
    <label for="form1" style="display: inline;">Chat here...</label>
    <button type="submit" class="btn btn-primary" name="send1" value="submit" ><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
  
</div>
      </form>   
  </div>


  <div class="right-half">
    <article>
      <h1>

     </h1>
      <p>
      	<iframe src="u2.html" width="500" height="400" frameborder="0" style="overflow:scroll;"></iframe>

      </p>
    </article>
        <p>Download this Chat <a href="u2.html" download>here</a>.</p>

    <form action="" method="POST">
    <div class="md-form" style="position:fixed;bottom: 0;width:78%;">
    <input type="text" id="form11" class="form-control" style="display: inline;width:50%" name="tex2">
    <label for="form1" style="display: inline;">Chat Here...</label>
    <button type="submit" class="btn btn-primary" name="send2" value="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
    
</div>
        </form>
  </div>
  
</section>

        
    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
  
</body>

</html>
