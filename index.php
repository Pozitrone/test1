<?php

class form{
    
/* DEFAULT VARS */    
    var $formLanguage = "en"; //"en"
    var $formMethod = "POST"; //"POST"
    var $formAction = ""; //""
    
    var $usePlaceholders = false; //false;
    
    var $preset = ""; //""
    
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
        echo("formMethod - get or post<br>");
        echo("formAction - url where to send. Leave blank for self<br>");
        echo("usePlaceholders - if u want to use placeholders or not - true or false<br>");
        echo("inputAmount - amount of fields to input - integer<br>");
        echo("inputTypes - array of types for the amount of inputs - array of strings<br>");
        echo("inputNames - array of names for the fields - used for labeling<br>");
        echo("inputLabels - content of all labels<br>");
        echo("inputPlaceholders - placeholder content, not needed if usePlaceholders is false<br>");
        echo("inputValues - beginning values inside the fields, not required<br>");
        echo("inputWidth - size of an input field compared to outer div<br>");
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
    
    function set_inputNames() 
    {
        return $this->inputNames;
    }
    
    function set_inputLabels() 
    {
        return $this->inputLabels;
    }
    
    function set_inputPlaceholders() 
    {
        return $this->inputPlaceholders;
    }
    
    function set_inputValues() 
    {
        return $this->inputValues;
    }
    
    function set_inputWidth() 
    {
        return $this->inputWidth;
    }
/* CONSTRUCTING FUNCTIONS */
    
    function con_submit()
    {
        return('<input type="submit" name="submit" class="submit '.$this->preset.'" value="'.$this->submitValue.'"/>');
    }
    
    function con_inputs()
    {
        for($i=0; $i<$this->inputAmount;$i++)
        {
            if(!isset($this->inputTypes[$i]))
            {
                $this->inputTypes[$i] = $this->$inputTypeDefault;
            }
            
            if($this->usePlaceholders=true)
            {
                $placeholder[$i]='" placeholder="'.$this->inputPlaceholders[$i];
            }
            else
            {
                $placeholder[$i]='" ';
            }
            
            if($this->inputTypes!="textarea")
            {
                echo('
                <label for="'.$this->inputNames[$i].'">'.$this->inputLabels.'</label>'
                .'<br>'. 
                '<input type="'.$this->inputTypes[$i].'" name="'.$this->inputNames[$i].$placeholder[$i].'" value="'.$this->inputValues.'"/>');
            }
            else
            {
                echo('
                <label for="'.$this->inputNames[$i].'">'.$this->inputLabels.'</label>'
                .'<br>'. 
                '<textarea name="'.$this->inputNames[$i].$placeholder[$i].'" value="'.$this->inputValues.'"/>');   
            }
        }
        return null;
    }
    
   
    function con_form()
    {
        echo('<form method="'.$this->formMethod.'" action="'.$this->formAction.'">');
        con_inputs();
        echo(con_submit());
        echo("</form>");
        
    }
    
    
}


?>