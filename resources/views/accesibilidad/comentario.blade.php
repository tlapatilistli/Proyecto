<?php
//index.php

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Comentarios</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/bootstrap.css">
 </head>
 <body>
 <style>body{
    background: #E2E7D2;}.container-fluid {max-height: 100%; max-width:50%; }
        *{ cursor: url("../img/cursordefault.png"), auto;} a{ cursor: url("../img/cursorpointer.png"), auto;} button{cursor: url("../img/cursorpointer.png"), auto;} input,textarea,h1{cursor: url("text.png"), auto;} .menuu{float: right;line-height: 70px; width: 100%; background-color: rgb(135,173,24);}
    .menuu a{text-decoration: none;color: #fff;font-size: 15px;font-weight: bold;display: inline-block;padding: 10px 15px;line-height: normal;transition: all 400ms ease;}
    .menuu a:hover{color: #1c1c1c;background: #fff; }</style>
    <!--  Inicio del  Encabezado-->
    <header class="headerr">
        <div class="wrapp">
            <nav class="menuu">
                <a href="{{route('principal')}}">Regresar</a>
            </nav>
        </div>
    </header>
<!--Fin del Encabezado     -->
  <br /><br><br><br>

  <!--<h2 align="center"><a href="#">Comment System using PHP and Ajax</a></h2>-->
  <h2 align="center">Quejas y Sugerencias</h2></br>
  <br />
    <div class="container-fluid" style="background-color:#DFE8E9">
        <form method="POST" id="comment_form">
            <div class="form-group">
                <h5>Nombre</h5>
                <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="* Nombre" />
            </div>
            <div class="form-group">
                <h5>Comentario</h5>
                <textarea name="comment_content" id="comment_content" class="form-control" placeholder="* Comentario" rows="5"></textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="comment_id" id="comment_id" value="0" />
                <button type="submit" name="submit" id="submit" class="btn btn-success">Agregar</button>
            </div>
        </form>
    </div>
    <div class="container-fluid">
        <span id="comment_message"></span>
        <br />
        <div id="display_comment"></div>
    </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"../archivos/add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"../archivos/fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>