function liczBMI(){
    var waga = document.getElementById("waga").value;
    var wzrost = document.getElementById("wzrost").value;
    
    var userBMI = ((waga/(wzrost*wzrost))*10000);
    userBMI=Math.round(userBMI);
    
    document.getElementById("userBMI").innerHTML="Twoje BMI: "+userBMI;
}