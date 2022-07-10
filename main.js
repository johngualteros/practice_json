const container=document.getElementById("container");
async function getData(){
    const response = await fetch("http://127.0.0.1:5500/data.json");
    const data = await response.json();
    return console.log(data);
}

getData();