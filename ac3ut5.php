<?php

//Datos que determinan los campos a mostrar
$tipos_usuario = ['estudiante', 'profesor', 'administrativo'];
$campos_adicionales = [
    'estudiante' => ['curso', 'matricula'],
    'profesor' => ['departamento', 'horario'],
    'administrativo' => ['area', 'nivel']
];
?>

<form id="formulario" method="POST" action="procesar.php">
    <label for="tipo">Tipo de usuario:</label>
    <select id="tipo" name="tipo">
        <?php foreach ($tipos_usuario as $tipo): ?>
            <option value="<?= $tipo ?>"><?= ucfirst($tipo) ?></option>
        <?php endforeach; ?>
    </select>

    <div id="campos-dinamicos"></div>

    <button type="submit">Enviar</button>
</form>

<script>

    const camposAdicionales = <?= json_encode($campos_adicionales) ?>;
    const tipoSelect = document.getElementById('tipo');
    const camposDinamicos = document.getElementById('campos-dinamicos');

    function generarCampos(tipo){
            camposDinamicos.innerHTML = '';
            if(camposAdicionales[tipo]){
                camposAdicionales[tipo].forEach(campo => {
                    const label = document.createElement('label');
                    label.setAttribute('for', campo);
                    label.textContent = campo.charAt(0).toUpperCase() + campo.slice(1) + ':';

                    const input = document.createElement('input');

                    input.id = campo;
                    input.name = campo;
                    input.type = 'text';
                    input.required = true;

                    /*
                    Sería más correcto usar estos atributos
                    input.setAttribute('type', 'text'); 
                    input.setAttribute('name', campo);
                    input.setAttribute('id', campo);*/                    

                    camposDinamicos.appendChild(label);
                    camposDinamicos.appendChild(input);
                    camposDinamicos.appendChild(document.createElement('br'));
                });
            }
    }

    //Detectar cambio en el select y generar campos correspondientes
    tipoSelect.addEventListener('change',e =>{
        generarCampos(e.target.value)
    });

    //Generar campos iniciales
    generarCampos(tipoSelect.value);

</script>