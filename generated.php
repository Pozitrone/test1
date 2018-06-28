<?php
    require("./index.php");
    $formId = $_REQUEST["textFormId"];


    $inputAmount = $_REQUEST["numberInputAmount"];


    $inputTypes="";
    for($i=0;$i<$inputAmount;$i++)
    {
        $inputTypes.="'".$_REQUEST["inputName".$i]."'";
        if($i<$inputAmount-1)
        {
            $inputTypes.=",";
        }
    }


    $inputNames="";
    for($i=0;$i<$inputAmount;$i++)
    {
        $inputNames.="'".$_REQUEST["inputName".$i]."'";
        if($i<$inputAmount-1)
        {
            $inputNames.=",";
        }
    }


    $inputLabels="";
    for($i=0;$i<$inputAmount;$i++)
    {
        $inputLabels.="'".$_REQUEST["inputLabel".$i]."'";
        if($i<$inputAmount-1)
        {
            $inputLabels.=",";
        }
    }


    $inputPlaceholders="";
    for($i=0;$i<$inputAmount;$i++)
    {
        $inputPlaceholders.="'".$_REQUEST["inputPlaceholder".$i]."'";
        if($i<$inputAmount-1)
        {
            $inputPlaceholders.=",";
        }
    }


    $inputValues="";
    for($i=0;$i<$inputAmount;$i++)
    {
        $inputValues.="'".$_REQUEST["inputValue".$i]."'";
        if($i<$inputAmount-1)
        {
            $inputValues.=",";
        }
    }


    $inputsRequired="";
    for($i=0;$i<$inputAmount;$i++)
    {
        $inputsRequired.="'";
        if(isset($_REQUEST["switchRequired".$i]) and ($_REQUEST["switchRequired".$i] == "on"))
        {
            $inputsRequired.="true'";
        }
        else
        {
            $inputsRequired.="false'";
        }
        
        if($i<$inputAmount-1)
        {
            $inputsRequired.=",";
        }
    }


    $inputsReadOnly="";
    for($i=0;$i<$inputAmount;$i++)
    {
        $inputsReadOnly.="'";
        if(isset($_REQUEST["switchReadonly".$i]) and ($_REQUEST["switchReadonly".$i] == "on"))
        {
            $inputsReadOnly.="true'";
        }
        else
        {
            $inputsReadOnly.="false'";
        }
        
        if($i<$inputAmount-1)
        {
            $inputsReadOnly.=",";
        }
    }


    $formMethod=$_REQUEST["selectFormMethod"];


    $formAction="";
    if(isset($_REQUEST["textFormAction"]))
    {
        $formAction=$_REQUEST["textFormAction"];
    }


    $formWidth="512px";
    if(isset($_REQUEST["numberFormWidth"]) and $_REQUEST["numberFormWidth"]!="")
    {
        $formWidth=(string)$_REQUEST["numberFormWidth"].$_REQUEST["selectFormWidth"];
    }

    $usePlaceholders="false";
    if(isset($_REQUEST["switchUsePlaceholders"]) and ($_REQUEST["switchUsePlaceholders"] == "on"))
    {
       $usePlaceholders="true"; 
    }


    $useReset="false";
    if(isset($_REQUEST["switchUseReset"]) and ($_REQUEST["switchUseReset"] == "on"))
    {
       $useReset="true"; 
    }


    $useCustomColors="false";
    if(isset($_REQUEST["switchUseCustomColors"]) and ($_REQUEST["switchUseCustomColors"] == "on"))
    {
       $useCustomColors="true"; 
    }

    $useCustomCSS="false";
    if(isset($_REQUEST["switchUseCustomCSS"]) and ($_REQUEST["switchUseCustomCSS"] == "on"))
    {
       $useCustomCSS="true"; 
    }


    $useFieldsets="false";
    if(isset($_REQUEST["switchUseFieldsets"]) and ($_REQUEST["switchUseFieldsets"] == "on"))
    {
       $useFieldsets="true"; 
    }


    $submitValue="Submit";
    if((isset($_REQUEST["textSubmitValue"])) and ($_REQUEST["textSubmitValue"]!=""))
    {
        $submitValue=$_REQUEST["textSubmitValue"];
    }
    

    $resetValue="Reset";
    if(isset($_REQUEST["textResetValue"]))
    {
        $resetValue=$_REQUEST["textResetValue"];
    }


    $preset=$_REQUEST["selectPreset"];


    $colorFormBg = $_REQUEST["colorFormBg"];
    $colorFont = $_REQUEST["colorFont"];
    $colorBorders = $_REQUEST["colorBorders"];
    $colorInputBg = $_REQUEST["colorInputBg"];
    $colorLabelFont = $_REQUEST["colorLabelFont"];
    
    
    $cssPath="";
    if(isset($_REQUEST["textCssPath"]))
    {
        $cssPath = $_REQUEST["textCssPath"];
    }


    $fontFamily="";
    if(isset($_REQUEST["textFontFamily"]))
    {
        $fontFamily = $_REQUEST["textFontFamily"];
    }


    $fieldsetAmount = 0;
    if(isset($_REQUEST["amountFieldsets"]))
    {
        $fieldsetAmount = $_REQUEST["amountFieldsets"];
    }

    $setFieldsets="";
    for($i=0;$i<$fieldsetAmount;$i++)
    {
        
        if($i==0)
        {
            $setFieldsets.="'".$_REQUEST["fieldsetName".$i]."(".($_REQUEST["fieldsetBeginning".$i]-1).",".($_REQUEST["fieldsetEnd".$i]-1).")'";
            
            
            if($i<$fieldsetAmount)
            {
                $setFieldsets.=",";
            }
            else
            {
                $setFieldsets.="";
            }
        }
        else if(($i>0) and (($_REQUEST["fieldsetBeginning".$i]-1)>($_REQUEST["fieldsetEnd".($i-1)]-1)))
        {
            $setFieldsets.="'".$_REQUEST["fieldsetName".$i]."(".($_REQUEST["fieldsetBeginning".$i]-1).",".($_REQUEST["fieldsetEnd".$i]-1).")'";
            
            
            if($i<$fieldsetAmount)
            {
                $setFieldsets.=",";
            }
            else
            {
                $setFieldsets.="";
            }
        }
        else
        {
            echo("<script>alert('There was an error while creating your fieldsets. Because of that, fieldset function was disabled to prevent malfunction caused by i=".$i." and ".($_REQUEST["fieldsetBeginning".$i]-1)." being lower than ".($_REQUEST["fieldsetEnd".$i]-1).".');</script>");
            
            $i++;
            $useFieldsets=false;
        }
            
        
    }
?>
<html>
    <head>
        <script>
            function ssc()
            {
                document.getElementById("escaped").value = document.getElementById("forming").innerHTML;
            }
            
            </script>
        <style>
            #console{
                width:100%;
            }
            #forming{
                width:45%;
                float: left;
                height:80%;
                margin-left:5%;
            }
            #escaped{
                width:45%;
                float: right;
                height:80%;
                margin-right:5%;
            }
        </style>
    </head>
    <body onload="ssc()">
        <div id="console">
            <?php
                 $str=
                    "\$form = new form; ".
                    "\$form->formId = '".$formId."'; ".
                     
                    "\$form->inputAmount = ".$inputAmount."; ".
                    "\$form->inputTypes = [".$inputTypes."]; ".
                    "\$form->inputNames = [".$inputNames."]; ".
                    "\$form->inputLabels = [".$inputLabels."]; ".
                    "\$form->inputPlaceholders = [".$inputPlaceholders."]; ".
                    "\$form->inputValues = [".$inputValues."]; ".
                    "\$form->inputsRequired = [".$inputsRequired."]; ".
                    "\$form->inputsReadOnly = [".$inputsReadOnly."]; ".
                    "\$form->formMethod = '".$formMethod."'; ".
                    "\$form->formAction = '".$formAction."'; ".
                    "\$form->formWidth = '".$formWidth."'; ".
                    "\$form->usePlaceholders = '".$usePlaceholders."'; ".
                    "\$form->useReset = '".$useReset."'; ".
                    "\$form->useCustomColors = '".$useCustomColors."'; ".
                    "\$form->submitValue = '".$submitValue."'; ".
                    "\$form->resetValue = '".$resetValue."'; ".
                    "\$form->preset = '".$preset."'; ".
                    "\$form->colorFormBg ='".$colorFormBg."'; ".
                    "\$form->colorFont ='".$colorFont."'; ".
                    "\$form->colorBorders ='".$colorBorders."'; ".
                    "\$form->colorInputBg ='".$colorInputBg."'; ".
                    "\$form->colorLabelFont ='".$colorLabelFont."'; ".
                    "\$form->useCustomCSS = '".$useCustomCSS."'; ".
                    "\$form->cssPath = '".$cssPath."'; ".
                    "\$form->fontFamily = '".$fontFamily."'; ";
                    if(($useFieldsets===true) or ($useFieldsets==="true"))
                    {
                      $str.="\$form->setFieldsets = [".$setFieldsets."]; ";  
                    }
                $str.="\$form->con_form();";
                echo($str);
                echo("<br><br><br>");
            ?>
        </div>
        
        <div id="forming">
        <?php
        
            eval($str);
        ?>
        
        
        </div>
        <textarea id="escaped" readonly>
        
            
            <?php eval($str);?>
            
            
        </textarea>
    </body>
</html>
