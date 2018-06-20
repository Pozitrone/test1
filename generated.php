<?php
    require("./index.php");

    /*  
$typez = new form;
$typez->inputAmount = 10;
$typez->preset = "smooth";
$typez->formWidth = "256px";
$typez->formMethod = "get";
$typez->inputTypes = ["text","password","select(This,Is,Select)","radio(This,Is,Radio)","textarea","checkbox(These,Are,Checkboxes)","color","date","email","number"];
$typez->inputNames = ["Text","Password","Select","Radio","textarea","Checkbox","Color","Date","Email","Number"];
$typez->inputLabels = ["Text","Password","Select","Radio","textarea","Checkbox","Color","Date","Email","Number"];
$typez->usePlaceholders = false;
$typez->useReset = false;
$typez->formId = "typeZ";
$typez->useCustomColors = true;
$typez->con_form();
$typez->con_status();
    */


    $formId = $_REQUEST["textFormId"];
    $inputAmount = $_REQUEST["numberInputAmount"];
    $inputTypes="";
    for($i=0;$i<$inputAmount;$i++)
    {
        $inputTypes.=$_REQUEST["selectInputType".$i];
        if($i<$inputAmount-1)
        {
            $inputTypes.=",";
        }
    }
    $inputNames="";
    for($i=0;$i<$inputAmount;$i++)
    {
        $inputTypes.=$_REQUEST["inputName".$i];
        if($i<$inputAmount-1)
        {
            $inputTypes.=",";
        }
    }

    
?>
<html>
    <head>
    </head>
    <body>
        <div width="50%">
        <?php
        
            $str=
                "\$form = new form; ".
                "\$form->inputAmount = ".$inputAmount."; ".
                "\$form->inputTypes = [".$inputTypes."]; ".
                "\$form->inputNames = [".$inputNames."]; "
                ;
            echo($str);
        ?>
        
        
        </div>
        <div width="50%"></div>
    </body>
</html>
