<?php echo $this->element('barra-usuario'); ?>
<br>
<br>


<div class="input-group"> <span class="input-group-addon">Filtrar</span>

    <input id="filter" type="text" class="form-control" placeholder="Type here...">
</div>
<table class="table table table-hover">
    <thead>
        <tr>
            <th>Palabra</th>
            <th>Traduccion</th>
            <th>Libro o Nota</th>
            <th>Orden</th>
            <th>Nivel dificultad</th>
            <th>Idioma</th>

        </tr>
    </thead>
    <tbody class="searchable">

     <?php foreach( $palabras as $palabra ): ?>
        <tr>
            <td><?php echo $palabra['Word']['word']?></td>
            <td><?php echo $palabra['Word']['traduction']?></td>
            <td><?php echo $palabra['Word']['book']?></td>
            <td><?php echo $palabra['Word']['order']?></td>
            <td><?php echo $palabra['Word']['level']?></td>
            <td><?php echo $palabra['Word']['language']?></td>

        </tr>

<?php endforeach; ?>
    </tbody>
</table>
