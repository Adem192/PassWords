<?php

?>

<html>
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet"/>
    <script src="scripts.js" defer></script>
  </head>
  <body>
    <div class="header">
        <a class="title">PassWords</a>
    </div>
    <div class="main-container container">
        <div class="separator"></div>
        <form method="POST" id="wordForm">
            <div class="contentBlock" style="margin-bottom:3rem;">
                <ul class="contentBlockList">
                    <li>
                        <label for="single">One Word</label>
                        <input name="count" type="radio" value="1"/>
                    </li>
                    <li>
                        <label for="double">Two Words</label>
                        <input name="count" type="radio" value="2"/>
                    </li>
                    <li>
                        <label for="triple">Three Words</label>
                        <input name="count" type="radio" value="3" checked/>
                    </li>
                    <li>
                        <label for="quad">Four Words</label>
                        <input name="count" type="radio" value="4"/>
                    </li>
                </ul>
            </div>
            <div class="separator"></div>
            <div class="contentBlockList center">
                <div class="column" style="width:40%;">
                    <label for="specialChars">Use special characters</label><br/>
                    <input type="checkbox" name="specialChars"/>
                </div>
                <div class="horizontal"></div>
                <div class="column" style="width:40%;">
                    <label for="separator">Separator</label><br/>
                    <select id="separator" name="separator">
                        <option></option>
                        <option name="-">-</option>
                        <option name="@">@</option>
                        <option name="&">&</option>
                    </select>
                </div>
            </div>
            <div class="separator"></div>
            <div class="contentBlockList center">
                <div class="column" style="width:40%;">
                    <label for="prefix">Prefix</label><br/>
                    <input class="presuffix" type="text" name="prefix"/>
                </div>
                <div class="horizontal"></div>
                <div class="column" style="width:40%;">
                    <label for="suffix">Suffix</label><br/>
                    <input class="presuffix" type="text" name="suffix"/>
                </div>
            </div>
            <div class="separator"></div>
            <div class="center">
                <button type="button" id="Submit">Submitt</button>
            </div>
            <div class="separator"></div>
            <div class="contentBlock">
                <div class="contentBlockList">
                    <label class="resultLabel" id="resultLabel">
                        <input class="result" name="result" id="result" readonly />
                    </label>
                </div>
            </div>
        </form>
    </div>
  </body>
</html>

