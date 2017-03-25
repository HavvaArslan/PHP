<?php
if(isset($_SESSION["kullanici"]))
{



?>



<div class=" btn-warning col-md-6" style="margin-left:2%;margin-top:2% ">
            <div class="box-header with-border">
              <h3 class="box-title"><font color="#FFFFFF">Hakkımızda Bilgileri Formu</font></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="?sayfa=8" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">E-Mail</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="mail" id="inputEmail3" placeholder="Email" value="<?=$mail?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Şifre</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="sifre" id="inputPassword3" placeholder="Password" value="<?=$sifre?>">
                  </div>
                </div>                
              </div>
              <!-- /.box-body -->
              <div class="box-footer btn-warning">
                
                <button type="submit" class="btn btn-success pull-right">Bilgileri Güncelle</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          
 <?php
}
else
{
	@header("location:index.php");
}
?>