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
            echo("</ul><br>");
        echo("<strong>submitValue</strong> - Value that will appear in submit button<br>");
        echo("<strong>formId</strong> - give your form a brand new ID<br>");
        echo("<strong>fontFamily</strong> - select a font family for your form<br>");
        echo("<strong>useCustomCSS</strong> - boolean value whether to use custom CSS or not<br>");
        echo("<strong>cssPath</strong> - path for your custom CSS<br>");
        echo("<strong>inputsRequired</strong> - whether the inputs are required or not, requires an array of bools<br>");
        echo("<strong>inputsReadOnly</strong> - whether the inputs are readonly or not, requires an array of bools<br>");
        
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
    
    var $useCustomCSS = false; //false
    var $cssPath = "";
    var $fontFamily = "sans-serif"; //"sans-serif"
    var $preset = "Default"; //"Default"
    

    
    
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

/* CONSTRUCTING FUNCTIONS */
    
    function con_submit()
    {
        return('<input type="submit" name="submit" class="submit '.$this->preset.'" value="'.$this->submitValue.'"/>');
    }
    
    function con_reset()
    {
        return('<input type="button" name="resetButton" onclick="resetForm()" class="resetButton '.$this->preset.'" value="'.$this->resetValue.'"/>');
    }
    
    function con_inputs()
    {
        for($i=0; $i<$this->inputAmount;$i++)
        {
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
            
            if(($this->inputTypes[$i]!="textarea") and (strpos($this->inputTypes[$i],"select")===false))
            {
                echo('
                <label for="'.$this->inputNames[$i].'" class="'.$this->preset.'">'.$this->inputLabels[$i].' </label>'
                .'<br>'. 
                '<input class="'.$this->preset.'"
                type="'.$this->inputTypes[$i].'"
                name="'.$this->inputNames[$i].'" 
                '.$placeholder[$i].' 
                value="'.$this->inputValues[$i].'"');
                if($this->inputsRequired[$i]==true){echo(" required");} 
                if($this->inputsReadOnly[$i]==true){echo(" readonly");}
                echo('/><br>');
            }
            else if ($this->inputTypes[$i]=="textarea")
            {
                echo('
                <label for="'.$this->inputNames[$i].'" class="'.$this->preset.'">'.$this->inputLabels.'</label>'
                .'<br>'. 
                '<textarea class="'.$this->preset.'"
                name="'.$this->inputNames[$i].'"
                '.$placeholder[$i].'  
                value="'.$this->inputValues.'"');
                if($this->inputsRequired[$i]==true){echo(" required");}
                if($this->inputsReadOnly[$i]==true){echo(" readonly");}
                echo('/><br>');   
            }
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
                function resetForm()
                {
                    document.getElementById("'.$this->formId.'").reset();
                    //document.getElementById("myForm").reset();
                }
            </script>
            ');
            
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
  
    
}


echo("jeden vstup, zadny placeholder, default preset");
$form = new form;
$form->inputAmount = 1;
$form->inputTypes = ["text"];
$form->inputLabels = ["Vstup 1:"];
$form->inputNames = ["Jmeno"];
$form->inputValues = [""];
$form->formWidth = "300px";
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
$forma->formWidth = "512px";
$forma->usePlaceholders = true;
$forma->useReset = true;
$forma->inputPlaceholders = ["Jméno","Příjmení","Pohlaví","Město","Ulice","Číslo domu","PSČ"];
$forma->submitValue = "Odeslat";
$forma->resetValue = "Resetovat";
$forma->formId="myForm";
$forma->con_form();
    
    echo("<br><br><br>");
    help();




echo('</body>
</html>');
    
    ?>