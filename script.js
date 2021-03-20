document.getElementById("joinus").onclick = function () {
    location.href = "signup.php";
};

function chk(){
    
    // alert("1");
 var pass = document.getElementById("pass").value;
 var cpass = document.getElementById("cpass").value;
 
     if(pass!=cpass){
       document.getElementById("error").innerHTML = "Passwords do not match!";
         document.getElementById("cpass").value = "";
     }
     else{
         document.getElementById("error").innerHTML = "Passwords match!";
     }
 }

 $('home_heading').click(function(){
    window.location.href='the_link_to_go_to.html';
 }) 


 $(document).ready(function(){

 $('.carousel').carousel({
    interval: 2000
  })

})



