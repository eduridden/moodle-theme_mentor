<?php
    $ADMIN->add('root', new admin_externalpage('mentor', 'mentor', $CFG->wwwroot."/theme/mentor/settings/index.php"));
    
    /* Setting default settings */
    
    /* General */
    $themecolor = get_config('theme_mentor','themecolor');
    if(!isset($themecolor) || trim($themecolor) == "") set_config('themecolor','orange','theme_mentor');
    
    $generalsidebar = get_config('theme_mentor','generalsidebar');
    if(!isset($generalsidebar) || trim($generalsidebar) == "") set_config('generalsidebar','side-pre','theme_mentor');
    
    $logourl = get_config('theme_mentor','logourl');
    if(!isset($logourl) || trim($logourl) == "") set_config('logourl','','theme_mentor');
    
    $faviconurl = get_config('theme_mentor','faviconurl');
    if(!isset($faviconurl) || trim($faviconurl) == "") set_config('faviconurl','','theme_mentor');
    
    /* Frontpage */
    $frontpagesidebar = get_config('theme_mentor','frontpagesidebar');
    if(!isset($frontpagesidebar) || trim($frontpagesidebar) == "") set_config('frontpagesidebar','','theme_mentor');
   
    $featuredcourses = get_config('theme_mentor','featuredcourses');
    if(!isset($featuredcourses) || trim($featuredcourses) == "") set_config('featuredcourses','','theme_mentor');
    
    $showfeaturedcourses = get_config('theme_mentor','showfeaturedcourses');
    if(!isset($showfeaturedcourses) || trim($showfeaturedcourses) == "") set_config('showfeaturedcourses','0','theme_mentor');
        
    /* Linkbox */
    
    $linkboxdata = get_config('theme_mentor','linkboxdata');
    if(!isset($linkboxdata) || trim($linkboxdata) == "") set_config('linkboxdata','[{"icon":"heart","title":"Linkbox 1","text":"Pellentesque enim tellus, consectetur id erat auctor, rhoncus dapibus nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis condimentum cursus nibh, sed tincidunt sem gravida congue.","link":"#"},{"icon":"camera","title":"Linkbox 2","text":"Pellentesque enim tellus, consectetur id erat auctor, rhoncus dapibus nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis condimentum cursus nibh, sed tincidunt sem gravida congue.","link":"#"},{"icon":"link","title":"Linkbox 3","text":"Pellentesque enim tellus, consectetur id erat auctor, rhoncus dapibus nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis condimentum cursus nibh, sed tincidunt sem gravida congue.","link":"#"},{"icon":"rate","title":"Linkbox 4","text":"Pellentesque enim tellus, consectetur id erat auctor, rhoncus dapibus nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis condimentum cursus nibh, sed tincidunt sem gravida congue.","link":"#"}]','theme_mentor');
    
    $showlinkboxes = get_config('theme_mentor','showlinkboxes');
    if(!isset($showlinkboxes) || trim($showlinkboxes) == "") set_config('showlinkboxes','1','theme_mentor');    
    
    /* Footer */
    $copyright = get_config('theme_mentor','copyright');
    if(!isset($copyright) || trim($copyright) == "") set_config('copyright','All rights reserved  | Ararazu ®','theme_mentor'); 

    $footermodule1 = get_config('theme_mentor','footermodule1');
    if(!isset($footermodule1) || trim($footermodule1) == "") set_config('footermodule1','aboutus','theme_mentor');     
    
    $footermodule2 = get_config('theme_mentor','footermodule2');
    if(!isset($footermodule2) || trim($footermodule2) == "") set_config('footermodule2','links','theme_mentor');     
    
    $footermodule3 = get_config('theme_mentor','footermodule3');
    if(!isset($footermodule3) || trim($footermodule3) == "") set_config('footermodule3','contactinfo','theme_mentor');     
    
    /* Header */
    $searchbar = get_config('theme_mentor','searchbar');
    if(!isset($searchbar) || trim($searchbar) == "") set_config('searchbar','1','theme_mentor');
    
    $menudata = get_config('theme_mentor','menudata');
    if(!isset($menudata) || trim($menudata) == "") set_config('menudata','[{"text":"Link 1","link":"#"},{"text":"Link 2","link":"#"},{"text":"Link 3","link":"#"},{"text":"Link 4","link":"#"},{"text":"Link 5","link":"#"}]','theme_mentor');     
    
    $searchbar = get_config('theme_mentor','searchbar');
    if(!isset($searchbar) || trim($searchbar) == "") set_config('searchbar','1','theme_mentor');     
    
    /* Social Icons */
    
    $headersocialicon = get_config('theme_mentor','headersocialicon');
    if(!isset($headersocialicon) || trim($headersocialicon) == "") set_config('headersocialicon','1','theme_mentor');    
    
    $footersocialicon = get_config('theme_mentor','footersocialicon');
    if(!isset($footersocialicon) || trim($footersocialicon) == "") set_config('footersocialicon','1','theme_mentor');    
    
    
    /* Slider */
    
    $slidermode = get_config('theme_mentor','slidermode');
    if(!isset($slidermode) || trim($slidermode) == "") set_config('slidermode','banner','theme_mentor');    
    
    $sliderpattern = get_config('theme_mentor','sliderpattern');
    if(!isset($sliderpattern) || trim($sliderpattern) == "") set_config('sliderpattern','waves','theme_mentor');    
    
    $slideshowdata = get_config('theme_mentor','slideshowdata');
    if(!isset($slideshowdata) || trim($slideshowdata) == "") set_config('slideshowdata','','theme_mentor');    
    
    
    /* Footer modules */
    
    $footermod_aboutus_whitelogo = get_config('theme_mentor','footermod_aboutus_whitelogo');
    if(!isset($footermod_aboutus_whitelogo) || trim($footermod_aboutus_whitelogo) == "") set_config('footermod_aboutus_whitelogo','','theme_mentor');    
    
    $footermod_aboutus_text = get_config('theme_mentor','footermod_aboutus_text');
    if(!isset($footermod_aboutus_text) || trim($footermod_aboutus_text) == "") set_config('footermod_aboutus_text','Donec vitae eros sit amet nibh fringilla hendrerit non at odio. Sed eu lacus hendrerit, venenatis elit ac, mollis massa. Sed nec enim ac justo feugiat tincidunt vitae sed felis. Pellentesque tincidunt viverra justo, eget posuere sem facilisis sit amet.','theme_mentor');        

    $footermod_image_title = get_config('theme_mentor','footermod_image_title');
    if(!isset($footermod_image_title) || trim($footermod_image_title) == "") set_config('footermod_image_title','Image Title','theme_mentor');    

    $footermod_image_url = get_config('theme_mentor','footermod_image_url');
    if(!isset($footermod_image_url) || trim($footermod_image_url) == "") set_config('footermod_image_url','','theme_mentor');    

    $footermod_links = get_config('theme_mentor','footermod_links');
    if(!isset($footermod_links) || trim($footermod_links) == "") set_config('footermod_links','[{"text":"Facebook - Share this!","link":"https:\/\/www.facebook.com\/"},{"text":"Google","link":"https:\/\/www.google.com.br\/"},{"text":"Twitter - Follow us!","link":"https:\/\/twitter.com\/"},{"text":"Ararazu","link":"http:\/\/themeforest.net\/user\/ararazu"}]','theme_mentor');
  
    $footermod_contact_address = get_config('theme_mentor','footermod_contact_address');
    if(!isset($footermod_contact_address) || trim($footermod_contact_address) == "") set_config('footermod_contact_address','Address 42','theme_mentor');    

    $footermod_contact_city = get_config('theme_mentor','footermod_contact_city');
    if(!isset($footermod_contact_city) || trim($footermod_contact_city) == "") set_config('footermod_contact_city','Rio - Brazil','theme_mentor');    

    $footermod_contact_phone = get_config('theme_mentor','footermod_contact_phone');
    if(!isset($footermod_contact_phone) || trim($footermod_contact_phone) == "") set_config('footermod_contact_phone','+99 (99) 9999-9999','theme_mentor');    

    $footermod_contact_mail = get_config('theme_mentor','footermod_contact_mail');
    if(!isset($footermod_contact_mail) || trim($footermod_contact_mail) == "") set_config('footermod_contact_mail','email@email.com','theme_mentor');    
    
    /* Social Icons */
    
    $social_rss = get_config('theme_mentor','social_rss');
    if(!isset($social_rss) || trim($social_rss) == "") set_config('social_rss','','theme_mentor');    
    
    $social_twitter = get_config('theme_mentor','social_twitter');
    if(!isset($social_twitter) || trim($social_twitter) == "") set_config('social_twitter','http://twitter.com/ararazu','theme_mentor');    
    
    $social_dribbble = get_config('theme_mentor','social_dribbble');
    if(!isset($social_dribbble) || trim($social_dribbble) == "") set_config('social_dribbble','#','theme_mentor');    
   
    $social_vimeo = get_config('theme_mentor','social_vimeo');
    if(!isset($social_vimeo) || trim($social_vimeo) == "") set_config('social_vimeo','','theme_mentor');  
    
    $social_facebook = get_config('theme_mentor','social_facebook');
    if(!isset($social_facebook) || trim($social_facebook) == "") set_config('social_facebook','#','theme_mentor');
    
    $social_youtube = get_config('theme_mentor','social_youtube');
    if(!isset($social_youtube) || trim($social_youtube) == "") set_config('social_youtube','','theme_mentor');
    
    $social_flickr = get_config('theme_mentor','social_flickr');
    if(!isset($social_flickr) || trim($social_flickr) == "") set_config('social_flickr','','theme_mentor');
    
    $social_gplus = get_config('theme_mentor','social_gplus');
    if(!isset($social_gplus) || trim($social_gplus) == "") set_config('social_gplus','#','theme_mentor');
    
    $social_linkedin = get_config('theme_mentor','social_linkedin');
    if(!isset($social_linkedin) || trim($social_linkedin) == "") set_config('social_linkedin','','theme_mentor');
    
    $social_tumblr = get_config('theme_mentor','social_tumblr');
    if(!isset($social_tumblr) || trim($social_tumblr) == "") set_config('social_tumblr','','theme_mentor');
    
    $social_behance = get_config('theme_mentor','social_behance');
    if(!isset($social_behance) || trim($social_behance) == "") set_config('social_behance','','theme_mentor');
    
    $social_wordpress = get_config('theme_mentor','social_wordpress');
    if(!isset($social_wordpress) || trim($social_wordpress) == "") set_config('social_wordpress','','theme_mentor');
    
    $social_pinterest = get_config('theme_mentor','social_pinterest');
    if(!isset($social_pinterest) || trim($social_pinterest) == "") set_config('social_pinterest','http://pinterest.com/ararazu/','theme_mentor');
    
    if(isset($_SERVER['QUERY_STRING']) && trim($_SERVER['QUERY_STRING']) == 'section=themesettingmentor')
        redirect ($CFG->wwwroot.'/theme/mentor/settings/index.php');
?>