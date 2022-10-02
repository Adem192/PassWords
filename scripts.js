window.addEventListener('load', function() {
    async function loadFileAndPrintToConsole(url) {
        try {
            const response = await fetch(url);
            return wordArray = await response.text().then(text => text.split(/\r|\n/));
        } catch (err) {
            console.error(err);
        }
    }
      
    loadFileAndPrintToConsole('http://localhost/adems_projects/PassWords/dictionary.txt');
});

var submit = document.getElementById("Submit");

submit.addEventListener("click", function(){
    wordCount = document.querySelector('input[name="count"]:checked').value;
    separator = document.querySelector('select[name="separator"]').value;
    specialChars = document.querySelector('input[name="specialChars"]').checked;
    prefix = document.querySelector('input[name="prefix"]').value;
    suffix = document.querySelector('input[name="suffix"]').value;

    getPassword(wordCount, separator, specialChars, prefix, suffix);
});

function getPassword(wordCount, separator, specialChars, prefix, suffix){
    var password = '';

    password = prefix;

    for (let i = 0; i < wordCount; i++) {
        if (i == 0 || i == wordCount){
            password += returnWord(specialChars);
        } else {
            password += separator;
            password += returnWord(specialChars);
        }
    }

    password += suffix;

    document.getElementById("result").value = password;
}

function returnWord(specialChars){
    word = wordArray[Math.floor(Math.random() * wordArray.length)];
    word = word.charAt(0).toUpperCase() + word.slice(1);
    if (specialChars){
        word = word.replace(/e/g, "3");
        word = word.replace(/a/g, "4");
        word = word.replace(/s/g, "$");
        word = word.replace(/t/g, "7");
    }
    return word;
}

var copyButton = document.getElementById("resultLabel");

copyButton.addEventListener("click", function(){
    var copyText = document.getElementById("result");

    copyText.select();
    copyText.setSelectionRange(0, 99999);

    navigator.clipboard.writeText(copyText.value);

    alert(copyText.value + " - Added to clipboard");
});

