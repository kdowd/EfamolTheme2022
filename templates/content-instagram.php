 <h2 class="heading">FOLLOW US ON INSTAGRAM</h2>


 <section class="section section-instagram">


     <?php if (get_field('instagram_one', 2)):
     	$imageOneObj = get_field_object('instagram_one', 2); ?>
        
     <div> 
         <a href="https://www.instagram.com/efamolnz/">
             <?= wp_get_attachment_image($imageOneObj['value'], 'medium') ?>  
        </a>
    </div>
     <?php
     endif; ?>

     <?php if (get_field('instagram_two', 2)):
     	$imageTwoObj = get_field_object('instagram_two', 2); ?>
      
         <div> <a href="https://www.instagram.com/efamolnz/"><?= wp_get_attachment_image(
         	$imageTwoObj['value'],
         	'medium'
         ) ?>  </a></div>
     <?php
     endif; ?>

     <?php if (get_field('instagram_three', 2)):
     	$imageThreeObj = get_field_object('instagram_three', 2); ?>
         <div> <a href="https://www.instagram.com/efamolnz/"><?= wp_get_attachment_image(
         	$imageThreeObj['value'],
         	'medium'
         ) ?>  </a></div>
     <?php
     endif; ?>


   
  

     
 
 
 </section>