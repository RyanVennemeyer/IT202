function check() {
    var ucid = document.getElementById("UCIDinput").value;
    var len = ucid.length;
    
    var k =0;
    var newucid;
    /*
    for (var j = ucid.length -1; j>=0;j--){
        newucid[k] =ucid[j] ;
        k++;
    }*/
    

    var holder =0;
    let str ="qwertyuiopsadfghjklzxcvbnm";
    var i =0;
    while (str.includes(ucid[i])){
        holder +=1 ;
        i++;
        
    }
    /*document.getElementById("print").innerHTML = holder;*/
    var loop = len - holder;
    document.getElementById("print").innerHTML = loop;
    if(loop > 3){
        alert("UCID DOES NOT CONFORM TO VALID FORMAT! RE-ENTER");
    }
    for(var i = 0; i> len - holder;i++){
        if(!str.includes(ucid[holder])){
            

        }else{
            alert("UCID DOES NOT CONFORM TO VALID FORMAT! RE-ENTER");
        }
        holder = holder+1;
    }
    alert("VALID UCID FORMAT!");
    /*
    var i =0;
    var counter =0;
    let str ="qwertyuiopsadfghjklzxcvbnm";
    while (str.includes(ucid[i])){
        if (){
            /*allert("UCID DOES NOT CONFORM TO VALID FORMAT! RE-ENTER")
            allert("work");
        }
        else{
            counter++;
        }
        if (counter >3){
            allert("UCID DOES NOT CONFORM TO VALID FORMAT! RE-ENTER");
        }
        i++
    }
    allert("UCID DOES NOT CONFORM TO VALID FORMAT! RE-ENTER");
    */
}