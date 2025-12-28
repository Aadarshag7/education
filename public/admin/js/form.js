let sec=
document.getElementById("secin");
let seci=
document.getElementById("seci");

seci.addEventListener("submit",function(e){
    e.preventDefault();

let set=sec.value;
if(set===""){
    document.getElementById("result").innerText="Name is Required";
    return;
}

if(set.length<3){
    document.getElementById("result").innerText="atleast 3 character is required";
    return;
}
const furr=
document.querySelector('meta[name="csrf-token"]').content;

fetch('/sumi',{
    method:"POST",
    headers:{
        "X-CSRF-TOKEN":furr,
        "Content-Type":"application/json"
    },
 body:JSON.stringify({set:set})
})
.then(res=>res.json())
.then(data=>{
    document.getElementById("result").innerText=JSON.stringify(data);
});


});

