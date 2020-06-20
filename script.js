function changeText(e){
    var paragraph = document.getElementById("hello_text")
    paragraph.innerText = "Hi"
}


var isRed = true;
var paragraph = document.getElementById("hello_text")
paragraph.style.transition = "all 2s";

function changeColor(event){
    if(isRed){
        paragraph.style.color = "yellow";
        paragraph.style.fontSize = "21px";
        isRed = false;
    } else {
        paragraph.style.color = "red";
        paragraph.style.fontSize = "12px";
        isRed = true;
    }
}

var button = document.getElementById("button")
button.onclick = changeColor