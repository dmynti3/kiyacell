<?php
    if(isset($_POST['hitung'])){
        $kode_transaksi   =$_POST['kode_transaksi'];
        $id_pulsa    =$_POST['har'];
        $qty    =$_POST['qty'];
        $total    =$harga*$qty;
        echo "
            <table border='1' cellpadding='4'>
                <tr>
                    <td>Nama Barang</td>
                    <td>Harga</td>
                    <td>Banyaknya</td>
                    <td>Total Harga</td>
                </tr>
                <tr>
                    <td>$nama</td>
                    <td align='right'>";echo number_format($harga,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($qty,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($total,0,',','.');echo "</td>
                </tr>
            </table>
        ";
    }
?>