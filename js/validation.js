class validation{


    sendmessage(){
        alert("You must fill out everything");

    }
}   




document.getElementById("btn-contact").addEventListener("click",function()
{
    let message = new validation();
if(document.getElementById("contact-name") == "" || document.getElementById("contact-lastname") == "" || document.getElementById("contact-email") == "" || document.getElementById("contact-comment") == "");
    {
   message.sendmessage();
    } 

  
    
});

 // if(document.getElementById("contact-name") == "" || document.getElementById("contact-lastname") == "" || document.getElementById("contact-email") == "" || document.getElementById("contact-comment") == "");
    // {
    // alert("You must fill out everything");
    // } 