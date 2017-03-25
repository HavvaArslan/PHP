<?php
if(isset($_SESSION["kullanici"]))
{
	$gelenid = $_GET["id"];
	$bak = @mysql_query("select *  from duyurular where id='$gelenid' LIMIT 1 ");
	$sorgu = @mysql_fetch_assoc($bak);
	$baslik = $sorgu["duyuru_baslik"];
	$icerik = $sorgu["duyuru_icerik"];
	
?>

<div class="example-modal">
        <div class="modal modal-success">
          <div class="modal-dialog col-sm-12">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">DUYURUYU GÜNCELLE</h4>
              </div>
              <div class="modal-body">
                
                <form class="form-horizontal" action="?sayfa=6&id=<?=$gelenid?>" method="post" enctype="multipart/form-data">
              <div class="box-body btn-success">
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Duyuru Başlığı</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control"  placeholder="Duyuru Başlığı Giriniz..." name="duyuru_baslik" value="<?=$baslik?>">
                  </div>
                </div>
                <div class="form-group">
                
                  <label for="inputEmail3" class="col-sm-3 control-label" >Duyuru İçeriği</label>

                  <div class="col-sm-9">
					<textarea class="form-control" rows="3" placeholder="Duyuru İçeriği Giriniz..." name="duyuru_icerigi"><?=$icerik?></textarea>
                </div>
                </div>
                
                 
                </div>
                

              </div>
              <!-- /.box-body -->
              <div class="box-footer btn-success">
                
                <button type="submit" class="btn btn-outline pull-right">Duyuruyu Güncelle</button>
              </div>
              <!-- /.box-footer -->
            </form>
			 </div>
             
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
      <!-- /.example-modal -->
	
<?php
}
else
{
	@header("location:index.php");
}


?>
