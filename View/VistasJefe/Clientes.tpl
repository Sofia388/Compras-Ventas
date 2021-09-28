
  {include file="Cabeceras/Header.tpl"}  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Clientes</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?Controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?Controller=User&method=Venta">Regresar</a></li>
      </ul>
    </div>
  </nav>
  
  <form method="post" action="?Controller=User&method=CrearCodigo" class="col s12  center aling">
    <h1>Crear codigo de Cliente</h1>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="cli" type="text" class="validate" name="cli" requiered=""/>
          <label for="cli">Nombre del Cliente</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="cod" type="text" class="validate" name="cod" required=""/>
     <label for="cod">Codigo del Cliente</label>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>


 <table>
     <thead>
       <tr>
         <td>Codigo del Cliente</td>
         <td>Nombre del Cliente</td>
       </tr>
     </thead>


     
     {foreach from=$cliente item=$slv}



    <tbody>
      <tr>
         <td>{$slv['Codigo']}</td>
         <td>{$slv['Cliente']}</td>
      </tr>
    </tbody>



    {/foreach}

</table>







  