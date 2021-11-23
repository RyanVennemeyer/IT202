function mouseOver(x) {
    x.style.fontSize = "xx-large";
    ///var font = Impact;
    ///document.getElementById("replace").style.fontFamily = font ;
    ///x.str.fontcolor( "blue" );
    x.style.fontFamily = "Impact, 'Arial Narrow Bold', sans-serif";
    x.style.color = "blue";
    ///document.write("<h1 style='color:green'>test</h1>");
}
function mouseOut(x) {
    x.style.fontSize = "initial";
    x.style.fontFamily = "initial";
    x.style.color = "green";
    ///document.write("To see the text move cursor over the text");
}