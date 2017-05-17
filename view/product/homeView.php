
        <!-- page content -->
        <div class="col-md-9">
          <div class="well pageContent" position="center">
            <table class="table table-bordered">
              <thead>
              <tr>
                <th>Product</th>
                <th>Description</th>
                <th>Price</th>
              </tr>
            </thead>
              <tbody>
<?php
// if there are products
            if (isset($products)) {

              foreach($products as $key => $product){
?>
              <tr>
                <td><?php print $product['name'];?></td>
                <td><?php print $product['description'];?></td>
                <td><?php print $product['cost'];?></td>


              </tr>
<?php

              }
            }
?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- end page content -->
