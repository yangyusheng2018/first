Title:			<?=$post['title']?>
ģ��·����		<?=$curdir?>
������			<?php getMenu('li','active'); ?>
����·����		<?=$path?>
������⣺		<?=$catTitle?>
ժҪ��			<?php the_excerpt($post['description'],100); ?>

��ҳժҪ<?php the_excerpt($p['description'],200); ?>


������			<?=$post['description']?>
Features��		<?=$post['features']?>
Application: 	<?=$post['application']?>
Technical Data:	<?=$post['data']?>
content:		<?=$post['content']?>
ͼƬ·����		<?=$post['img1']?>   <?=$post['img2']?>   <?=$post['img3']?>   <?=$post['img4']?>
���԰壺		<script type="text/javascript" src="<?=$curdir?>/js/message.js"></script>
����URL��		<?=$p['postname']?>

����ͷ���ļ���<?php include('header.php'); ?>
�����ײ��ļ���<?php include('footer.php'); ?>

����ͨ��onclick="openZoosUrl('chatwin');"
        <?=$livechat['sbm']?>
        
  <a href="#" onclick="openZoosUrl('chatwin')"></a>
                  
                  



����ҳ�б�
<?php
  $list=$kiss->getPostsByRand(40);
  foreach($list as $p)
   echo "<li><a href=\"{$p['postname']}.html\">{$p['title']}</a></li>";
?>

����ҳ�б����ӣ�<?=$post['postname']?>.html
����ҳͼƬ���ӣ�/timthumb.php/?src=<?=$post['img1']?>&amp;w=130&amp;h=90&amp;zc=1

�ж�����ҳ��
<?php if($single):?>
<script src="js/mim.js" type="text/javascript" ></script>
<script src="js/slider.js"  type="text/javascript" ></script>
<?php endif; ?>

�ж��Ƿ���ҳ��
<?php if($category):?>
<script src="js/mim.js" type="text/javascript" ></script>
<script src="js/slider.js"  type="text/javascript" ></script>
<?php endif; ?>


��ϵ���ǣ�
<li>Add.: <?=$contact['sbm']['add']?></li>
<li>Zip: <?=$contact['sbm']['postcode']?></li>
<li>Tel: <?=$contact['sbm']['tel']?></li>
<li>Fax: <?=$contact['sbm']['fax']?></li>
<li>E-mail: <?=$contact['sbm']['email']?></li>

category.php
single-products.php	
single-project.php
single-solutions.php


about��contactҳ������б�

<?php
   $kiss = new Kiss('../includes/'.$language.'.products');
   $p=$kiss->getPostsByRelated('crusher,mill',10);
   foreach($p as $post)
   echo "<li><a href=\"/products/{$post['postname']}.html\">{$post['title']}</a></li>";
?>






		<?php
         $kiss = new Kiss(dbPath('products'));
         $list=$kiss->getPostsByRand(4);
         foreach($list as $p):
       ?>
      
            <a href="/products/<?=$p['postname']?>.html"><?=$p['title']?></a>
           <a href="/products/<?=$p['postname']?>.html"><img src="<?=$p['img1']?>" alt="<?=$p['title']?>"></a>
            <a href="/products/<?=$p['postname']?>.html">More Details</a>
          <?php the_excerpt($p['description'],200); ?>
        <?php endforeach; ?>





		<?php
         $kiss = new Kiss(dbPath('project'));
         $list=$kiss->getPostsByRand(4);
         foreach($list as $p):
       ?>
      
            <a href="/project/<?=$p['postname']?>.html"><?=$p['title']?></a>
           <a href="/project/<?=$p['postname']?>.html"><img src="<?=$p['img1']?>" alt="<?=$p['title']?>"></a>
            <a href="/project/<?=$p['postname']?>.html">More Details</a>
          <?php the_excerpt($p['description'],200); ?>
        <?php endforeach; ?>







		<?php
         $kiss = new Kiss(dbPath('solutions'));
         $list=$kiss->getPostsByRand(4);
         foreach($list as $p):
       ?>
      
            <a href="/solutions/<?=$p['postname']?>.html"><?=$p['title']?></a>
           <a href="/solutions/<?=$p['postname']?>.html"><img src="<?=$p['img1']?>" alt="<?=$p['title']?>"></a>
            <a href="/solutions/<?=$p['postname']?>.html">More Details</a>
          <?php the_excerpt($p['description'],200); ?>
        <?php endforeach; ?>
		
        
        
        
        
        
        
        
        
        
        
        
          <section class="span8 one-column">
        
            
                 <?php
          $num=5; 
           $count=$kiss->getPostsNum();
           $list=$kiss->getPostsByTime($num,($page-1)*$num);
            $i=0;
            $i++;
         foreach($list as $p):
       ?>
	    	<!-- Blog Post -->
	    	<article class="media">
            
			    	<a class="object" data-hover="icon-zoom" href="<?=$p['img1']?>" data-rel="gallery[portfolio]"><img src="<?=$p['img1']?>" alt="<?=$p['title']?>"></a>
		        <div class="caption">
		        	<a class="mini button" href="<?=$path.$p['postname']?>.html"><h3><?=$p['title']?></h3></a>
		        	
		        	<div class="hr_small"></div>
		        	<p> <?php the_excerpt($p['description'],250); ?></p>
		        	<p><a class="mini button" href="<?=$path.$p['postname']?>.html">More &rarr;</a></p>
		       	</div>
		    </article> 
			    	<!-- / Blog Post -->
		<?php endforeach; ?>
		    <!-- Blog Post -->
  
    <ul class="page-1">    
  <a  href="index<?php echo (($page==2||$page==0)?"":($page-1));?>.html">Previous</a>
      <?php
for ($i=1,$len=1+intval($count/$num);$i<=$len;$i++){
  echo "<a href='index".($i==1?"":$i).".html' class=\"page-numbers ".(($page==0&&$i==1)||$page==$i?" current":"")."\">{$i}</a>";
}
?></a>
<a class="page-numbers next" href="index<?php echo (($page<(1+intval($count/$num)))?($page==0?'2':$page+1):$page);?>.html">Next</a><!--next--> 
     </ul>   
		</section>

        
  ���м����      
        
   <ul class="tabs clearfix">
          <li><a href="/" class="default-tab active">Home >></a></li>
          <li><a href="<?=$path?>"><?=$catTitle?></a></li>
           <li><a href="#"><?=$post['title']?></a></li>
          
        </ul>     
        