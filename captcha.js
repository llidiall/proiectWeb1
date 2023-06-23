function genNewCaptcha(){
    chars="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    captcha=chars[Math.floor(Math.random()*chars.length)];
    for(var i=0;i<5;i++)
    {
        captcha=captcha+chars[Math.floor(Math.random()*chars.length)];
    }
    form2.ct.value=captcha;
}

function checkCaptcha(){
    var check=document.getElementById("ci").value;
    if(captcha==check){
        return true;
    }
    else
    {
        alert("Invalid Captcha");
        return false;
    }
        
}

getNewCaptcha();