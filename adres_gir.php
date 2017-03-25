
<?php
if(@mysql_num_rows(@mysql_query("select * from iletisim "))>0)
{
$sorgularabak = @mysql_query("select * from iletisim ");
while($sorgu =@mysql_fetch_assoc($sorgularabak))
{
	$adres = $sorgu["adres"];
	$tel = $sorgu["telefon"];
	$lat = $sorgu["lat"];
	$longitu = $sorgu["longitu"];
}
}
else
{
	$adres="";
	$tel="";
	$lat="";
	$longitu="";
}

?>




<div class="example-modal">
        <div class="modal modal-danger">
          <div class="modal-dialog col-sm-12">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">ADRES BİLGİLERİ GÜNCELLE</h4>
              </div>
              <div class="modal-body">
                <div class="box box-danger">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="adres_gir_sonuc.php" method="post">
              <div class="box-body btn-danger">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" >Adres</label>

                  <div class="col-sm-10">
					<textarea class="form-control" rows="3" placeholder="Enter ..." name="yeniadres" required="required"><?=$adres?></textarea>
                </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Telefon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Telefon Bilgisini Gir..." name="telefon" value="<?=$tel?>" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Lat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Harita Latitute Gir..." name="lat" value="<?=$lat?>" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Long</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Harita Long Gir...." name="long" value="<?=$longitu?>" required="required">
                  </div>
                </div>
                
 
              </div>
              <!-- /.box-body -->
              <div class="box-footer btn-danger">
                
                <button type="submit" class="btn btn-outline pull-right">Bilgileri Güncelle</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
                
                
              </div>
              <div class="modal-footer">
                
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>