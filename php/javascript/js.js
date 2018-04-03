$(document).ready(cargarPagina);

function cargarPagina(){

    $("#boton-submit").click(function(){

        jugar();

        var op1=document.getElementById("seleccion");
        var valorop1=op1.options[op1.selectedIndex].text;
        console.log(valorop1);
        var op2=document.getElementById("seleccion2");
        var valorop2=op2.options[op2.selectedIndex].text;
        console.log(valorop2);

        if(valorop1=="Selecciona Opcion Jugador" && valorop2=="Selecciona Opcion Jugador"){
            console.log("ERROR");
        }else{
            $("#formulario").submit();
        }
    })


    function jugar(){
        var jugador1=document.getElementById("seleccion");
        var valor1=jugador1.options[jugador1.selectedIndex].text;
        console.log(valor1);

        var jugador2=document.getElementById("seleccion2");
        var valor2=jugador2.options[jugador2.selectedIndex].text;
        console.log(valor2);

        var espacioinput=$("#ganador");

        var contador1=0;
        var contador2=0;
        var otrojugador1=$("#contador1");
        var otrojugador2=$("#contador2");


        if(valor1=="piedra" && valor2=="tijeras"){
            console.log("ganador jugador 1");
            espacioinput.attr("value","1");
            contador1++;
            otrojugador1.html(contador1);

        }else if(valor1=="papel" && valor2=="piedra"){
            console.log("ganador jugador 1");
            espacioinput.attr("value","1");
            contador1++;
            otrojugador1.html(contador1);

        }else if(valor1=="tijeras" && valor2=="papel"){
            console.log("ganador jugador 1");
            espacioinput.attr("value","1");
            contador1++;
            otrojugador1.html(contador1)

        }else if(valor1=="tijeras" && valor2=="piedra"){
            console.log("ganador jugador 2");
            espacioinput.attr("value","2");
            contador2++;
            otrojugador2.html(contador2);

        }else if(valor1=="papel" && valor2=="tijeras"){
            console.log("ganador jugador 2");
            espacioinput.attr("value","2");
            contador2++;
            otrojugador2.html(contador2);

        }else if(valor1=="piedra" && valor2=="papel"){
            console.log("ganador jugador 2");
            espacioinput.attr("value","2");
            contador2++;
            otrojugador2.html(contador2);

        }
        else if(valor1==valor2){
            console.log("empate");
            espacioinput.attr("value","0");
        }
    };             

    $("#seleccion2").change(function(){
        var valor_seccion=$(this).find('option:selected').attr("name");
        console.log(valor_seccion);
        if(valor_seccion=="piedra2"){
            $("#luigi").attr("src","img/reaccion1.png");
        }else if(valor_seccion=="papel2"){
            $("#luigi").attr("src","img/reaccion2.png");
        }else if(valor_seccion=="tijeras2"){
            $("#luigi").attr("src","img/reaccion3.png");
        }else if(valor_seccion=="opcion2"){
            $("#luigi").attr("src","img/luigi.png")
        }
    })

    $("#seleccion").change(function(){
        var valor_seccion=$(this).find('option:selected').attr("name");
        console.log(valor_seccion);
        if(valor_seccion=="piedra"){
            $("#mario").attr("src","img/reaccion1.png");
        }else if(valor_seccion=="papel"){
            $("#mario").attr("src","img/reaccion2.png");
        }else if(valor_seccion=="tijeras"){
            $("#mario").attr("src","img/reaccion3.png");
        }else if(valor_seccion=="opcion"){
            $("#mario").attr("src","img/mario.png")
        }
    })

}