<!doctype html>
<html>
    <head>
        <title>Graphic Form Generator</title> 
        <meta lang="en">
        <meta charset="utf-8">
        <link href="graphic.css" rel="stylesheet" type="text/css"/>
        
        <script>
            
            function loadInputs()
            {
                var i=0;
                document.getElementById("inputs").innerHTML="";
                document.getElementById("inputs").style.display="inline";
                for (i=0; i<parseInt(document.getElementById("inputAmount").value); i++)
                    {
                        document.getElementById("inputs").insertAdjacentHTML("beforeend", 
                            "<label for='selectInputType"+i+"'>Input type</label>"+
                            "<select id='type"+i+"' name='selectInputType"+i+"'>"+
                                "<option>text</option>"+
                                "<option>number</option>"+
                                "<option>password</option>"+
                                "<option>date</option>"+
                                "<option>radio</option>"+
                                "<option>checkbox</option>"+
                                "<option>color</option>"+
                                "<option>email</option>"+
                                "<option>select</option>"+       
                            "</select>"+ 
                            "<label for='inputName"+i+"'>Input name</label>"+
                            "<input type='text' name='inputName"+i+"' required>"+

                            "<label for='inputLabel"+i+"'>Input label</label>"+
                            "<input type='text' name='inputLabel"+i+"'>"+

                            "<label for='inputPlaceholder"+i+"' class='jsPlaceholders'>Input placeholder</label>"+
                            "<input type='text' name='inputPlaceholder"+i+"' class='jsPlaceholders'>"+ 

                            "<label for='inputValue"+i+"'>Input value</label>"+
                            "<input type='text' name='inputValue"+i+"'>"+

                                                                             
                            "<table>"+
                            "<tr>"+
                                "<td><label for='switchRequired"+i+"'>required</label></td>"+
                                "<td><label for='switchReadonly"+i+"'>readonly</label></td>"+
                            "</tr>"  +
                            "<tr>"+
                                "<td>" +
                                    "<label class='switch'>"+
                                        "<input type='checkbox' name='switchRequired"+i+"'>"+
                                        "<span class='slider round'></span>"+
                                    "</label>"+                                             
                                "</td>"+
                                "<td>" +
                                    "<label class='switch'>"+
                                        "<input type='checkbox' name='switchReadonly"+i+"'>"+
                                        "<span class='slider round'></span>"+
                                    "</label>"+                                                 
                                "</td>"  +                                           
                            "</tr>"+
                            "</table><hr>"                                                                
                        );
                            }
                        
                    }
                        
                }
            
            function usePlaceholders()
            {
                if(document.getElementById("switchUsePlaceholders").checked)
                    {
                        var elems = document.getElementsByClassName("jsPlaceholders");
                        for (var i=0;i<elems.length;i++)
                        {
                            elems[i].style.display = 'inline';
                        }
                    }
                else
                    {
                        var elems = document.getElementsByClassName("jsPlaceholders");
                        for (var i=0;i<elems.length;i++)
                        {
                            elems[i].style.display = 'none';
                        }
                    }
            }
            
            function useCustomCss()
            {
                if(document.getElementById("switchUseCustomCss").checked)
                    {
                        var varCss = document.getElementsByClassName("jsCss");
                        for (var i=0;i<varCss.length;i++)
                        {
                            varCss[i].style.display = 'inline';
                        }
                        var varPreset = document.getElementsByClassName("jsPreset");
                        for (var j=0;j<varPreset.length;j++)
                        {
                            varPreset[j].style.display = 'none';
                        }
                        
                    }
                else
                    {
                        var varCss = document.getElementsByClassName("jsCss");
                        for (var i=0;i<varCss.length;i++)
                        {
                            varCss[i].style.display = 'none';
                        }
                        var varPreset = document.getElementsByClassName("jsPreset");
                        for (var j=0;j<varPreset.length;j++)
                        {
                            varPreset[j].style.display = 'inline';
                        }
                    }
            }
            
            
            function useReset()
            {
                if(document.getElementById("switchUseReset").checked)
                    {
                        var elems = document.getElementsByClassName("jsReset");
                        for (var i=0;i<elems.length;i++)
                        {
                            elems[i].style.display = 'inline';
                        }
                    }
                else
                    {
                        var elems = document.getElementsByClassName("jsReset");
                        for (var i=0;i<elems.length;i++)
                        {
                            elems[i].style.display = 'none';
                        }
                    }
            }
            
            
            
            function useCustomColors()
            {
                if(document.getElementById("switchUseCustomColors").checked)
                    {
                        var elem = document.getElementById("jsCustomColors");
                        elem.style.display = 'inline';
                    }
                else
                    {
                        var elem = document.getElementById("jsCustomColors");
                        elem.style.display = 'none';
                    }
            }
            
            
            function useFieldsets()
            {
                if(document.getElementById("switchUseFieldsets").checked)
                    {
                        var elem = document.getElementById("fieldsetsFS");
                        elem.style.display = 'inline';
                    }
                else
                    {
                        var elem = document.getElementById("fieldsetsFS");
                        elem.style.display = 'none';
                    }    
            }
            
            function fsAmount()
            {
                document.getElementById("fieldsets").innerHTML="";
                for (var i=0; i<parseInt(document.getElementById("fieldsetAmount").value); i++)
                    {
                        document.getElementById("fieldsets").insertAdjacentHTML("beforeend",
                        "<hr>" +                                                     
                        "<label for='fieldsetBeginning"+i+"'>Fieldset Beginning</label>"+
                        "<input type='number' min='1' name='fieldsetBeginning"+i+"' id='fieldsetBeginning"+i+"'>"+ 
                                                                                
                        "<label for='fieldsetEnd"+i+"'>Fieldset End</label>"+
                        "<input type='number' min='1' name='fieldsetEnd"+i+"' id='fieldsetEnd"+i+"'>"+  
                                                                                
                        "<label for='fieldsetName"+i+"'>Fieldset Name</label>"+
                        "<input type='text' name='fieldsetName"+i+"' id='fieldsetName"+i+"'>");   
                    }
            }
            
        </script>    
    </head>
    <body>
        <form method="post" action="./generated.php" target="_blank">
            <fieldset>

                <label for="selectFormMethod">form method</label>
                <select name="selectFormMethod" required>
                    <option>GET</option>
                    <option selected>POST</option>
                </select>

                <label for="textFormAction">form action</label>
                <input type="text" name="textFormAction">

                <label for="textFormId">form id</label>
                <input type="text" name="textFormId" required>

                <label for="numberFormWidth">form width</label>
                <input type="number" name="numberFormWidth">
                <select name="selectFormWidth">
                    <option>px</option>
                    <option>em</option>
                    <option>%</option>
                </select>
                
            </fieldset>
            
            <fieldset>
                
                <table id="switches">
                    <tr>
                        <td><label class="text" for="switchUsePlaceholders">use placeholders</label></td> 
                        <td><label class="text" for="switchUseCustomCss">use custom css</label></td>    
                        <td><label class="text" for="switchUseReset">use reset</label></td>    
                        <td><label class="text" for="switchUseCustomColors">use custom colors</label></td> 
                        <td><label class="text" for="switchUseFieldsets">use fieldsets</label></td>    
                    </tr>
                    
                    <tr>
                        <td>
                            <label class="switch">
                                <input type="checkbox" name="switchUsePlaceholders" id="switchUsePlaceholders" onchange="usePlaceholders()">
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                            <label class="switch">
                                <input type="checkbox" name="switchUseCustomCss" id="switchUseCustomCss" onchange="useCustomCss()">
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                            <label class="switch">
                                <input type="checkbox" name="switchUseReset" id="switchUseReset" onchange="useReset()">
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                            <label class="switch">
                                <input type="checkbox" name="switchUseCustomColors" id="switchUseCustomColors" onchange="useCustomColors()">
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                            <label class="switch">
                                <input type="checkbox" name="switchUseFieldsets" id="switchUseFieldsets" onchange="useFieldsets()">
                                <span class="slider round"></span>
                            </label>
                        </td>
                    </tr>
                
                </table>
                
            </fieldset>
            
            
            <fieldset>
                
                <label for="textSubmitValue">submit value</label>
                <input type="text" name="textSubmitValue">
            
                <label for="textResetValue" class="jsReset">reset value</label>
                <input type="text" name="textResetValue" class="jsReset">
            
                <label for="numberInputAmount">input amount</label>
                <input type="number" name="numberInputAmount" id="inputAmount" onchange="loadInputs(); usePlaceholders();" onkeyup="loadInputs(); usePlaceholders();" required min="1">
            
                <label for="textCssPath" class="jsCss">css path</label>
                <input type="text" name="textCssPath" class="jsCss">
            
                <label class="jsPreset" for="selectPreset">preset</label>
                <select class="jsPreset" name="selectPreset">
                    <option selected>Default</option>
                    <option>smooth</option>
                    <option>smooth night</option>
                    <option>predator</option>
                </select>
            
                <label for="textFontFamily">font family</label>
                <input type="text" name="textFontFamily">

            </fieldset>
            
            <fieldset id="inputs">
            
                
            
            </fieldset>
            
            <fieldset id="fieldsetsFS">
                
                <label for="amountFieldsets">Amount of fieldsets</label>
                <input type="number" name="amountFieldsets" id="fieldsetAmount" onchange="fsAmount()" min="1">
                <div id="fieldsets">
                
                </div>
            
            </fieldset>
            
            <fieldset id="jsCustomColors">
            
                <label for="colorFormBg">color form bg</label>
                <input type="color" name="colorFormBg">
                
                <label for="colorFont">color font</label>
                <input type="color" name="colorFont">
                
                <label for="colorBorders">color borders</label>
                <input type="color" name="colorBorders">
                
                <label for="colorInputBg">color input bg</label>
                <input type="color" name="colorInputBg">
                
                <label for="colorLabelFont">color label font</label>
                <input type="color" name="colorLabelFont">
            
            </fieldset>
            
            <input type="submit" name="submit" value="Submit" style="margin:10px">

            
        </form>
        
    </body>
</html>