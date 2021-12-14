class printing{
    
    printing(){
        alert("you are going to print your cart");
        window.print();
    }


}

document.getElementById("btn-print").addEventListener("click", function () {
   let print = new printing();
   print.printing(); 
});