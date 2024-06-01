<?php get_header(); 
   //Template name: Social Events
   $path = get_template_directory_uri();
?>

   <section class="site-archive">
      <div class="site-archive__bg">
         <img  src="<?php echo $path;?>/assets/src/images/icons/web-3.svg" alt="web" loading="lazy">
      </div>
      <div class="container">
         <div class="site-archive__inner">
            <div class="site-archive__header">
               <div class="site-archive__header-content">
                  <h1>Social Events</h1>
                  <p>
                     Lorem ipsum dolor sit amet consectetur. Arcu ac odio vitae ante 
                     sociis volutpat posuere. Volutpat faucibus arcu sem fusce sed 
                     aliquet praesent fusce ultrices.
                  </p>
               </div>
               <div class="site-archive__cats">
                  <a class="active" href="#">aLL</a>
                  <a href="#">bUSINESS</a>
                  <a href="#">wORK</a>
                  <a href="#">fINANCE</a>
               </div>
            </div>
            <div class="site-archive__cards site-archive__cards--grid-2">
               <article class="card">
                  <div class="card__img">
                     <img  src="<?php echo $path;?>/assets/src/images/home/card-1.png" alt="" loading="lazy">
                  </div>
                  <div class="card__main">
                     <div class="card__info">
                        <div class="card__cats">
                           <a href="#" class="active">Business</a>
                           <a href="#">Blog</a>
                        </div>
                        <time>March 8, 2024</time>
                     </div>
                     <div class="card__content">
                        <p>Behind the Scenes: Success Stories of High-Performing Teams</p>
                        <span>Today, your data quality issues are not just observed.</span>
                     </div>
                     <a href="" class="card__btn btn--transparent" data-fancybox data-src="#dialog-content">Registrate</a>
                  </div>
               </article>
               <article class="card">
                  <div class="card__img">
                     <img  src="<?php echo $path;?>/assets/src/images/home/card-2.png" alt="" loading="lazy">
                  </div>
                  <div class="card__main">
                     <div class="card__info">
                        <div class="card__cats">
                           <a href="#" class="active">Business</a>
                           <a href="#">Blog</a>
                        </div>
                        <time>March 8, 2024</time>
                     </div>
                     <div class="card__content">
                        <p>Tech Innovations Transforming the Landscape of Team Building</p>
                        <span>Today, your data quality issues are not just observed.</span>
                     </div>
                     <a href="" class="card__btn btn--transparent" data-fancybox data-src="#dialog-content">Registrate</a>
                  </div>
               </article>
               <article class="card">
                  <div class="card__img">
                     <img  src="<?php echo $path;?>/assets/src/images/home/card-3.png" alt="" loading="lazy">
                  </div>
                  <div class="card__main">
                     <div class="card__info">
                        <div class="card__cats">
                           <a href="#" class="active">Business</a>
                           <a href="#">Blog</a>
                        </div>
                        <time>March 8, 2024</time>
                     </div>
                     <div class="card__content">
                        <p>Unlocking the Potential: How to Boost Team Productivity</p>
                        <span>Today, your data quality issues are not just observed.</span>
                     </div>
                     <a href="" class="card__btn btn--transparent" data-fancybox data-src="#dialog-content">Registrate</a>
                  </div>
               </article>
               <article class="card">
                  <div class="card__img">
                     <img  src="<?php echo $path;?>/assets/src/images/home/card-1.png" alt="" loading="lazy">
                  </div>
                  <div class="card__main">
                     <div class="card__info">
                        <div class="card__cats">
                           <a href="#" class="active">Business</a>
                           <a href="#">Blog</a>
                        </div>
                        <time>March 8, 2024</time>
                     </div>
                     <div class="card__content">
                        <p>Behind the Scenes: Success Stories of High-Performing Teams</p>
                        <span>Today, your data quality issues are not just observed.</span>
                     </div>
                     <a href="" class="card__btn btn--transparent" data-fancybox data-src="#dialog-content">Registrate</a>
                  </div>
               </article>
            </div>
         </div>
      </div>
   </section>
   <div class="card-modal" id="dialog-content" style="display:none;max-width:500px;">
      <div class="card-modal__inner">
         <div class="hard-modal__header">
            <h3>Registration for a social event</h3>
            <p>Pull up a barstool and get to know us</p>
         </div>
         <div class="card-modal__form form">
                  <form method="post" enctype="multipart/form-data" target="gform_ajax_frame_2" id="gform_2" action="/#gf_2" data-formid="2" novalidate="">
                     <div class="gform-body gform_body">
                        <div id="gform_fields_2" class="gform_fields top_label form_sublabel_below description_below validation_below">
                           <div id="field_2_5" class="gfield gfield--type-text gfield--width-full gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label field_validation_below gfield_visibility_visible"
                              data-js-reload="field_2_5"><label class="gfield_label gform-field-label" for="input_2_5">First Name*<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                              <div class="ginput_container ginput_container_text"><input name="input_5" id="input_2_5" type="text" value="" class="large" placeholder="First Name*" aria-required="true" aria-invalid="false"> </div>
                           </div>
                           <div id="field_2_2" class="gfield gfield--type-phone gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label field_validation_below gfield_visibility_visible" data-js-reload="field_2_2">
                              <label class="gfield_label gform-field-label" for="input_2_2">Title*<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                              <div class="ginput_container ginput_container_phone"><input name="input_2" id="input_2_2" type="text" value="" class="large" placeholder="Last Name*" aria-required="true" aria-invalid="false"></div>
                           </div>
                           <div id="field_2_2" class="gfield gfield--type-phone gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label field_validation_below gfield_visibility_visible" data-js-reload="field_2_2">
                              <label class="gfield_label gform-field-label" for="input_2_2">Email Address*<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                              <div class="ginput_container ginput_container_phone"><input name="input_2" id="input_2_2" type="email" value="" class="large" placeholder="Email Address*" aria-required="true" aria-invalid="false"></div>
                           </div>
                           <div id="field_2_2" class="gfield gfield--type-phone gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label field_validation_below gfield_visibility_visible" data-js-reload="field_2_2">
                              <label class="gfield_label gform-field-label" for="input_2_2">Company Website*<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                              <div class="ginput_container ginput_container_phone"><input name="input_2" id="input_2_2" type="text" value="" class="large" placeholder="Company Website*" aria-required="true" aria-invalid="false"></div>
                           </div>

                        </div>
                     </div>
                     <div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_2" class="gform_button button" value="Let’s talk"
                           onclick="if(window[&quot;gf_submitting_2&quot;]){return false;}  if( !jQuery(&quot;#gform_2&quot;)[0].checkValidity || jQuery(&quot;#gform_2&quot;)[0].checkValidity()){window[&quot;gf_submitting_2&quot;]=true;}  "
                           onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_2&quot;]){return false;} if( !jQuery(&quot;#gform_2&quot;)[0].checkValidity || jQuery(&quot;#gform_2&quot;)[0].checkValidity()){window[&quot;gf_submitting_2&quot;]=true;}  jQuery(&quot;#gform_2&quot;).trigger(&quot;submit&quot;,[true]); }">
                        <input type="hidden" name="gform_ajax" value="form_id=2&amp;title=1&amp;description=&amp;tabindex=0&amp;theme=gravity-theme">
                        <input type="hidden" class="gform_hidden" name="is_submit_2" value="1">
                        <input type="hidden" class="gform_hidden" name="gform_submit" value="2">
                        <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                        <input type="hidden" class="gform_hidden" name="state_2" value="WyJbXSIsIjcyNGRkMWQwNTg1YjkyNGUxMjc1NWMxNGE4YThiMTAwIl0=">
                        <input type="hidden" class="gform_hidden" name="gform_target_page_number_2" id="gform_target_page_number_2" value="0">
                        <input type="hidden" class="gform_hidden" name="gform_source_page_number_2" id="gform_source_page_number_2" value="1">
                        <input type="hidden" name="gform_field_values" value="">

                     </div>
                     <p style="display: none !important;" class="akismet-fields-container" data-prefix="ak_"><label>Δ<textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_1" name="ak_js"
                           value="1715467651018">
                        <script>document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());</script>
                     </p>
                  </form>
         </div>
      </div>
   </div>

<?php get_footer(); ?>