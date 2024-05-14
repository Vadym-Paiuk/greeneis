<?php get_header(); 
   //Template name: Technical Support
   $path = get_template_directory_uri();
?>
<section class="site-archive">
   <div class="site-archive__bg">
         <img  src="<?php echo $path;?>/assets/src/images/icons/web-3.svg" alt="web" loading="lazy">
   </div>
   <div class="container">
      <div class="site-archive__inner">
         <div class="site-archive__header">
            <h1>Technical Support</h1>
         </div>
         <div class="site-archive__cards site-archive__cards--flex">
            <div class="card-support">
               <div class="card-support__img">
                     <img  src="<?php echo $path;?>/assets/src/images/icons/letter.svg" alt="web" loading="lazy">
               </div>
               <p>Email Support to open <br> a ticket at:</p>
               <a href="mailto:HELP@GREENEIS.COM">HELP@GREENEIS.COM</a>
            </div>
            <div class="card-support">
               <div class="card-support__img">
                     <img  src="<?php echo $path;?>/assets/src/images/icons/headphone.svg" alt="web" loading="lazy">
               </div>
               <p>Call our help <br> desk at:</p>
               <a href="tel:206392900">(206) 639-2900</a>
            </div>
            <div class="card-support">
                  <div class="card-support__img">
                        <img  src="<?php echo $path;?>/assets/src/images/icons/settings.svg" alt="web" loading="lazy">
                  </div>
                  <p>Click to be directed to our <br> remote support portal.</p>
                  <a href="#">Click HERE</a>
            </div>
            <div class="card-support">
                  <div class="card-support__img">
                        <img  src="<?php echo $path;?>/assets/src/images/icons/eye.svg" alt="web" loading="lazy">
                  </div>
                  <p>Click to log into our <br> client portal.</p>
                  <a href="#">Click HERE</a>
            </div>
         </div>
      </div>
   </div>
</section>

<?php get_footer(); ?>