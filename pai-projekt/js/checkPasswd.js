function formCheck() {
    let passwd = document.getElementById('passwd').value;
    let passwdRep = document.getElementById('passwdRep').value;
    if((passwdRep.length >= 4 && passwd != "") && (passwd.length >= 4 || passwdRep != "")) {
        if(passwd != passwdRep) {
            document.getElementById('passwdNotEqual').style.display = 'block';
        } else {
            document.getElementById('passwdNotEqual').style.display = 'none';
        }
    }
    if((passwdRep.length <= 3 && passwd != "") && (passwd.length <= 3 || passwdRep != "")) {
        document.getElementById('passwdTooShort').style.display = 'block';
        console.log(passwd.length, passwdRep.length, passwd, passwdRep);
    } else {
        document.getElementById('passwdTooShort').style.display = 'none';
    }
    
}