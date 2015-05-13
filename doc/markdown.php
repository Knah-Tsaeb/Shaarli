<?php
include ('../inc/Parsedown.php');
$Parsedown = new Parsedown();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <link type="text/css" rel="stylesheet" href="../inc/shaarli.css" />
    <?php
    if (is_file('../inc/user.css')) {
      echo '<link type="text/css" rel="stylesheet" href="../inc/user.css" />';
    }
    ?>
    <title>Markdown help</title>
  </head>
  <body>
    <div class="markdownHelp">
      <h2>Headings</h2>
      <p>
        #Heading 1
        <br/>
        ##Heading 2
        <br/>
        ###Heading 3
        <br/>
        ####Heading 4
        <br/>
        #####Heading 5
        <br/>
        ######Heading 6
        <br/>
      </p>
      <a href="#result_1" onclick="toggle_visibility('result_1');return false;">Result</a>
      <div class="result" id="result_1">
        <?php
        echo $Parsedown -> text("#Heading 1 \n##Heading 2 \n###Heading 3 \n####Heading 4 \n#####Heading 5 \n######Heading 6 \n ");
        ?>
      </div>
      <h2>Phrase Emphasis</h2>
      <p>
        *italic* **bold** ~~strike~~
      </p>
      <a href="#result_2" onclick="toggle_visibility('result_2');return false;">Result</a>
      <div class="result" id="result_2">
        <?php
        echo $Parsedown -> text('*italic* **bold** ~~strike~~');
        ?>
      </div>
      <h2>Links</h2>
      <p>
        [Shaarli original homepage](http://sebsauvage.net/wiki/doku.php?id=php:shaarli "php:shaarli [sebsauvage]")
        <br/>
        or simply put link http://sebsauvage.net/wiki/doku.php?id=php:shaarli
      </p>
      <a href="#result_3" onclick="toggle_visibility('result_3');return false;">Result</a>
      <div class="result" id="result_3">
        <?php
        echo $Parsedown -> text('[Shaarli original homepage](http://sebsauvage.net/wiki/doku.php?id=php:shaarli "php:shaarli [sebsauvage]") or simply put link http://sebsauvage.net/wiki/doku.php?id=php:shaarli');
        ?>
      </div>
      <h2>Lists</h2>
      <p>
        Ordered list :
        <br/>
        1. item
        <br/>
        2. item
        <br/>
        &nbsp;&nbsp;1. item
        <br/>
        &nbsp;&nbsp;2. item
        <br/>
        3. item
      </p>
      <a href="#result_4" onclick="toggle_visibility('result_4');return false;">Result</a>
      <div class="result" id="result_4">
        <?php
        echo $Parsedown -> text(" 1. item \n 2. item \n   1. item \n   2. item \n 3. item");
        ?>
      </div>
      <p>
        Unordered list :
        <br/>
        * item
        <br/>
        * item
        <br/>
        &nbsp;&nbsp;* item
        <br/>
        &nbsp;&nbsp;* item
      </p>
      <a href="#result_5" onclick="toggle_visibility('result_5');return false;">Result</a>
      <div class="result" id="result_5">
        <?php
        echo $Parsedown -> text("* item \n* item \n  * item \n  * item");
        ?>
      </div>
      <h2>Images</h2>
      <p>
        ![Shaarli logo](/images/logo.png "Shaarli logo")
      </p>
      <a href="#result_6" onclick="toggle_visibility('result_6');return false;">Result</a>
      <div class="result" id="result_6">
        <?php
        echo $Parsedown -> text('![Shaarli logo](/images/logo.png "Shaarli logo")');
        ?>
      </div>
      <h2>Blockquotes</h2>
      <p>
        >You want to share the links you discover ? Shaarli is a minimalist delicious clone you can install on your own website. It is designed to be personal (single-user), fast and handy.
        <br/>
        >> Citation under citation
      </p>
      <a href="#result_7" onclick="toggle_visibility('result_7');return false;">Result</a>
      <div class="result" id="result_7">
        <?php
        echo $Parsedown -> text(">You want to share the links you discover ? Shaarli is a minimalist delicious clone you can install on your own website. It is designed to be personal (single-user), fast and handy.
        \n
        >> Citation under citation");
        ?>
      </div>
      <h2>Inline code</h2>
      <p>
        Try this command ``uptime`` in Linux terminal
      </p>
      <a href="#result_8" onclick="toggle_visibility('result_8');return false;">Result</a>
      <div class="result" id="result_8">
        <?php
        echo $Parsedown -> text('Try this command ``uptime`` in Linux terminal');
        ?>
      </div>
      <h2>Block code</h2>
      <p>
        Try this command
        <br/>
        ```
        <br/>
        uptime
        <br/>
        ```
        <br/>
        in Linux terminal
      </p>
      <a href="#result_9" onclick="toggle_visibility('result_9');return false;">Result</a>
      <div class="result" id="result_9">
        <?php
        echo $Parsedown -> text("Try this command \n ``` \n uptime \n ``` \n in Linux terminal");
        ?>
      </div>
      <h2>Horizontal Rules</h2>
      * * * or
      <br/>
      *** or
      <br/>
      ***** or
      <br/>
      - - - or
      <br/>
      ---------------------------------------
      <br/>
      <a href="#result_10" onclick="toggle_visibility('result_10');return false;">Result</a>
      <div class="result" id="result_10">
        <?php
        echo $Parsedown -> text('* * *');
        ?>
      </div>
      <h2>Manual Line Breaks</h2>
      <p>
        Add two space at endline
        <br/>
        This line break =>
        <br/>
        here
      </p>
      <a href="#result_11" onclick="toggle_visibility('result_11');return false;">Result</a>
      <div class="result" id="result_11">
        <?php
        echo $Parsedown -> setMarkupEscaped(true) -> setBreaksEnabled(true) -> text("This line break => &nbsp;&nbsp;
        here");
        ?>
      </div>
    </div>
    <script>
      var allResult = document.getElementsByClassName('result');
      for (var i = 0; i < allResult.length; ++i) {
        allResult[i].style.display = "none";
      }
      function toggle_visibility(id) {
        var e = document.getElementById(id);
        if (e.style.display == 'block') {
          e.style.display = 'none';
        } else {
          e.style.display = 'block';
        }
        return false;
      }
    </script>
  </body>
</html>