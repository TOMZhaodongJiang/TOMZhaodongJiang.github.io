<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
    $(document).ready(function(){
    $.getScript

    })
</script>
    
<form method="POST" action="">
    <div class="row uniform">
    <div class="12u$">
        <textarea name="saytext" id="saytext" placeholder="Enter your message" rows="6"></textarea>
    </div>
    <!-- Break -->
    <div class="12u$">
        <ul class="actions">
            <li><input type="submit" value="Send Message" /></li>
            <li><input type="reset" value="Reset" class="alt" /></li>
        </ul>
    </div>
    </div> 
    <h2>留言</h2>
    </form>
    
    <?PHP
    if(isset($_POST['saytext'])){
        $text=$_POST['saytext'];
        file_put_contents('fb.txt',$text.PHP_EOL,FILE_APPEND);
    }
    $fh=fopen('fb.txt','r');
    while(!feof($fh)){
        $text=fgets($fh);
        if(strlen($text)>0){
            echo "<div class='fb'><p class='fbinfo'>{$text}</p></div>";
    }}
        fclose($fh);
    ?>
    
</body>
</html>