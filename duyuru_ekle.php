<div class="example-modal col-sm-12">
        <div class="modal modal-success">
          <div class="modal-dialog col-sm-12">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">YENİ DUYURU YAYINLA</h4>
              </div>
              <div class="modal-body">
                
                <form class="form-horizontal" action="duyuru_ekle_sonuc.php" method="post" enctype="multipart/form-data">
              <div class="box-body btn-success">
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Duyuru Başlığı</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control"  placeholder="Duyuru Başlığı Giriniz..." name="duyuru_baslik" required="required">
                  </div>
                </div>
                <div class="form-group">
                
                  <label for="inputEmail3" class="col-sm-3 control-label" >Duyuru İçeriği</label>

                  <div class="col-sm-9">
					<textarea class="form-control" rows="3" placeholder="Duyuru İçeriği Giriniz..." name="duyuru_icerigi" required="required"></textarea>
                </div>
                </div>
                
                 <div class="form-group">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
      			
                  <input type="file" id="exampleInputFile"  name="resim" required="required">
                  <p class="help-block" style="color:#FFF">Duyuru Resmini Seçiniz</p>
                  </div>
                </div>
                </div>
                

              </div>
              <!-- /.box-body -->
              <div class="box-footer btn-success">
                
                <button type="submit" class="btn btn-outline pull-right">Duyuru Yayınla</button>
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