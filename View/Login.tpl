{include file="Cabeceras/Header.tpl"}

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"> Inicio</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?Controller=User&method=Regreso">Regresar</a></li>
        <li><a href="?Controller=User&method=IrRegistro">Registro</a></li>
      </ul>
    </div>
  </nav>


<div>
    <h1 align="center">Login</h1>
</div>
    <div class="row">
    <form  method="post" action="?Controller=User&method=BuscarUser" class="col s12">

       <div class="row" >
        <div class="input-field col s6 s2 row offset-s2 center aling" >
          <input id="idUsuario" type="text" class="validate" name="idUsuario" required=""/>
          <label for="idUsuario">Usuario</label>
        </div>
    </div>

      <div class="row" class="center-align">
         <div class="input-field col s6 row offset-s2 center aling">
             <input id="Depto_idDepto" type="text" class="validate" name="pass" required=""/>
             <label for="Depto_idDepto">Password</label>
            </div>
      </div>

      <div class="row" class="center-align">
            <div class="input-field col s6 row offset-s2 center aling">
                <input class="btn waves-effect waves-light" type="submit" name="action"/>
            </div>
      </div>

    </form>

</div>


{include file="Cabeceras/Footer.tpl"}