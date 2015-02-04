<?php 
echo $content['pregunta'];
//echo $content['respuesta'].'<br>';


echo '<input class="form-control" name="myField" id="myField" placeholder=Respuesta... style= "width: 200px"/>
      <br><br>
      <button class="btn btn-primary" id="submit_">Responder</button>
      <br><br>
      <div id="resp"></div> <!-- div para el ajax_response -->';


echo '<br>';

?>

<div id="answer" style="font-size:12pt;" font-family:  style="'Lucida Grande', Helvetica, Arial, sans-serif;"></div>

<script type="text/javascript">
    
  $("#submit_").click(function() { 

    var t = document.getElementsByName("myField")[0].value;

    t = t.trim();

    var myvar = <?php echo json_encode($content['respuesta']); ?>;


    if( myvar.toLowerCase() == t.toLowerCase() ){

        var salida = 'Muy Bien!! :)';
        document.getElementById('answer').innerHTML = salida.fontcolor("green");

    }else{
        var salida = 'No ;( ';

        
        document.getElementById('answer').innerHTML = salida.fontcolor("red");
        
    }


 });

</script>

  