{include file="Cabeceras/Header.tpl"}
    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Sueldos</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?controller=User&method=RegresoJefe">Regresar</a></li>
      </ul>
    </div>
  </nav>

    <form method="post" action="?controller=User&method=Pagosueldo" class="col s12  center aling">
    <h5>Subir el Sueldo de los Empleados de Administracion</h5>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="codigoUser" type="text" class="validate" name="codigoUser" required=""/>
          <label for="codigoUser">Codigo del Usuario</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="fechapago" type="data" class="validate" name="fechapago" required=""/>
          <label for="fechapago">Fecha del Pago</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="horapago" type="text" class="validate" name="horapago" required=""/>
          <label for="horapago">Hora del Pago</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="nocheque" type="text" class="validate" name="nocheque" required=""/>
          <label for="nocheque">Número del Cheque</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="valcheque" type="text" class="validate" name="valcheque" required=""/>
          <label for="valcheque">Valor del Cheque</label>
        </div>
    </div>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

{include file="Cabeceras/Footer.tpl"}