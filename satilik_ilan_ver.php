<?php
if(isset($_SESSION["kullanici"]))
{
?>


<div class="box box-warning" style="margin-right:3%">
            <div class="box-header with-border">
              <h3 class="box-title">Satılık İlan Ver</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="?sayfa=10" method="post" enctype="multipart/form-data">  
                <!-- input states -->
                <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>İlan Başlığı Giriniz...</label>
                  <input type="text" class="form-control" id="inputSuccess" placeholder="İlan Başlığı Giriniz..." name="baslik" required>
                  <span class="help-block">Bu Alana Yayınlamak İstediğiniz İlana Ait İlan Başlığı Girilmesi Gerekmektedir...</span>
                </div>
                 <div class="form-group has-success">
                  <label class="control-label" for="inputError"><i class="fa fa-check"></i>İş Makinesi Türünü Giriniz...</label>
                  <input type="text" class="form-control" id="inputError" placeholder="Bu Alana İş Makinenizin Türünü Girmelisiniz ... ÖRNEĞİN : DOZER , SİLİNDİR , vb..." name="tur" required>
                  <span class="help-block">Bu Alana İş Makinenizin Türünü Girilmelidir...</span>
                </div>
                
                 <div class="form-group has-success">
                  <label class="control-label" for="inputError"><i class="fa fa-check"></i>İş Makinenizin Fiyatını Giriniz...</label>
                  <input type="text" class="form-control" id="inputError" placeholder="Bu Alana İş Makinenizin Fiyatını Giriniz..." name="fiyat" required>
                  <span class="help-block">Bu Alana İş Makinenizin Fiyatını Girilmelidir...</span>
                </div>
                
                
                 <div class="form-group has-success">
                  <label class="control-label" for="inputError"><i class="fa fa-check"></i>İş Makinenizin Markasını Giriniz...</label>
                  <input type="text" class="form-control" id="inputError" placeholder="Bu Alana İş Makinenizin Çalışma Saatini Giriniz..." name="marka" required>
                  <span class="help-block">Bu Alana İş Makinenizin Markası Girilmelidir...</span>
                </div>
                
                <div class="form-group has-success">
                  <label><i class="fa fa-check"></i>Model Yılını Seçiniz...</label>
                  <select multiple class="form-control" name="yil" required>
                  <?php
				  		for($i=1950;$i<2100;$i++)
						{
				  ?>
                    <option name="<?=$i?>" value="<?=$i?>"><?=$i?></option>
                  <?php
						}
				  ?> 
                  </select>
                </div>
                
                <div class="form-group has-success">
                  <label class="control-label" for="inputError"><i class="fa fa-check"></i>İş Makinenizin Çalışma Saatini Giriniz...</label>
                  <input type="text" class="form-control" id="inputError" placeholder="Bu Alana İş Makinenizin Çalışma Saatini Giriniz..." name="saat" required>
                  <span class="help-block">Bu Alana İş Makinenizin Çalışma Saatini Giriniz...</span>
                </div>
                
                   <!-- textarea -->
                <div class="form-group has-success">
                  <label><i class="fa fa-check"></i>İlana Ait Detay Giriniz</label>
                  <textarea class="form-control" rows="3" placeholder="İlana Ait Detay Giriniz... Örneğin makinenin üzerinde herhangi bir hasar yoktur...." name="detay" required></textarea>
                </div>
                <div class="form-group has-success">
                  <label for="exampleInputFile">1. Resmi Seçiniz...</label>
                  <input type="file" id="exampleInputFile" name="resim1" required>

                  <p class="help-block">1. Resmi Seçiniz...</p>
                </div>
                <div class="form-group has-success">
                  <label for="exampleInputFile">2.Resmi Seçiniz...</label>
                  <input type="file" id="exampleInputFile" name="resim2" >

                  <p class="help-block">2.Resmi Seçiniz...</p>
                </div>
                <div class="form-group has-success">
                  <label for="exampleInputFile">3.Resmi Seçiniz...</label>
                  <input type="file" id="exampleInputFile" name="resim3" >

                  <p class="help-block ">3.Resmi Seçiniz...</p>
                </div>
                <div class="form-group has-success">
                  <label for="exampleInputFile">4.Resmi Seçiniz...</label>
                  <input type="file" id="exampleInputFile" name="resim4" >

                  <p class="help-block">4.Resmi Seçiniz...</p>
                </div>
                
                
                
                
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-success"><i class="fa fa-search"> </i> İlanı Yayınla
                </button>
              </span>
              

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->





<?Php
}
else
{
	@header("location:index.php");
}




?>