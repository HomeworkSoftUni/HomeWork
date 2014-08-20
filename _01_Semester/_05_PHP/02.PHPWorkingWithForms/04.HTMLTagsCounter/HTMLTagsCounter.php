<!DOCTYPE html>
<?php
   session_start();
   if (!$_SESSION['validTags']) {
   $_SESSION['validTags']=0;   
   }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            <div>Enter HTML tags:</div>
            </br>
            <input type="text" name="tags" />
            <input type="submit">
        </form>
        <?php
        $valid= 0;
         $allTags = array('a', 'abbr', 'acronym', 'address', 'applet', 'area', 'b', 'base', 'basefont',
                    'bdo', 'bgsound', 'big', 'blockquote', 'blink', 'body', 'br', 'button', 'caption', 'center', 'cite', 'code',
                    'col', 'colgroup', 'dd', 'dfn', 'del', 'dir', 'dl', 'div', 'dt', 'embed', 'em', 'fieldset', 'font', 'form',
                    'frame', 'frameset', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'hr', 'html', 'iframe', 'img', 'input',
                    'ins', 'isindex', 'i', 'kbd', 'label', 'legend', 'li', 'link', 'marquee', 'menu', 'meta', 'noframe',
                    'noscript', 'optgroup', 'option', 'ol', 'p', 'pre', 'q', 's', 'samp', 'script', 'select', 'small', 'span', 'strike',
                    'strong', 'style', 'sub', 'sup', 'table', 'td', 'th', 'tr', 'tbody', 'textarea', 'tfoot', 'thead', 'title',
                    'tt', 'u', 'ul', 'var');
         
                if (isset($_POST['tags'])) {
                    $tag = $_POST['tags'];
                }
                for ($i = 0; $i < count($allTags); $i++) {
                    if ($tag == $allTags[$i]) {
                        $valid= 1;
                    }
                }
                if ($valid == 1) {
                    $_SESSION['validTags']++;
                    echo "<h1>VALID HTML TAG :)</h1>";
                }  else {
                    echo "<h1>INVALID HTML TAG :(</h1>";
                }
                echo "<h1>SCORE: " . $_SESSION['validTags'] . "</h1>";
        ?>
    </body>
</html>
