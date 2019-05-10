<?php
$centro = (new ctrCentro)->ctrVerCentro();
?>
<div class="content-wrapper">
  <br>
  <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="th-sm">Clientes</th>
        <th class="th-sm">Centro</th>
        <th class="th-sm">Grupos</th>
        <th class="th-sm">Latitud</th>
        <th class="th-sm">Longitud</th>
        <th class="th-sm">Zona Geográfica</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($centro as $key => $value) {
        echo '<tr>';
          echo '<td><a href="cliente?idCliente='.$value["id_cliente"].'">'.$value["nombre_cliente"].'</a></td>';
          echo '<td>'.$value["nom_centro"].'</td>';
          echo '<td>'.$value["dir_centro"].'</td>';
          echo '<td>'.$value["lat_centro"].'</td>';
          echo '<td>'.$value["lon_centro"].'</td>';
          echo '<td>'.$value["dir_centro"].'</td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
  <br><br> 
</div>
