var selecthc; 
let COR = true;

function hide(){
    document.getElementById("ereq").style.display = "none";
}

function checkreq(){
    if(document.getElementById("check").checked){
        document.getElementById("ereq").style.display = "block";
    }else {
        document.getElementById("ereq").style.display = "none";
    }
}
    
function reload(){
    location.reload();
}
function choice(select) {
    selecthc = select.options[select.selectedIndex].text;
     ///alert("test");
}
function checkPass(){
    let text = document.getElementById("Passowrd").value;
    
    var pattern = /^((?=.*\d)(?=.*[A-Z])(?=.*\W).{0,10})$/;
    
    if(!pattern.test(text)){
        alert("Password is not Valid!");
        COR = false;
        
    }
}
function checkID(){
    let text = document.getElementById("ID").value;
    var pattern = /^\d{8,8}$/;
    if(!pattern.test(text)){
        alert("ID is not Valid!");
        COR = false;
    }
}

function checkphone(){
    let text = document.getElementById("Phone").value;
    var pattern = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if(!pattern.test(text)){
        alert("Phone is not Valid!");
        COR = false;
    }
}
function checkmail(){
    let text = document.getElementById("Emails").value;
    var pattern = /^\S+@\S{2,}\.\S{2,5}$/;
    if(document.getElementById("check").checked){
        if(!pattern.test(text)){
            alert("Email is not Valid!");
            COR = false;
        }
    }
    
}
function People(){
    var user =document.getElementById("First").value+","+document.getElementById("Last").value+","+ document.getElementById("ID").value+","+document.getElementById("Passowrd").value;
    
    const users= ["ryan,venn,12345678,asd$4R","jeo,sawn,24681357,nji#3P","jane,doe,98765432,jkl@2R","sam,loe,45674567,qwe@1R","man,foo,12341234,mnb^6Y","page,soe,98769876,yut*8Y"];
    /*
    var user1 = "ryan,venn,12345678,asd$4R";
    var user2 = "jeo,sawn,24681357,nji#3P";
    var user3 = "jane,doe,98765432,jkl@2R";
    var user4 = "sam,loe,45674567,qwe@1R";
    var user5 = "man,foo,12341234,mnb^6Y";
    var user6 = "page,soe,98769876,yut*8Y";
    */
    

    if (users.includes(user)){         
    }else{
        alert("not apart of system");
        COR = false;
        
    }
}
function submit(){
    checkPass()
    checkID()
    checkphone()
    checkmail()
    People()
    if (COR == false){
        alert("something went wrong");

    }else{
        fname = document.getElementById("First").value;
        Lname = document.getElementById("Last").value;
        alert("Welcome " +fname + " " + Lname+" " + selecthc);
    }
    
}