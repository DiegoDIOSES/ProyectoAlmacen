function selectData(respuesta = '') {
    console.log(respuesta)
    const obj = {
        accion: 'tabla_permisos'
    }
    if(respuesta != ''){
        obj['type'] = respuesta.type
        obj['valor'] = respuesta.valor
        obj['forma'] = respuesta.forma
    }
   
    $.post('../../includes/_functions.php', obj, function(response){
       
       console.log(response);
        let html = ``;
        $("#toptex").html(html);
        if(response == "error"){
            html += `
            <div class="alert alert-warning" role="alert">
                        No se encontro su registro  <strong>"${obj.valor}"</strong>
                    </div>`
                    $("#toptex").html(html);
        }
        else {
        response.map(function(i){
     datosTabla = i;
            html += `    
            <tr>
            <td>${datosTabla.id}</td>
            <td>${datosTabla.rango}</td>
            <td>${datosTabla.status}</td>
            <td>${datosTabla.fecha}</td>
            <td>
                        <a  href="#" data-id="${datosTabla.id}" class="editar">
                        <div">
                        Editar
                        </div>
                        </a>
                        <a>|</a>
                        <a href="#" data-id="${datosTabla.id}" class="eliminar">
                        <div">
                        Eliminar
                        </div>
                        </a>
                        </td>
            </tr>
  
`
        })
        $("#table-data tbody").html(html);
     }}, 'JSON');
  }
  $(document).ready(function(){
    selectData();
    $('#table-data').on('click', '.editar', function(e){
        e.preventDefault()
        const id = $(this).data('id')
        const confirmacion = confirm('¿Desea editar el registro?')
        $('#showform').trigger('click')
        $('#btnSubmit').text('editar').data('editar', id)
        
        let formularioDatos = new FormData()
        formularioDatos.append('accion', 'editar_form_permiso')
        formularioDatos.append('id', id)
        if(confirmacion){
            fetch('../../includes/_functions.php', {
                method: 'POST',
                body: formularioDatos
        })
        .then((res) => res.json())
        .then((response) => {
            $('#nombre').val(response.nombre);
            $('#descripcion').val(response.descripcion);
            $('#color').val(response.color);
            $('#cantidad').val(response.cantidad);
            $('#categorias').val(response.categorias);
            console.log(response)})
        }
        })
    $('#table-data').on('click', '.eliminar', function(e){
        e.preventDefault()
        const id = $(this).data('id')
      
       const confirmacion = confirm('¿Desea eliminar el registro? (tambien se eliminaran los usuarios que tengan ese permiso)')
    
       let formularioDatos = new FormData()
       formularioDatos.append('accion', 'permisos_eliminar')
       formularioDatos.append('id', id)
    
       if (confirmacion) {
          fetch('../../includes/_functions.php', {
          method: 'POST',
          body: formularioDatos
          
       }) 
       .then((res) => res.json())
       .then((response) => {alert(`${response.tittle}:${response.text}`)
    })
       
    } 
    selectData()  
    })

  })
