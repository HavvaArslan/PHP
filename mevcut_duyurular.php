<?php
if(isset($_SESSION["kullanici"]))
{
	$sayfalama = @$_GET["sayfalama"];
	if(!$sayfalama)
	{
		$sayfalama=1;
	}
	$kayitsayisi = @mysql_num_rows(@mysql_query("select * from duyurular "));
	$sayfadakikayitsayisi = 6;
	$baslanacakkayit = ($sayfalama*$sayfadakikayitsayisi)-$sayfadakikayitsayisi;
	$toplamsafasayisi = @ceil($kayitsayisi/$sayfadakikayitsayisi);
	
	
	
	$bak = @mysql_query("select * from duyurular LIMIT $baslanacakkayit,$sayfadakikayitsayisi");
	while($tambak=@mysql_fetch_assoc($bak))
	{
		$id = $tambak["id"];
		$baslik = $tambak["duyuru_baslik"];
		$icerik = $tambak["duyuru_icerik"];
		$resim = $tambak["duyuru_resim"];
	
?>
 <div class="col-md-4" style="margin-top:2%; " >
          <div class="box box-primary" style="margin-top:2%"  >
            <div class="box-body box-profile" style="background:#00AA85">
              <img class="profile-user-img img-responsive " src="urunresimleri/<?=$resim?>" alt="User profile picture" style="height:80px">

              <h3 class="profile-username text-center" style="color:#fff"><?=$baslik?></h3>
			
            
            
            
            
              

              
              <a href="?sayfa=5&id=<?=$id?>" class="btn btn-success btn-block"><b>Sil</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
          
          
          <?php
	}
	?>
    
    
    <?php
	if($kayitsayisi>0)
	{
	?>
          <div class="row"
          
          
          <div class="row">
          <div class="col-md-12">
          </div>
          </div>
          
          
								<div class="row">
										 <center><nav>
 												<ul class="pagination">
   													 <li>
                                                         <a href="#" aria-label="Previous">
                                                         <span aria-hidden="true">&laquo;</span>
                                                         </a>
                                                    </li>
					<?php
					$sagsolgosterimsayisi = 3 ;
					for($sayfaindex =$sayfalama-$sagsolgosterimsayisi;$sayfaindex<=$sayfalama+$sagsolgosterimsayisi;$sayfaindex++)
						{
						if($sayfaindex>0 && $sayfaindex<=$toplamsafasayisi){
						?>
						<li><a href="<?php echo '?sayfa=3&sayfalama='.$sayfaindex ?>"><?php echo $sayfaindex ?></a></li>
    					<?php
						}
						}
						?>

						<li>
      						<a href="#" aria-label="Next">
        					<span aria-hidden="true">&raquo;</span>
     						 </a>
    					</li>
 												 </ul>
											</nav>
										</center>
                                     </div>
								


		</div> 
		
       <?php
	}
	?>
          
          
          
          
<?php
	}

?>