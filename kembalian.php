<?php  ?>
<tr>
<form method="post" action="data.php"></form>
<td align="center" colspan="6"><b>total pembayaran</b></td>
</tr>
<?php
$a= array_sum($habar);
if ($hsl >= 500){
    $dsk = 0.2*$a;
    $ttl = $a-$dsk;
} if ($key >= 250){
    $dsk = 0.1*$a;
} if ($key >= 150){
    $dsk = 0.05*$a;
}
?>



<!-- footer -->
<!-- end footer -->

<!-- js first, then popper,and the last bootstrap JS -->
<script src="/assets/js/jquery.min.js"></script>
<script src= "/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<!-- end js -->


                       <div class="form-group">
                       <label for="">APAKAH ANDA AKAN MELAKUKAN TRANSAKSI LAGI?</label>
</div>

                     <div class="form-group">
                       <button type="button" class="btn btn-info" name="iya">YA</button>
                       <button type="button" class="btn btn-danger" name="tida">TIDAK</button><br><br>
            </div> 
</body>