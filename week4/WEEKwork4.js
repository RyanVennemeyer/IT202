function check() {
    var ucid = document.getElementById("UCIDinput").value;
    var len = ucid.length;
    var holder =0;
    let str ="qwertyuiopsadfghjklzxcvbnm";
    var i =0;
    while (str.includes(ucid[i])){
        holder +=1 ;
        i++;
        
    }
    var loop = len - holder;
    
    if(loop > 3){
        alert("UCID DOES NOT CONFORM TO VALID FORMAT! RE-ENTER");
        return;
    }
    for(var i = 0; i> len - holder;i++){
        if(!str.includes(ucid[holder])){
        }else{
            alert("UCID DOES NOT CONFORM TO VALID FORMAT! RE-ENTER");
            return;
        }
        holder = holder+1;
    }
    alert("VALID UCID FORMAT!");
    
}