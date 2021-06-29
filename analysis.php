


<div class="container table-responsive py-5">
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Query</th>
      <th scope="col">Data</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Threat Level of the website </td>
      <td>
        <?php
        if(isset($tl)){
          echo "$tl% ";
        }else {
          echo "-";
        }

      ?>
    </td>

    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Number of reports on the website </td>
      <td><?php if(isset($rc)){
        echo "$rc ";
      }else {
        echo "-";
      } ?></td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>ISP details of the website </td>
      <td><?php if(isset($isp)){
        echo "$isp ";
      }else {
        echo "-";
      }
      ?></td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Country code of the Website </td>
      <td><?php if(isset($cc)){
        echo "$cc";
      }else {
        echo "-";
      }  ?></td>

    </tr>


  </tbody>
</table>
</div>
