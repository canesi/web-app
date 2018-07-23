function getContactos(){
  var id_cliente = document.getElementById("cliente").value;
  var conexion;
  if(id_cliente==""){
    document.getElementById("error").innerHTML = "debe seleccionar un cliente";
    document.getElementById("registros").innerHTML = "";
  }else{
    document.getElementById("error").innerHTML = "";
    //document.getElementById("error").innerHTML = "id cliente seleccionado "+id_cliente;
    if(window.XMLHttpRequest){
      conexion = new XMLHttpRequest();
    }else{
      conexion = new ActivXObject("Microsoft.XMLHttp");
    }
    conexion.onreadystatechange = function(){
      if(conexion.readyState == 4 && conexion.status == 200){
        document.getElementById("registros").innerHTML = this.responseText;
      }
    }
    //preparar la Conexion
    //conexion.open("GET","/ajax/buscar_contacto.php?id_cliente="+id_cliente,true);
    conexion.open("GET","js/buscar_contacto.php?id_cliente="+id_cliente,true);
    //enviar la peticion
    conexion.send();
  }//else
}//end function
