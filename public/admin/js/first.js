let nee=
document.getElementById("first");

let gee=
document.getElementById("firs");
 

nee.addEventListener("submit",function(e){
    e.preventDefault();
let dee= gee.value;
if(dee===""){
    document.getElementById("result").innerText="name is required";
    return;
}



if(dee.length<3){
   alert("atleast 3 char");
    return;
}

const cee=
document.querySelector('meta[name="csrf-token"]').content;
fetch('/submi',{
    method:"POST",
    headers:{
        "X-CSRF-TOKEN":cee,
        "content-type":"application/json"

    },

    body:JSON.stringify({dee:dee})

    })
.then(response=>response.json())
.then(data=>{
    document.getElementById("result").innerText=JSON.stringify(data)+"form Submitted"

});

});



