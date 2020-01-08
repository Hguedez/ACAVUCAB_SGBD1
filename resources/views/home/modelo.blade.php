<html>
<head>
   <meta charset="utf-8">
   <title>ACAVUCAB</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <script>
      $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });
    </script>
</head>
<body>
   <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <h3>Se Cancelo el proceso</h3>
           </div>
           <div class="modal-body">
              <h4>Se ha cancelado su compra</h4>
              Procedera a ir al menu de eventos nuevamente.
       </div>
           <div class="modal-footer">
           <a href="/eventos/{{$correo}}/funciona" class="btn btn-danger">Ir</a>
           </div>
      </div>
   </div>
</div>
</body>
</html>