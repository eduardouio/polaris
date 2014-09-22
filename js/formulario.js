function send(id_form) {
    $.ajax({
        type: "POST",
        url: $("#"+id_form).attr("action"),
        data: $("#"+id_form).serializeArray(),
        dataType: "json",
        success: function(data) {
            registros = data.data;
            var retorno = ""
            for (row in registros) {
                retorno += "<tr>"
                for (item in registros[row]) {
                    retorno += "<td>"+registros[row][item]+"</td>";
                }
                retorno += "</tr>"            
            $('#action_rst span').remove();
            $('#action_rst').append("<span>Action: "+data.action+"</span>")
            $('#len_rst span').remove();
            $('#len_rst').append("<span>Cantidad: "+(data.data.length - 1)+"</span>")
            $('#tb_rst tr').remove();
            $('#tb_rst').append(retorno);
        },
        error: function(){
            alert('Error');
        }
    });
}