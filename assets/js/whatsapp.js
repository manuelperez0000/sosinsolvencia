
function wsa(){
    //alert("Click ws");
    var ws = document.getElementById("wrap-ws-f");
    ws.innerHTML = `<div class="card text-white mb-3"   style="max-width: 18rem;">
    <div class="card-header bg-success">
         Whatsapp
        <button  onclick="cerrarWs()" type="button" class="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="card-body">
        <h4 class="text-dark">Hola</h4>
      <p class="card-text text-dark"> ¿En que podemos ayudarte?</p>
    </div>
    <div class="card-footer">
    <form action="ayuda.php" method="POST">
        <input type="text" class="form-control mb-2" id="ayuda" name="ayuda" placeholder="Escriba aqui...">
        
        <input type="submit" class="btn-success btn" value="Enviar">
    </form>
    </div>
  </div>`;
  }

  function cerrarWs(){
     // alert("Ws cerrado");
     var ws = document.getElementById("wrap-ws-f");
      ws.innerHTML = ``;
  }