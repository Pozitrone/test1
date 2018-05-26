<?php
class form{
    
/* DEFAULT VARS */    
    var $formMethod = "POST"; //"POST"
    var $formAction = ""; //""
    
    var $usePlaceholders = false; //false;
    
    var $preset = "Default"; //"Default"
    
    var $submitValue = "Submit"; //"Submit"
    
    var $inputAmount = 1; //1
    var $inputTypes = [""]; //[""]
        var $inputTypeDefault = "text"; //text
    var $inputNames = [""]; //[""]
    var $inputLabels = [""]; //[""]
    var $inputPlaceholders = [""]; //[""]
    var $inputValues = [""]; //[""]
    var $inputWidth = "90%"; //"90%"
    
    
    
    function help()
    {
        echo("<strong>formMethod</strong> - get or post<br>");
        echo("<strong>formAction</strong> - url where to send. Leave blank for self<br>");
        echo("<strong>usePlaceholders</strong> - if u want to use placeholders or not - true or false<br>");
        echo("<strong>inputAmount</strong> - amount of fields to input - integer<br>");
        echo("<strong>inputTypes</strong> - array of types for the amount of inputs - array of strings<br>");
        echo("<strong>inputNames</strong> - array of names for the fields - used for labeling<br>");
        echo("<strong>inputLabels</strong> - content of all labels<br>");
        echo("<strong>inputPlaceholders</strong> - placeholder content, not needed if usePlaceholders is false<br>");
        echo("<strong>inputValues</strong> - beginning values inside the fields, not required<br>");
        echo("<strong>inputWidth</strong> - size of an input field compared to outer div<br>");
        echo("<strong>preset</strong> - Gives you a choice of presets<br>");
        echo("<strong>Current presets available:</strong>");
            echo("<ul>");
            echo("<li>Default</li>");
            echo("</ul>");
        
        echo("<br><br>");
        return null;
    }
    
    
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
    
    
    
    function set_submitValue($val)
    {
        $this->submitValue = $val;
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
    
    function set_inputWidth($width) 
    {
        $this->inputWidth = $width;
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
    
    
    
    function get_submitValue()
    {
        return $this->submitValue;
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
    
    function get_inputWidth() 
    {
        return $this->inputWidth;
    }
/* CONSTRUCTING FUNCTIONS */
    
    function con_submit()
    {
        return('<br><input type="submit" name="submit" class="submit '.$this->preset.'" value="'.$this->submitValue.'"/>');
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
            
            if(($this->inputTypes[$i]!="textarea") and (strpos($this->inputTypes[$i],"select")===false))
            {
                echo('
                <label for="'.$this->inputNames[$i].'">'.$this->inputLabels[$i].'</label>'
                .'<br>'. 
                '<input 
                type="'.$this->inputTypes[$i].'"
                name="'.$this->inputNames[$i].'" 
                '.$placeholder[$i].' 
                value="'.$this->inputValues[$i].'" 
                width="'.$this->inputWidth.'"/><br>');
            }
            else if ($this->inputTypes[$i]=="textarea")
            {
                echo('
                <label for="'.$this->inputNames[$i].'">'.$this->inputLabels.'</label>'
                .'<br>'. 
                '<textarea 
                name="'.$this->inputNames[$i].'"
                '.$placeholder[$i].'  
                value="'.$this->inputValues.'" 
                width="'.$this->inputWidth.'"/><br>');   
            }
            else if (strpos($this->inputTypes[$i],"select")!==false)
            {
                echo('<label for="'.$this->inputNames[$i].'">'.$this->inputLabels[$i].'</label><br>');
                echo('<select name="'.$this->inputNames[$i].'" width="'.$this->inputWidth.'">');
                $opts = explode(",",$this->inputTypes[$i]);
                
                for($j=0;$j<=substr_count($this->inputTypes[$i],",");$j++)
                {
                    
                    if($j==0)
                    {
                        echo('<option value="'.substr($opts[$j],7).'">'.substr($opts[$j],7).'</option>');
                    }
                    else if($j==substr_count($this->inputTypes[$i],","))
                    {
                        echo('<option value="'.substr($opts[$j], 0, -1).'">'.substr($opts[$j], 0, -1).'</option>');
                    }
                    else
                    {
                        echo('<option value="'.$opts[$j].'">'.$opts[$j].'</option>');
                    }
                }
                echo("</select><br>");
            }
        }
        return null;
    }
    
   
    function con_form()
    {
        echo('<form method="'.$this->formMethod.'" action="'.$this->formAction.'">');
        $this->con_inputs();
        echo($this->con_submit());
        echo("</form>");
        
    }
    
    
    
    
}
?>
<!doctype html/>
<head>
    <title>Vexx Forms</title>
    <meta lang="en">
    <meta charset="utf-8">
    <link rel="css/stylesheet" href="presets.css"/>
</head>
<body>
</body>



<?php





echo("jeden vstup, zadny placeholder");
$form = new form;
$form->inputAmount = 1;
$form->inputTypes = ["text"];
$form->inputLabels = ["Vstup 1:"];
$form->inputNames = ["Jmeno"];
$form->inputValues = [""];
$form->inputWidth = "300px";
$form->usePlaceholders = false;
$form->con_form();

echo("7 vstupu");
$forma = new form;
$forma->inputAmount = 7;
$forma->inputTypes = ["text","text","select(Muž,Žena,Jiné)","text","text","number","number"];
$forma->inputLabels = ["Jméno","Příjmení","Pohlaví","Město","Ulice","Číslo domu","PSČ"];
$forma->inputNames = ["Jmeno","Prijmeni","Pohlavi","Mesto","Ulice","cp","psc"];
$forma->inputValues = [""];
$forma->inputWidth = "512px";
$forma->usePlaceholders = true;
$forma->inputPlaceholders = ["Jméno","Příjmení","Pohlaví","Město","Ulice","Číslo domu","PSČ"];
$forma->con_form();

?>