<h1>Coba Tes</h1>

<?php
if($page=='Coba Tes'){
 ?>
 <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 text-center">
     <a href="<?php echo base_url('tesc/mulai/1')?>"><span class="w3-center w3-jumbo glyphicon glyphicon-play"><h2>Mulai Tes </h2></span></a>
   </div>
 </div>
<?php
}else if($page=='Mulai'){
?>
<h1>#nosoal</h1>
  <div class="row text-center">
  <h2>Soal</h2>

  <?php foreach ($datasoal as $ds){ ?>
  <div class="" id="soal">
  <h2><?php echo $ds->soal;?></h2>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-4 col-lg-offset-4" id="jawab">
    <?php form_open('tesc/cek') ?>
      <input class="btn btn-block w3-xlarge" type="button" name="opsi1" value="<?php echo $ds->opsia;?>">
      <input class="btn btn-block w3-xlarge" type="button" name="opsi2" value="<?php echo $ds->opsib;?>">
      <input class="btn btn-block w3-xlarge" type="button" name="opsi3" value="<?php echo $ds->opsic;?>">
      <input class="btn btn-block w3-xlarge" type="button" name="opsi4" value="<?php echo $ds->opsid;?>">
      <input type="hidden" name="soalplus" value="1">
      <input type="submit" name="submit" value="Next">
    </form>
  </div>
  <?php }?>
  </div>
<?php
}
?>
