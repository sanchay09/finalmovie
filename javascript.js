
let amountdisplay=document.getElementById("amountdisplay");



function butclick(){
if(confirm(`Are you Sure to book the tickets `)){
         location.href="payment.php";
};

}


const ticketprice=150;
let amount=0;


let prevtarget=null;
Array.from(document.getElementsByClassName('seats')).forEach((element)=>{
    element.addEventListener('click',(e)=>{
          
        // if(prevtarget == e.currentTarget.checked){
        //     console.log('hiii');

        //     amount-=ticketprice/2;
        //     amountdisplay.textContent=amount;
        // }

        

       if (e.target.checked){
         
           amount=amount+ticketprice;
          
           console.log(amount);
           amountdisplay.textContent=amount;
            
        }

        // else{
        
        // }
        // prevtarget=e.target;
      
        

    })
    
})

