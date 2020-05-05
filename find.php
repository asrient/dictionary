<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/xui.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="xui.js"></script>
<title>
    <?php
        if(isset($_GET["text"])&&$_GET["text"]!=''){
            echo $_GET["text"];
        }
        else{
            echo "Loss of words?";
        }
        ?>
    - Dictionary
</title>
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
</head>

<body>
    <div id="header" class="base-regular size-s"><a href="/">📘 Dictionary</a></div>
    <div id="bdy">
    <br />
    <br />
    <br />
    <br />
    <div class="center ink-primary base-light size-l">
        <?php
        if(isset($_GET["text"])&&$_GET["text"]!=''){
            echo $_GET["text"];
        }
        else{
            echo "Loss of words?";
        }
        ?>
    </div>
    <br />
    <?php
    if(isset($_GET["text"])&&$_GET["text"]!=''){
require 'vendor/autoload.php';
require 'dict.php';

$dict = new Dict(getenv('KEY'));
$data = $dict->lookup($_GET["text"]);

$res=[];
//echo ($data[0]->tr[0]->mean[0]->text);

for($x = 0; $x < count($data); $x++) {
    $pos=$data[$x]->pos;
    echo '<div class="def container">
    <div class="size-s ink-primary base-regular pos"><i>';
    echo $pos;
    echo '</i></div>
    <div class="meanings size-xs ink-semilight ink-secondary">';
    if(isset($data[$x]->tr)){
          $tr=$data[$x]->tr;
    for($y=0;$y<count($tr);$y++){
        if(isset($tr[$y]->mean)){
              $mean=$tr[$y]->mean;
        for($z=0;$z<count($mean);$z++){
            if(isset($mean[$z]->text)){
             echo '<div class="meaning"><span class="ink-primary">';
                 echo $y+1;
                 echo '.</span>&nbsp;<a href="/find?text=';
                 echo $mean[$z]->text.'">';
            echo $mean[$z]->text;
            echo '</a></div>&nbsp;&nbsp;';
            }
        }      
        }
    }  
    }
echo "</div>";
echo "</div>";
}
 }
?>
</div>
</body>
<style>
    #footer{
      padding: 0.3rem 1rem;
      background-color: (--tertiary);
      width: 100%;
  }
    #header {
        padding: 0.5rem 1rem;
        background-color: var(--purple);
        color: white;
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100%;
    }

    #header a {
        color: white;
    }

    .meanings {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .meaning a {
        color: inherit;
    }

    .def {
        padding: 0.4rem 0.5rem;
        border-radius: 0.3rem;
        margin-top: 1rem;
        background-color: var(--tertiary);
    }

    @media(max-width:650px) {
        .def {
            border-radius: 0rem;
        }
    }
    #bdy{
      min-height: 95vh;
  }
</style>

</html>