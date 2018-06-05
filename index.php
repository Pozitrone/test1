<?php

function help()
    {
        echo("<h2 style='font-family:sans-serif;'>Help:</h2>");
        echo("<strong>formMethod</strong> - get or post<br>");
        echo("<strong>formAction</strong> - url where to send. Leave blank for self<br>");
        echo("<strong>usePlaceholders</strong> - if u want to use placeholders or not - true or false<br>");
        echo("<strong>inputAmount</strong> - amount of fields to input - integer<br>");
        echo("<strong>inputTypes</strong> - array of types for the amount of inputs - array of strings<br>");
        echo("<strong>inputNames</strong> - array of names for the fields - used for labeling<br>");
        echo("<strong>inputLabels</strong> - content of all labels<br>");
        echo("<strong>inputPlaceholders</strong> - placeholder content, not needed if usePlaceholders is false<br>");
        echo("<strong>inputValues</strong> - beginning values inside the fields, not required<br>");
        echo("<strong>formWidth</strong> - size of an input field compared to outer div<br>");
        echo("<strong>preset</strong> - Gives you a choice of presets<br>");
        echo("<strong>Current presets available:</strong>");
            echo("<ul>");
            echo("<li>default</li>");
            echo("<li>smooth</li>");
            echo("<li>smoothNight</li>");
            echo("<li>predator</li>");
            echo("</ul><br>");
        echo("<strong>submitValue</strong> - Value that will appear in submit button<br>");
        echo("<strong>formId</strong> - give your form a brand new ID<br>");
        echo("<strong>fontFamily</strong> - select a font family for your form<br>");
        echo("<strong>useCustomCSS</strong> - boolean value whether to use custom CSS or not<br>");
        echo("<strong>cssPath</strong> - path for your custom CSS<br>");
        echo("<strong>inputsRequired</strong> - whether the inputs are required or not, requires an array of bools<br>");
        echo("<strong>inputsReadOnly</strong> - whether the inputs are readonly or not, requires an array of bools<br>");
        echo("<strong>useReset</strong> - Adds a reset button before submit button, requires formID<br>");
        echo("<strong>useCustomColors</strong> - Do you like the preset, but want a different color scheme? Sure, go for it!<br>");
        echo("<strong>resetValue</strong> - just like submit value - content of reset button<br>");
        echo("<strong>setFieldsets</strong> - Array of 'Name(Start,Stop)' that creates fieldsets<br>");
        echo("<strong>colorFormBg</strong>");
        echo("<strong>colorFont</strong>");
        echo("<strong>colorBorders</strong>");
        echo("<strong>colorInputBg</strong>");
        echo("<strong>colorLabelFont</strong>");
        
        echo("<br><br>");
        return null;
    }

class form{
    
/* DEFAULT VARS */    
    var $formMethod = "POST"; //"POST"
    var $formAction = ""; //""
    var $formId = ""; //""
    var $formWidth = "90%"; //"90%"
    
    var $usePlaceholders = false; //false
    var $useReset = false; //false
    var $useCustomColors = false; //false
    
    var $submitValue = "Submit"; //"Submit"
    var $resetValue = "Reset"; //"Reset"
    
    var $inputAmount = 1; //1
    var $inputTypes = [""]; //[""]
        var $inputTypeDefault = "text"; //text
    var $inputNames = [""]; //[""]
    var $inputLabels = [""]; //[""]
    var $inputPlaceholders = [""]; //[""]
    var $inputValues = [""]; //[""]
    var $inputsRequired = [false]; //[false]
    var $inputsReadOnly = [false]; //[false]
    
    var $setFieldsets = [""]; //[""]
    
    var $useCustomCSS = false; //false
    var $cssPath = "";
    var $fontFamily = "sans-serif"; //"sans-serif"
    var $preset = "Default"; //"Default"
    
    var $colorFormBg = "#fff"; //"#fff"
    var $colorFont = "#000"; //"#000"
    var $colorBorders = "#000"; //"#000"
    var $colorInputBg = "#fff"; //"#fff"
    var $colorLabelFont = "#000"; //"#000"
    

    
    
/* SETTER FUNCTIONS */    
    
    function set_formLanguage($lang)
    {
        $this->formLanguage = $lang;
    }
    
    function set_formMethod($method)
    {
        if((strtolower($method)=="get") or (strtolower($method)=="post"))
        {
            $this->formMethod = $method;
        }
        else
        {
            $this->formMethod = "POST";
        }
    }
    
    function set_formAction($action)
    {
        $this->formAction = $action;
    }
    
    
    
    function set_usePlaceholders($bool)
    {
        $this->usePlaceholders = $bool;
    }
    
    function set_useReset($bool)
    {
        $this->useReset = $bool;
    }
    
    
    
    function set_submitValue($val)
    {
        $this->submitValue = $val;
    }
    
    function set_resetValue($val)
    {
        $this->resetValue = $val;
    }
    
    
    
    function set_inputAmount($amount)
    {
        $this->inputAmount = $amount;
    }
    
    function set_inputTypes($types) 
    {
        $this->inputTypes = $types;
    }
    
    function set_inputNames($names) 
    {
        $this->inputNames = $names;
    }
    
    function set_inputLabels($labels) 
    {
        $this->inputLabels = $labels;
    }
    
    function set_inputPlaceholders($placeholders) 
    {
        $this->inputPlaceholders = $placeholders;
    }
    
    function set_inputValues($values) 
    {
        $this->inputValues = $values;
    }
    
    function set_formWidth($width) 
    {
        $this->formWidth = $width;
    }
    
    function set_inputsRequired($bools)
    {
        $this->inputsRequired = $bools;
    }
    
    function set_inputsReadOnly($bools)
    {
        $this->inputsReadOnly = $bools;
    }
    
    
    
    function set_formId($id)
    {
        $this->formId = $id;
    }
    
    
    
    function set_fontFamily($font)
    {
        $this->fontFamily = $font;
    }
    
    function set_useCustomCSS($bool)
    {
        $this->useCustomCSS = $bool;
    }
    
    function set_cssPath($path)
    {
        $this->cssPath = $path;
    }
    
    
    
    function set_colorInputBg($color)
    {
        $this->colorInputBg = $color;
    }
    
    function set_colorFont($color)
    {
        $this->colorFont = $color;
    }
    
    function set_colorLabelFont($color)
    {
        $this->colorLabelFont = $color;
    }
    
    function set_colorBorders($color)
    {
        $this->colorBorders = $color;
    }
    
    function set_colorFormBg($color)
    {
        $this->colorFormBg = $color;
    }

    
/* GETTER FUNCTIONS */
    
    function get_formLanguage()
    {
        return $this->formLanguage;
    }
    
    function get_formMethod()
    {
        return $this->formMethod;
    }
    
    function get_formAction()
    {
        return $this->formAction;
    }
    
    
    
    function get_usePlaceholders()
    {
        return $this->usePlaceholders;
    }
    
    function get_useReset()
    {
        return $this->useReset;
    }
    
    
    
    function get_submitValue()
    {
        return $this->submitValue;
    }
    
    function get_resetValue()
    {
        return $this->resetValue;
    }
    
    
    
    function get_inputAmount($amount)
    {
        return $this->inputAmount;
    }
    
    function get_inputTypes() 
    {
        return $this->inputTypes;
    }
    
    function get_inputNames() 
    {
        return $this->inputNames;
    }
    
    function get_inputLabels() 
    {
        return $this->inputLabels;
    }
    
    function get_inputPlaceholders() 
    {
        return $this->inputPlaceholders;
    }
    
    function get_inputValues() 
    {
        return $this->inputValues;
    }
    
    function get_formWidth() 
    {
        return $this->formWidth;
    }
    
    function get_inputsRequired()
    {
        return $this->inputsRequired;
    }
    
    function get_inputsReadOnly()
    {
        return $this->inputsReadOnly;
    }
    
    
    
    function get_formId()
    {
        return $this->formId;
    }
    
    
    
    function get_fontFamily()
    {
        return $this->fontFamily;
    }
    
    function get_useCustomCSS()
    {
        return $this->useCustomCSS;
    }
    
    function get_cssPath()
    {
        return $this->cssPath;
    }

    
    
    function get_colorInputBg()
    {
        return $this->colorInputBg;
    }
    
    function get_colorFont()
    {
        return $this->colorFont;
    }
    
    function get_colorLabelFont()
    {
        return $this->colorLabelFont;
    }
    
    function get_colorBorders()
    {
        return $this->colorBorders;
    }
    
    function get_colorFormBg()
    {
        return $this->colorFormBg;
    }
    
    
    
/* CONSTRUCTING FUNCTIONS */
    
    function con_submit()
    {
        return('<input type="submit" name="submit" class="submit '.$this->preset.'" value="'.$this->submitValue.'"/>');
    }
    
    function con_reset()
    {
        return('<input type="button" name="resetButton" onclick="resetFormID'.$this->formId.'()" class="resetButton '.$this->preset.'" value="'.$this->resetValue.'"/>');
    }
    
    function con_inputs()
    {
        
        
        $k=0;
        
        for($i=0; $i<$this->inputAmount;$i++)
        {
            
            if($this->setFieldsets[0]!= "")
            {
            $values = explode(",",substr($this->setFieldsets[$k],strpos($this->setFieldsets[$k],"(")+1, strpos($this->setFieldsets[$k],")")-strpos($this->setFieldsets[$k],"(")-1));
            $start = min($values);
            $stop = max($values);
            $text = substr($this->setFieldsets[$k],0,strpos($this->setFieldsets[$k],"("));   
                if($stop == $i)
                {
                    $k++;
                }
            }
            
            
            if((!isset($this->inputTypes[$i])) or ($this->inputTypes[$i] == ""))
            {
                $this->inputTypes[$i] = $this->inputTypeDefault;
                echo("<br>".$i."<br>");
            }
            
            if(!isset($this->inputNames[$i]))
            {
                $this->inputNames[$i] = '';
            }
            
            if(!isset($this->inputValues[$i]))
            {
                $this->inputValues[$i] = '';
            }
            
            if(!isset($this->inputLabels[$i]))
            {
                $this->inputLabels[$i] = ":";
            }
            
            if($this->usePlaceholders==true)
            {
                $placeholder[$i]=' placeholder="'.$this->inputPlaceholders[$i].'"';
            }
            else
            {
                $placeholder[$i]='';
            }
            
            if(!isset($this->inputsRequired[$i]))
            {
                $this->inputsRequired[$i]=false;
            }
            
            if(!isset($this->inputsReadOnly[$i]))
            {
                $this->inputsReadOnly[$i]=false;
            }
            
            if((strtolower($this->inputsRequired[$i])!=true) 
               and (strtolower($this->inputsRequired[$i])!=false))
            {
                $this->inputsRequired[$i]= false;
            }
            
            if((strtolower($this->inputsReadOnly[$i])!=true) 
               and (strtolower($this->inputsReadOnly[$i])!=false))
            {
                $this->inputsReadOnly[$i]= false;
            }
            
            if($this->setFieldsets[0]!= "")
            {
                if($i == $start)
                {
                    echo('<fieldset class="'.$this->preset.'">');
                    echo('<legend>'.$text.'</legend>');
                }
            }
            
            
            /* DEFAULT INPUTS */
            
            if(($this->inputTypes[$i]!="textarea") and (strpos($this->inputTypes[$i],"select")===false)  and (strpos($this->inputTypes[$i],"checkbox")===false)  and (strpos($this->inputTypes[$i],"radio")===false))
            {
                echo('
                <label for="'.$this->inputNames[$i].'" class="'.$this->preset.'">'.$this->inputLabels[$i].' </label>'
                .'<br>'. 
                '<input class="'.$this->preset);
                    if($this->inputTypes[$i]=="color"){echo(" color");}
                echo('" type="'.$this->inputTypes[$i].'"
                name="'.$this->inputNames[$i].'" 
                '.$placeholder[$i].' 
                value="'.$this->inputValues[$i].'"');
                if($this->inputsRequired[$i]==true){echo(" required");} 
                if($this->inputsReadOnly[$i]==true){echo(" readonly");}
                echo('/><br>');
            }
            
            /* TEXTAREA */
            
            else if ($this->inputTypes[$i]=="textarea")
            {
                echo('
                <label for="'.$this->inputNames[$i].'" class="'.$this->preset.'">'.$this->inputLabels[$i].'</label>'
                .'<br>'. 
                '<textarea class="'.$this->preset.'"
                name="'.$this->inputNames[$i].'"
                '.$placeholder[$i].'  
                value="'.$this->inputValues[$i].'"');
                if($this->inputsRequired[$i]==true){echo(" required");}
                if($this->inputsReadOnly[$i]==true){echo(" readonly");}
                echo('/></textarea><br>');   
            }
            
            /* SELECT */
            
            else if (strpos($this->inputTypes[$i],"select")!==false)
            {
                echo('<label for="'.$this->inputNames[$i].'" class="'.$this->preset.'">'.$this->inputLabels[$i].' </label>
                <br>');
                echo('<select class="'.$this->preset.'" 
                name="'.$this->inputNames[$i].'"'); 
                if($this->inputsRequired[$i]==true){echo(" required");} 
                if($this->inputsReadOnly[$i]==true){echo(" readonly");}
                echo('>');
                $opts = explode(",",$this->inputTypes[$i]);
                
                for($j=0;$j<=substr_count($this->inputTypes[$i],",");$j++)
                {
                    
                    if($j==0)
                    {
                        echo('<option class="'.$this->preset.'" value="'.substr($opts[$j],7).'">'.substr($opts[$j],7).'</option>');
                    }
                    else if($j==substr_count($this->inputTypes[$i],","))
                    {
                        echo('<option class="'.$this->preset.'"
                        value="'.substr($opts[$j], 0, -1).'">'.substr($opts[$j], 0, -1).'</option>');
                    }
                    else
                    {
                        echo('<option class="'.$this->preset.'"
                        value="'.$opts[$j].'">'.$opts[$j].'</option>');
                    }
                }
                echo("</select><br>");
            }
            
            /* RADIO */
            
            else if (strpos($this->inputTypes[$i],"radio")!==false)
            {
                $opts = explode(",",$this->inputTypes[$i]);
                
                for($j=0;$j<=substr_count($this->inputTypes[$i],",");$j++)
                {
                    
                    if($j==0)
                    {
                        echo('<input type="radio" class="'.$this->preset.' radio" id="radio-'.$i.'-'.$j.'" value="'.substr($opts[$j],6).'" name="'.$this->inputNames[$i].'"');
                             if($this->inputsRequired[$i]==true){echo(" required");} 
                             if($this->inputsReadOnly[$i]==true){echo(" readonly");}
                             echo('/>');
                        echo('<label for="radio-'.$i.'-'.$j.'">'.substr($opts[$j],6).'</label>');
                    }
                    else if($j==substr_count($this->inputTypes[$i],","))
                    {
                        echo('<input type="radio" class="'.$this->preset.' radio" id="radio-'.$i.'-'.$j.'" value="'.substr($opts[$j], 0, -1).'" name="'.$this->inputNames[$i].'"');
                             if($this->inputsRequired[$i]==true){echo(" required");} 
                             if($this->inputsReadOnly[$i]==true){echo(" readonly");}
                             echo('/>');
                        echo('<label for="radio-'.$i.'-'.$j.'">'.substr($opts[$j], 0, -1).'</label>');
                    }
                    else
                    {
                        echo('<input type="radio" class="'.$this->preset.' radio" id="radio-'.$i.'-'.$j.'" value="'.$opts[$j].'" name="'.$this->inputNames[$i].'"');
                             if($this->inputsRequired[$i]==true){echo(" required");} 
                             if($this->inputsReadOnly[$i]==true){echo(" readonly");}
                             echo('/>');
                        echo('<label for="radio-'.$i.'-'.$j.'">'.$opts[$j].'</label>');
                    }
                }
                echo("<br>");
            }
            
            /* CHECKBOX */
            
            else if (strpos($this->inputTypes[$i],"checkbox")!==false)
            {
                $opts = explode(",",$this->inputTypes[$i]);
                
                for($j=0;$j<=substr_count($this->inputTypes[$i],",");$j++)
                {
                    
                    if($j==0)
                    {
                        echo('<input type="checkbox" class="'.$this->preset.' check" id="checkbox-'.$i.'-'.$j.'" value="'.substr($opts[$j],9).'" name="'.$this->inputNames[$i].'"');
                             if($this->inputsRequired[$i]==true){echo(" required");} 
                             if($this->inputsReadOnly[$i]==true){echo(" readonly");}
                             echo('/>');
                        echo('<label for="checkbox-'.$i.'-'.$j.'">'.substr($opts[$j],9).'</label>');
                    }
                    else if($j==substr_count($this->inputTypes[$i],","))
                    {
                        echo('<input type="checkbox" class="'.$this->preset.' check" id="checkbox-'.$i.'-'.$j.'" value="'.substr($opts[$j], 0, -1).'" name="'.$this->inputNames[$i].'"');
                             if($this->inputsRequired[$i]==true){echo(" required");} 
                             if($this->inputsReadOnly[$i]==true){echo(" readonly");}
                             echo('/>');
                        echo('<label for="checkbox-'.$i.'-'.$j.'">'.substr($opts[$j], 0, -1).'</label>');
                    }
                    else
                    {
                        echo('<input type="checkbox" class="'.$this->preset.' check" id="checkbox-'.$i.'-'.$j.'" value="'.$opts[$j].'" name="'.$this->inputNames[$i].'"');
                             if($this->inputsRequired[$i]==true){echo(" required");} 
                             if($this->inputsReadOnly[$i]==true){echo(" readonly");}
                             echo('/>');
                        echo('<label for="checkbox-'.$i.'-'.$j.'">'.$opts[$j].'</label>');
                    }
                }
                echo("<br>");
            }
            
            if($this->setFieldsets[0]!= "")
            {
                if($i == $stop)
                {
                    echo('</fieldset>');
                }
            }
            
        }
        return null;
    }
   
    function con_form()
    {   echo('<!doctype html>
        <html>
            <head>
                <title>Vexx Forms</title>
                <meta lang="en">
                <meta charset="utf-8">
                <link rel="stylesheet" type="text/css" href="presets.css"/>');
        if(($this->useCustomCSS==true) and ($this->cssPath!=""))
        {
            echo('<link rel="stylesheet" type="text/css" href="'.$this->cssPath.'"/>');
        }
     
        if(($this->useReset == true) and ($this->formId !=""))
        {
            echo('
            <script>
                function resetFormID'.$this->formId.'()
                {
                    document.getElementById("'.$this->formId.'").reset();
                }
            </script>
            ');
            
        }
     
        if($this->useCustomColors == true)
        {
            echo('<style>');
            echo(
                ':root
                    {
                        --colorFont:'.$this->colorFont.';
                        --colorFormBg:'.$this->colorFormBg.';
                        --colorBorders:'.$this->colorBorders.';
                        --colorInputBg:'.$this->colorInputBg.';
                        --colorLabelFont:'.$this->colorLabelFont.';
                    }
                    
                #'.$this->formId.' > input, #'.$this->formId.' > select, #'.$this->formId.' > textarea
                    {
                        border-color:var(--colorBorders) !important;
                        background-color:var(--colorInputBg) !important;
                        color:var(--colorFont) !important;
                    }
                #'.$this->formId.' > label
                    {
                        color:var(--colorLabelFont) !important;
                    }  
                #'.$this->formId.' > form
                    {
                        background-color:var(--colorFormBg) !important;
                    }
                #'.$this->formId.' > .submit, #'.$this->formId.' > .resetButton
                    {
                        color:var(--colorFont) !important;
                    }
                #'.$this->formId.' > .check, #'.$this->formId.' > .radio, #'.$this->formId.' > .color
                    {
                        border-color:var(--colorBorders) !important;
                    }
                #'.$this->formId.' > legend
                    {
                        border-color:var(--colorLabelFont) !important;
                    }
                #'.$this->formId.' > fieldset.smooth
                    {
                        border-color:var(--colorBorders) !important;
                    }');
            echo('</style>');
            
        }
    
        echo('</head>
            <body>');
        echo('<form method="'.$this->formMethod.'" action="'.$this->formAction.'" class="'.$this->preset.'" style="width:'.$this->formWidth.'; font-family:'.$this->fontFamily.'" id="'.$this->formId.'">');
        $this->con_inputs();
        if(($this->useReset == true) and ($this->formId !=""))
        {
            echo($this->con_reset());
        }
        echo($this->con_submit());
        
        echo("</form>");
     
        
        
    }
  
  
    function con_status()
    {
        echo('<table class="statusTable">');
        echo("<thead>");
            echo("<th>Attribute</th><th>Your value</th><th>Description</th><th>Default value</th><th>Status</th>");
        echo("</thead>");
        echo("<tbody>");
        
            echo("<tr>");
                echo("<td>formMethod</td>");
                echo("<td>".$this->formMethod."</td>");
                echo("<td>Method to be used in the form. Accepts either GET or POST.</td>");
                echo("<td>POST</td>");
                echo("<td>");
                if(strtolower($this->formMethod != "post") and strtolower($this->formMethod != "get"))
                {
                    echo("<img src='error.svg' alt='Error.svg' height='24' width='24' style='margin:auto;' title='Method was not set to POST or GET.'>");
                }
                echo("</td>");
            echo("</tr>");
        
        /*var $formMethod = "POST"; //"POST"
    var $formAction = ""; //""
    var $formId = ""; //""
    var $formWidth = "90%"; //"90%"
    
    var $usePlaceholders = false; //false
    var $useReset = false; //false
    var $useCustomColors = false; //false
    
    var $submitValue = "Submit"; //"Submit"
    var $resetValue = "Reset"; //"Reset"
    
    var $inputAmount = 1; //1
    var $inputTypes = [""]; //[""]
        var $inputTypeDefault = "text"; //text
    var $inputNames = [""]; //[""]
    var $inputLabels = [""]; //[""]
    var $inputPlaceholders = [""]; //[""]
    var $inputValues = [""]; //[""]
    var $inputsRequired = [false]; //[false]
    var $inputsReadOnly = [false]; //[false]
    
    var $setFieldsets = [""]; //[""]
    
    var $useCustomCSS = false; //false
    var $cssPath = "";
    var $fontFamily = "sans-serif"; //"sans-serif"
    var $preset = "Default"; //"Default"
    
    var $colorFormBg = "#fff"; //"#fff"
    var $colorFont = "#000"; //"#000"
    var $colorBorders = "#000"; //"#000"
    var $colorInputBg = "#fff"; //"#fff"
    var $colorLabelFont = "#000"; //"#000"  */  
        
        echo("<tbody>");
        echo("</table>");
    }
    
}


echo("jeden vstup, zadny placeholder, default preset");
$form = new form;
$form->inputAmount = 1;
$form->inputTypes = ["text"];
$form->inputLabels = ["Vstup 1:"];
$form->inputNames = ["Jmeno"];
$form->inputValues = [""];
$form->formWidth = "300px";
$form->formId = "default";
$form->usePlaceholders = false;
$form->con_form();
    
    echo("<br><br><br>");

echo("7 vstupu, placeholder, smooth preset");
$forma = new form;
$forma->preset = "smooth";
$forma->inputAmount = 7;
$forma->inputTypes = ["text","text","select(Muž,Žena,Jiné)","text","text","number","number"];
$forma->inputLabels = ["Jméno","Příjmení","Pohlaví","Město","Ulice","Číslo domu","PSČ"];
$forma->inputNames = ["Jmeno","Prijmeni","Pohlavi","Mesto","Ulice","cp","psc"];
$forma->inputValues = [""];
$forma->inputsRequired = [true,true,true,false,false,false,false];
$forma->inputsReadOnly[3]=true;
$forma->formWidth = "320px";
$forma->usePlaceholders = true;
$forma->useReset = true;
$forma->inputPlaceholders = ["Jméno","Příjmení","Pohlaví","Město","Ulice","Číslo domu","PSČ"];
$forma->submitValue = "Odeslat";
$forma->resetValue = "Resetovat";
$forma->formId="myForm";
$forma->setFieldsets = ["O mě(0,2)","Adresa(3,6)"];
$forma->con_form();

echo("7 vstupu, placeholder, smoothNight preset");
$formb = new form;
$formb->preset = "smoothNight";
$formb->inputAmount = 7;
$formb->inputTypes = ["text","text","select(Muž,Žena,Jiné)","text","text","number","number"];
$formb->inputLabels = ["Jméno","Příjmení","Pohlaví","Město","Ulice","Číslo domu","PSČ"];
$formb->inputNames = ["Jmeno","Prijmeni","Pohlavi","Mesto","Ulice","cp","psc"];
$formb->inputValues = [""];
$formb->inputsRequired = [true,true,true,false,false,false,false];
$formb->inputsReadOnly[3]=true;
$formb->formWidth = "320px";
$formb->usePlaceholders = true;
$formb->useReset = true;
$formb->inputPlaceholders = ["Jméno","Příjmení","Pohlaví","Město","Ulice","Číslo domu","PSČ"];
$formb->submitValue = "Odeslat";
$formb->resetValue = "Resetovat";
$formb->formId="myFormNight";
$formb->setFieldsets = ["O mě(0,2)","Adresa(3,6)"];
$formb->con_form();

echo("7 vstupu, placeholder, predator preset");
$formc = new form;
$formc->preset = "predator";
$formc->inputAmount = 7;
$formc->inputTypes = ["text","text","select(Muž,Žena,Jiné)","text","text","number","number"];
$formc->inputLabels = ["Jméno","Příjmení","Pohlaví","Město","Ulice","Číslo domu","PSČ"];
$formc->inputNames = ["Jmeno","Prijmeni","Pohlavi","Mesto","Ulice","cp","psc"];
$formc->inputValues = [""];
$formc->inputsRequired = [true,true,true,false,false,false,false];
$formc->inputsReadOnly[3]=true;
$formc->formWidth = "320px";
$formc->usePlaceholders = true;
$formc->useReset = true;
$formc->inputPlaceholders = ["Jméno","Příjmení","Pohlaví","Město","Ulice","Číslo domu","PSČ"];
$formc->submitValue = "Odeslat";
$formc->resetValue = "Resetovat";
$formc->formId="predator";
$formc->setFieldsets = ["O mě(0,2)","Adresa(3,6)"];
$formc->con_form();


echo("<br><br><br>");
echo("All input types");
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

    
    echo("<br><br><br>");
    help();




echo('</body>
</html>');
    
    ?>