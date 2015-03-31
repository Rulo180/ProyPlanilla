function agregarNota(){
    //Mi idea seria buscar la 1era fila de la tabla para copiarla
    //Dsps agregar esa copia de la 1era fila al final de la tabla
    var filaVacia = $("tablaNotas").first("nota0");
    $("tablaNotas").append(filaVacia);
}

function borrarNota(){
    //La idea aca seria borrar la fila a la que pertenece el boton que se toco
    
}

//Ejemplo que encontre en internet

var lastRow=0;
	
	function agregarNota() {
		lastRow++;
		$("#mytable tbody>tr:#nota0").clone(true).attr('id','nota'+lastRow).removeAttr('style').insertBefore("#mytable tbody>tr:#trAdd");
		$("#nota"+lastRow+" button").attr('onclick','borrarNota('+lastRow+')');
		$("#nota"+lastRow+" input:first").attr('name','data[Nota]['+lastRow+'][alumno_id]').attr('id','alumno_id'+lastRow);
		$("#nota"+lastRow+" input:eq(1)").attr('name','data[Nota]['+lastRow+'][valor_nota]').attr('id','valor_nota'+lastRow);
		$("#nota"+lastRow+" input:eq(2)").attr('name','data[Nota]['+lastRow+'][tipo_nota_id]').attr('id','tipo_nota_id'+lastRow);
	}
	
	function borrarNota(x) {
		$("#nota"+x).remove();
	}


