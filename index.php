
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
    	html, body, section {
  height: 100%;
}

body {
  color: #fff;
  
  
  line-height: 150%;
  text-align: center;
 
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
  justify-content: center;
  text-align: justify;
  background-image: url("flags.jpg");
  background-size:cover;
  background-repeat: no-repeat;
  flex: 1;
  padding: 1rem;
}
.right-half-hd {
    display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: justify;
  background-image: url("flags.jpg");
  background-size:cover;
  background-repeat: no-repeat;
  flex: 1;
  padding: 1rem;
}
.left-half-hd {
    display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: justify;
  background-color: #0d0d0d;
  flex: 1;
  padding: 1rem;
}

.right-half {
    display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: justify;
  background-color: #001a33;
  flex: 1;
  padding: 1rem;
}
    </style>
</head>

<body>

    
<section class="containr">
  <div class="left-half">
    <h1>  
 </h1>
  </div>
 
  <div class="right-half">
    <article style="margin-left: 5rem;">
      <span class="act"><h1>Hi there! I guess you need some help...</h1>
      <p>Please select your language:</p>
      <form method="POST" action="portal.php">
      <select name="lng_f">
      	
      	<option value="af">Afrikaans</option>
<option value="ar">Arabic</option>
<option value="bn-BD">Bangla</option>
<option value="bs-Latn">Bosnian</option>
<option value="bg">Bulgarian</option>
<option value="yue">Cantonese (Traditional)</option>
<option value="ca">Catalan</option>
<option value="zh-CHS">Chinese Simplified</option>
<option value="zh-CHT">Chinese Traditional</option>
<option value="hr">Croatian</option>
<option value="cs">Czech</option>
<option value="da">Danish</option>
<option value="nl">Dutch</option>
<option value="en" selected="selected">English</option>
<option value="et">Estonian</option>
<option value="fj">Fijian</option>
<option value="fil">Filipino</option>
<option value="fi">Finnish</option>
<option value="fr">French</option>
<option value="de">German</option>
<option value="el">Greek</option>
<option value="ht">Haitian Creole</option>
<option value="he">Hebrew</option>
<option value="hi">Hindi</option>
<option value="mww">Hmong Daw</option>
<option value="hu">Hungarian</option>
<option value="id">Indonesian</option>
<option value="it">Italian</option>
<option value="ja">Japanese</option>
<option value="tlh">Klingon</option>
<option value="ko">Korean</option>
<option value="lv">Latvian</option>
<option value="lt">Lithuanian</option>
<option value="mg">Malagasy</option><option value="ms">Malay</option><option value="mt">Maltese</option><option value="no">Norwegian</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="otq">Quer&#233;taro Otomi</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sm">Samoan</option><option value="sr-Cyrl">Serbian (Cyrillic)</option><option value="sr-Latn">Serbian (Latin)</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="es">Spanish</option><option value="sw">Swahili</option><option value="sv">Swedish</option><option value="ty">Tahitian</option><option value="ta">Tamil</option><option value="th">Thai</option><option value="to">Tongan</option><option value="tr">Turkish</option><option value="uk">Ukrainian</option><option value="ur">Urdu</option><option value="vi">Vietnamese</option><option value="cy">Welsh</option><option value="yua">Yucatec Maya</option>
</select> &nbsp;&nbsp;&nbsp;<a class="nxt"><i class=" fa fa-arrow-circle-o-right fa-lg"></i></a></span>
    </article>
  </div>


   <div class="left-half-hd" style="display:none;">
   <article style="margin-left: 3rem;">
      <h1>Hi! I need some help with directions...</h1>
      <p>Which language do you speak?</p>
      <select name="lng_s">
      	<option value="af">Afrikaans</option>
<option value="ar">Arabic</option>
<option value="bn-BD">Bangla</option>
<option value="bs-Latn">Bosnian</option>
<option value="bg">Bulgarian</option>
<option value="yue">Cantonese (Traditional)</option>
<option value="ca">Catalan</option>
<option value="zh-CHS">Chinese Simplified</option>
<option value="zh-CHT">Chinese Traditional</option>
<option value="hr">Croatian</option>
<option value="cs">Czech</option>
<option value="da">Danish</option>
<option value="nl">Dutch</option>
<option value="en" selected="selected">English</option>
<option value="et">Estonian</option>
<option value="fj">Fijian</option>
<option value="fil">Filipino</option>
<option value="fi">Finnish</option>
<option value="fr">French</option>
<option value="de">German</option>
<option value="el">Greek</option>
<option value="ht">Haitian Creole</option>
<option value="he">Hebrew</option>
<option value="hi">Hindi</option>
<option value="mww">Hmong Daw</option>
<option value="hu">Hungarian</option>
<option value="id">Indonesian</option>
<option value="it">Italian</option>
<option value="ja">Japanese</option>
<option value="tlh">Klingon</option>
<option value="ko">Korean</option>
<option value="lv">Latvian</option>
<option value="lt">Lithuanian</option>
<option value="mg">Malagasy</option><option value="ms">Malay</option><option value="mt">Maltese</option><option value="no">Norwegian</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="otq">Quer&#233;taro Otomi</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sm">Samoan</option><option value="sr-Cyrl">Serbian (Cyrillic)</option><option value="sr-Latn">Serbian (Latin)</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="es">Spanish</option><option value="sw">Swahili</option><option value="sv">Swedish</option><option value="ty">Tahitian</option><option value="ta">Tamil</option><option value="th">Thai</option><option value="to">Tongan</option><option value="tr">Turkish</option><option value="uk">Ukrainian</option><option value="ur">Urdu</option><option value="vi">Vietnamese</option><option value="cy">Welsh</option><option value="yua">Yucatec Maya</option>
</select> &nbsp;&nbsp;&nbsp;<input type="submit" name="send" value="submit">
    </article>
  </div>


</form>




  <div class="right-half-hd" style="display: none;">

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
    <script>
    	$(document).ready(function(){
    		$(".nxt").click(function(){
    			
    			$(".right-half").hide(50);
    			$(".right-half-hd").fadeIn(300);
    			$(".left-half").hide(50);
    			$(".left-half-hd").fadeIn(300);
    			
    			

    		});
    	});
    </script>
</body>

</html>
