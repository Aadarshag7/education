let tops=
document.getElementById("top");
let sops=
document.getElementById("pot");
tops.addEventListener("submit",function(e){
    e.preventDefault();
 let name=
 sops.value;
  fetch("/submit",{
   method:"POST",
   headers:{
    "content-type":"application/json"
   } ,
   body:JSON.stringify({name:name})
})
.then(res=>res.json())
.then(data=>{
    console.log(data);
});

    
});