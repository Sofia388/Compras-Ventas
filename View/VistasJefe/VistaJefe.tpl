
{include file="Cabeceras/Header.tpl"}  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Bienvenido Jefe</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?Controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?Controller=User&method=RegresoJefe">Regresar</a></li>
      </ul>
    </div>
  </nav>

    <form method="post" action="?Controller=User&method=Compras" class="col s12  center aling">
        <h5>Compras</h5>
        <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
    </form>

   
    <form method="post" action="?Controller=User&method=Ventas" class="col s12  center aling">
        <h5>Ventas</h5>
        <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
    </form>




{include file="Cabeceras/Footer.tpl"}