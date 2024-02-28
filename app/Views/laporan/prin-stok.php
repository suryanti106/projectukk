<!DOCTYPE html> 
<head>

</head>
<body>
<table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Produk</th>
                          <th>Harga Beli</th>
                          <th>Harga Jual</th>
                          <th>Stok</th>
                          <!-- <th style="text-align: center;">Aksi</th> -->
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        if(isset($listProduk)) :
                            $no = 0; // inisialisasi nomor
                            foreach($listProduk as $baris) :
                                $no++;
                        ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $baris->nama_produk ?></td>
                                    <td><?= $baris->harga_beli ?></td>
                                    <td><?= $baris->harga_jual ?></td>
                                    <td><?= $baris->stok ?></td>
                                </tr>
                        <?php
                            endforeach;    
                        endif;
                        ?>

                        </tbody>
                    </table>
                    <!-- end table -->
                    </body>
</html>

                