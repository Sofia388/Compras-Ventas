{include file="Cabeceras/Header.tpl"}  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Bonificaciones</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?Controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?Controller=User&method=RegresoJefe">Regresar</a></li>
      </ul>
    </div>
  </nav>

  
  <form method="post" action="?Controller=User&method=CrearBoni" class="col s12  center aling">
    <h5>Crear Codigo Personal</h5>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="codUsBoni" type="text" class="validate" name="codUsBoni" required=""/>
          <label for="codUsBoni">Codigo del Usuario</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="valboni" name="valboni" class="validate" requiered=""/>
     <label for="valboni">Valor de la Bonificacion</label>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

  
{include file="Cabeceras/Footer.tpl"}