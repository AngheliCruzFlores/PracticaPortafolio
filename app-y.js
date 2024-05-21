//funciòn que carga las animaciones de las habilidades
function cargarAnimaciones(){
    $(function(){
        $('.chart1').easyPieChart({
            size:160,
            barColor:"#1143cf",
            scaleLength:0,
            lineWidth:15,
            tackColor:"#8f41f0",
            lineCap:"circle",
            animate:2000,
        });
        $('.chart2').easyPieChart({
            size:160,
            barColor:"#1143cf",
            scaleLength:0,
            lineWidth:15,
            tackColor:"#8f41f0",
            lineCap:"circle",
            animate:2000,
        });
        $('.chart3').easyPieChart({
            size:160,
            barColor:"#1143cf",
            scaleLength:0,
            lineWidth:15,
            tackColor:"#8f41f0",
            lineCap:"circle",
            animate:2000,
        });
        $('.chart4').easyPieChart({
            size:160,
            barColor:"#1143cf",
            scaleLength:0,
            lineWidth:15,
            tackColor:"#8f41f0",
            lineCap:"circle",
            animate:2000,
        });
        $('.chart5').easyPieChart({
            size:160,
            barColor:"#1143cf",
            scaleLength:0,
            lineWidth:15,
            tackColor:"#8f41f0",
            lineCap:"circle",
            animate:2000,
        });
        $('.chart6').easyPieChart({
            size:160,
            barColor:"#1143cf",
            scaleLength:0,
            lineWidth:15,
            tackColor:"#8f41f0",
            lineCap:"circle",
            animate:2000,
        });

    })
}

function responsiveMenu(){
    let x = document.getElementById("nav");
    if(x.className===""){
        x.className = "responsive";

        let span = document.createElement("span");
        span.innerHTML = "X";
        document.getElementById("nav").appendChild(span);

        span.onclick = function(){
            x.className = "";
            span.remove();
        }
    }else{
        x.className="";
    }
}
//const links = document.querySelectorAll("#nav a");
//for(i=0; i < links.length;i++){
  //  links[i].onclick = function(){
    //    var x = document.getElementById("nav");
      //  x.className = "";
        //btnEliminar = document.querySelector("#nav span");
        //btnEliminar.remove();