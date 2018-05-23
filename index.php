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
    
    function get_submitValue($val)
    {
        return $this->submitValue;
    }
    
/* CONSTRUCTING FUNCTIONS */
    
    function con_submit()
    {
        return('<input type="submit" name="submit" class="submit '.$this->preset.'" value="'.$this->submitValue.'"/>');
    }
    
    
    
}


?>