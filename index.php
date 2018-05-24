<?php

class form{
    
/* DEFAULT VARS */    
    var $formLanguage = "en"; //"en"
    var $formMethod = "POST"; //"POST"
    var $formAction = ""; //""
    
    var $usePlaceholders = false; //false;
    
    var $preset = ""; //""
    
    var $submitValue = "Submit"; //"Submit"
    
    var $inputTypes = [""]; //[""]
    var $inputNames = [""]; //[""]
    var $inputLabels = [""]; //[""]
    var $inputPlaceholders = [""]; //[""]
    var $inputValues = [""]; //[""]
    var $inputWidth = "90%"; //"90%"
    
    
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
    
    
    
}


?>