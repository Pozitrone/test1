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
                for (i=0; i<parseInt(document.getElementById("inputAmount").value); i++)
                    {
                        document.getElementById("inputs").insertAdjacentHTML("beforeend", 
                            "<label for='inputType"+i+"'>Input type</label>"+
                            "<select name='selectInputType"+i+"'>"+
                                "<option>text</option>"+
                                "<option>number</option>"+
                                "<option>password</option>"+
                                "<option>date</option>"+
                                "<option>radio</option>"+
                                "<option>checkbox</option>"+
                                "<option>color</option>"+
                                "<option>email</option>"+
                            "</select>"+

                            "<label for='inputName"+i+"'>Input name</label>"+
                            "<input type='text' name='inputName"+i+"'>"+

                            "<label for='inputLabel"+i+"'>Input label</label>"+
                            "<input type='text' name='inputLabel"+i+"'>"+

                            "<label for='inputPlaceholder"+i+"'>Input placeholder</label>"+
                            "<input type='text' name='inputPlaceholder"+i+"'>"+ 

                            "<label for='inputValue"+i+"'>Input value</label>"+
                            "<input type='text' name='inputValue"+i+"'>"+

                            "<label for='switchRequired"+i+"'>required</label>"+
                                "<label class='switch'>"+
                                "<input type='checkbox' name='switchRequired"+i+"'>"+
                            "<span class='slider round'></span>"+
                            "</label>"+

                            "<label for='switchReadonly"+i+"'>readonly</label>"+
                                "<label class='switch'>"+
                                "<input type='checkbox' name='switchReadonly"+i+"'>"+
                            "<span class='slider round'></span>"+
                            "</label>"+
                            "<br><hr>"                                                 
                                                                             


                        );
                    }
                        
                }
            
            function usePlaceholders
            {
                
            }
            
            function useCustomCss
            
            function useReset
            
            function useCustomColors
            
            function useFieldsets
        </script>    
    </head>
    <body>
        <form>
            <fieldset>

                <label for="selectFormMethod">form method</label>
                <select name="selectFormMethod">
                    <option>GET</option>
                    <option selected>POST</option>
                </select>

                <label for="textFormAction">form action</label>
                <input type="text" name="textFormAction">

                <label for="textFormId">form id</label>
                <input type="text" name="textFormId">

                <label for="numberFormWidth">form width</label>
                <input type="number" name="numberFormWidth">
                <select name="selectFormWidth">
                    <option>px</option>
                    <option>em</option>
                    <option>%</option>
                </select>
                
            </fieldset>
            
            <fieldset>
                <div>
                    <label for="switchUsePlaceholders">use placeholders</label>
                    <label class="switch">
                        <input type="checkbox" name="switchUsePlaceholders" id="switchUsePlaceholders">
                        <span class="slider round"></span>
                    </label>
                </div>
                
                <div>
                    <label for="switchUseCustomCSS">use custom css</label>
                    <label class="switch">
                        <input type="checkbox" name="switchUseCustomCSS" id="switchUseCustomCSS">
                        <span class="slider round"></span>
                    </label>
                </div>
                
                <div>
                    <label for="switchUseReset">use reset</label>
                    <label class="switch">
                        <input type="checkbox" name="switchUseReset" id="switchUseReset">
                        <span class="slider round"></span>
                    </label>
                </div>
                    
                <div>
                    <label for="switchUseCustomColors">use custom colors</label>
                    <label class="switch">
                        <input type="checkbox" name="switchUseCustomColors" id="switchUseCustomColors">
                        <span class="slider round"></span>
                    </label>
                </div>
                
                <div>
                    <label for="switchUseFieldsets">use fieldsets</label>
                    <label class="switch">
                        <input type="checkbox" name="switchUseFieldsets" id="switchUseFieldsets">
                        <span class="slider round"></span>
                    </label>
                </div>
            
            </fieldset>
            
            
            <fieldset>
                
                <label for="textSubmitValue">submit value</label>
                <input type="text" name="textSubmitValue">
            
                <label for="textResetValue">reset value</label>
                <input type="text" name="textResetValue">
            
                <label for="numberInputAmount">input amount</label>
                <input type="number" name="numberInputAmount" id="inputAmount" onchange="loadInputs()">
            
                <label for="textCssPath">css path</label>
                <input type="text" name="textCssPath">
            
                <label for="selectPreset">preset</label>
                <select name="selectPreset">
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
            
            <fieldset>
            
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