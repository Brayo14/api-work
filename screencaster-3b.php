<html>
    <head>
        <title></title>
        <link href="" rel="stylesheet">
    </head>
    <body>
        <form id="age-frm" method="post"?>
            <h2>RAT</h2>
            <span class="txt">Input your text:</span>
            <input type="text" id="text" name="txt" required>
            <button name="submit">SUBMIT</button>
        </form>
    </body>
</html>
<?php

    if(isset($_POST['submit'])){
        $txt = $_POST['txt'];
        
        $res = preg_replace("/[^a-zA-Z0-9]/"," ,", $txt);
        echo $res;
    }
    function addNum($num1,$num2) 
    {
        $addition_result= $num1+$num2;
        echo $addition_result;
}