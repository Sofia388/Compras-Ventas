
  {include file="Cabeceras/Header.tpl"}  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Clientes</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?Controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?Controller=User&method=Compra">Regresar</a></li>
      </ul>
    </div>
  </nav>
  
  <form method="post" action="?Controller=User&method=CrearCodigop" class="col s12  center aling">
    <h1>Crear codigo de Proveedor</h1>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="pro" type="text" class="validate" name="pro" requiered=""/>
          <label for="pro">Nombre del Proveedor</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="codi" type="text" class="validate" name="codi" required=""/>
     <label for="codi">Codigo del Proveedor</label>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>


 <table>
     <thead>
       <tr>
         <td>Codigo del Proveedor</td>
         <td>Nombre del Proveedor</td>
       </tr>
     </thead>



     {foreach from=$cliente item=$slv}



    <tbody>
      <tr>
         <td>{$slv['Codigo']}</td>
         <td>{$slv['Proveedores']}</td>
      </tr>
    </tbody>



    {/foreach}

</table>