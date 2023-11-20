<div class = "row justify-content-between">
    <div class = "col-10"><b>produk </b></div>
    <div class = "col-10 d-flex justify-content-end align-items-end">
        <button class = " btn btn-dark btn-sm" type= "button">add</button>
    </div>
</div>

<hr>

<table class = "table table-sm border border-dark">
    <thead class =  "thead-dark">
        <tr>
            <th scope="col" widht = "5%">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga</th>
            <th scope="col">Gambar</th>
            <th scope="col" widht="12%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $que = "SELECT * FROM produk
                JOIN kategori ON produk.id_produk=kategori.id_kategori";
        $select = mysqli_query($con, $que);

        while($data= mysqli_fetch_array($select)){
            ?>
            <tr>
                <th scope="raw"><?php echo $data['id_produk']; ?></th>
                <td><?php echo $data['nama_produk']; ?></td>
                <td><?php echo $data['id_kategori']; ?></td>
                <td><?php echo $data['harga']; ?></td>
                <td><?php echo $data['gambar']; ?></td>
                <td>
                    <button class="btn btn-dark btn-sm" type = "button">edit</button>
                    <button class="btn btn-dark btn-sm" type = "button">delete</button>
                </td>
            </tr>
        <?php }; ?>

    </tbody>
    </table>