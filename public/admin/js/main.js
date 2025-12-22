let tops=
document.getElementById("top");
let sops=
document.getElementById("pot");
tops.addEventListener("submit",function(e){
    e.preventDefault();
 let name=
 sops.value;
 const json=
 document.querySelector('meta[name="csrf-token"]').content;
  fetch("/submit",{
   method:"POST",
   headers:{
    "X-CSRF-TOKEN":json,
    "content-type":"application/json"
   } ,
   body:JSON.stringify({name:name})
})
.then(res=>res.json())
.then(data=>{
    document.getElementById("result").innerText=JSON.stringify(data,null,2);

});

    
});