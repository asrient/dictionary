<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/xui.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="xui.js"></script>
<title>Dictionary</title>
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
</head>

<body>
    <div id="header" class="base-regular size-s"><a href="/">📘 Dictionary</a></div>
    <div id="bdy">
    <br />
    <br />
    <br />
    <br />
    <br />
    <div class="center ink-primary base-light size-xl">Search</div>
    <br />
    <form action="/find.php" method="GET" class="center-col" style="width:100%">
        <input placeholder="Word" id="inp" name="text">
        <input type="submit" style="display: none;" id="send" placeholder="Send">
        <label for="send" style="width:7rem;margin-top:0.5rem" class="center">
          <div class="button rounded secondary ink-tertiary strech">Search</div>
        </label>
      </form>
    </div>
    <div id="footer" class="size-xs center">
        Credits: &nbsp;
        <a href="https://github.com/asrient">Aritra</a>,&nbsp;
        <a href="https://github.com/asrient">Aritra</a>&nbsp; & &nbsp;
        <a href="https://github.com/asrient">Aritra</a>
    </div>
</body>
<style>
    #header{
        padding: 0.5rem 1rem;
        background-color: var(--purple);
        color:white;
        position: fixed;
        top:0px;
        left: 0px;
        width: 100%;
    }
    #header a{
        color:white;
    }
    #inp {
    margin: 0px;
    background: var(--tertiary);
    color: var(--primary);
    border-radius: 2rem;
    border: none;
    padding: 0.6rem 1rem;
    width: 13rem;
  }
  #bdy{
      min-height: 93vh;
  }
  #footer{
      padding: 0.3rem 1rem;
      background-color: (--tertiary);
      width: 100%;
  }
    </style>
</html>