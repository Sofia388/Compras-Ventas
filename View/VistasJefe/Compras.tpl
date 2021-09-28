{include file="Cabeceras/Header.tpl"}
    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">cvalladares</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?Controller=User&method=Proveedores">Proveedores</a></li>
        <li><a href="?Controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?Controller=User&method=RegresoJefe">Regresar</a></li>
      </ul>
    </div>
  </nav>

    <form method="post" action="?Controller=User&method=Pagocompra" class="col s12  center aling">
    <h1>Compras de ZES Corporation</h1>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="Proveedores" type="text" class="validate" name="Proveedores" required=""/>
          <label for="Proveedores">Codigo de Proveedores</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="fechapago" type="date" class="validate" name="fechapago" required=""/>
          <label for="fechapago">Fecha de Compra</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="horapago" type="time" class="validate" name="horapago" required=""/>
          <label for="horapago">Hora de la Compra</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="nocheque" type="text" class="validate" name="nocheque" required=""/>
          <label for="nocheque">Numero del Cheque o nota de credito</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="valcheque" type="text" class="validate" name="valcheque" required=""/>
          <label for="valcheque">Valor del Cheque o nota de credito</label>
        </div>
    </div>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

{include file="Cabeceras/Footer.tpl"}