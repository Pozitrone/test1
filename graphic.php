<!doctype html>
<html>
    <head>
        <title>Graphic Form Generator</title> 
        <meta lang="en">
        <meta charset="utf-8">
        <link href="graphic.css" rel="stylesheet" type="text/css"/>
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
                <label for="switchUsePlaceholders">use placeholders</label>
                <label class="switch">
                    <input type="checkbox" name="switchUsePlaceholders">
                    <span class="slider round"></span>
                </label>
                
                <label for="switchUseCustomCSS">use custom css</label>
                <label class="switch">
                    <input type="checkbox" name="switchUseCustomCSS">
                    <span class="slider round"></span>
                </label>
                
                <label for="switchUseReset">use reset</label>
                <label class="switch">
                    <input type="checkbox" name="switchUseReset">
                    <span class="slider round"></span>
                </label>
                
                <label for="switchUseCustomColors">use custom colors</label>
                <label class="switch">
                    <input type="checkbox" name="switchUseCustomColors">
                    <span class="slider round"></span>
                </label>
                
                <label for="switchUseFieldsets">use fieldsets</label>
                <label class="switch">
                    <input type="checkbox" name="switchUseFieldsets">
                    <span class="slider round"></span>
                </label>
            
            </fieldset>

            
        </form>
        
    </body>
</html>