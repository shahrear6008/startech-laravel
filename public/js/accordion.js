var acc = document.getElementsByClassName("btnli");
var a;
for (a = 0; a < acc.length; a++) {
  acc[a].addEventListener("click", function() {
    this.classList.toggle("active");
    var ul = this.nextElementSibling;
    var ula =document.getElementById("pan");
    if (ul.style.display === "block") {
      ul.style.display = "none";
      ula.style.display = "block";
 
    }
    else {
      ul.style.display = "block";
      ula.style.display = "none";
    
    }
  });
} 

// var acc = document.getElementsByClassName("btnli");
// var a;
// for (a = 0; a < acc.length; a++) {
//   acc[a].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var ul =document.getElementById("pan");
//     console.log = ul ;
//     if (ul.style.display === "block") {
//       ul.style.display = "none";
     
//     }
//     else {
//       ul.style.display = "block";
    
//     }
//   });
// } 





