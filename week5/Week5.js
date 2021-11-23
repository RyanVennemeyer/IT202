
var AB = "A";
function myFunction() {
    pic = "https://drive.google.com/uc?export=view&id=1NcichVLpumPMWzJ5VYLBAYRP1hfpHANi";///on
    opic = "https://drive.google.com/uc?export=view&id=18JDpVsDeTRQWuKYqQA8o8QmSuLlevzKu";///off
    var image = document.getElementById("light");
    if (AB == "A"){
        image.src = opic;
        AB = "B";
    }else{
        image.src = pic;
        AB = "A";
    }
    
  }
  /// starts off
  ///https://drive.google.com/uc?export=view&id=1NcichVLpumPMWzJ5VYLBAYRP1hfpHANi
  ///https://drive.google.com/uc?export=view&id=1VG0LO1FFrKeoxqZCCXRrjdOoxSMHNcdw
  ///var im =document.getElementById('light');
   /// if (document.im.src == pic){
  ///      document.im.src = pic;
  ///  }else if (document.im.src == opic){
   ///     document.im.src = opic;
   /// }