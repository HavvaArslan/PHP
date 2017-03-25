
<?php
if(@mysql_num_rows(@mysql_query("select * from hakkimizda "))>0)
{
$sorgularabak = @mysql_query("select * from hakkimizda ");
while($sorgu =@mysql_fetch_assoc($sorgularabak))
{
	$adres = $sorgu["yazi"];
	$tel = $sorgu["firma_ismi"];
	$lat = $sorgu["imza"];
	
}
}
else
{
	$adres="";
	$tel="";
	$lat="";
}

?>




<div class="example-modal">
        <div class="modal modal-danger">
          <div class="modal-dialog col-sm-12">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Şirket Bilgisi Ekleme Formu</h4>
              </div>
              <div class="modal-body">
                <div class="box box-danger">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="?sayfa=22" method="post">
              <div class="box-body btn-danger">
               
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Şirket İsmi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Şirket İsmini Giriniz..." name="telefon" value="<?=$tel?>" required="required">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" >Şirket Hakkında</label>

                  <div class="col-sm-10">
					<textarea class="form-control" rows="3" placeholder="Şirket Hakkında Genel Bilgileri Yazınız..." name="yeniadres" required="required"><?=$adres?></textarea>
                </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Şirket İmzası</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Şirket İmzası Giriniz... Örnek  A.Ş" name="lat" value="<?=$lat?>" required="required">
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