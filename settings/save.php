<?php
    include("../../../config.php");

    /* POSTs */
    $general                = $_POST["general"];
    $header                 = $_POST["header"];
    $footer                 = $_POST["footer"];
    $footermod_aboutus      = $_POST["footermod_aboutus"];
    $footermod_links        = $_POST["footermod_links"];
    $footermod_contact      = $_POST["footermod_contact"];
    $footermod_image        = $_POST["footermod_image"];
    $frontpage              = $_POST["frontpage"];
    $social                 = $_POST["social"];
    
    /* Saving Configs */
    
    #GENERAL
    set_config('themecolor',$general["themecolor"],'theme_mentor');
    set_config('generalsidebar',$general["generalsidebar"],'theme_mentor');
    set_config('logourl',$general["logourl"],'theme_mentor');
    set_config('faviconurl',$general["faviconurl"],'theme_mentor');
    
    #HEADER
    set_config('headersocialicon',$header["headersocialicon"],'theme_mentor');
    if(isset($header["menudata"]))
        set_config('menudata',json_encode($header["menudata"]),'theme_mentor');
    set_config('searchbar',$header["searchbar"],'theme_mentor');
    
    #FOOTER
    set_config('footermodule1',$footer["footermodule1"],'theme_mentor');
    set_config('footermodule2',$footer["footermodule2"],'theme_mentor');
    set_config('footermodule3',$footer["footermodule3"],'theme_mentor');
    set_config('copyright',$footer["copyright"],'theme_mentor');
    set_config('footersocialicon',$footer["footersocialicon"],'theme_mentor');
    
    #FOOTER MOD ABOUT US
    set_config('footermod_aboutus_whitelogo',$footermod_aboutus["footermod_aboutus_whitelogo"],'theme_mentor');
    set_config('footermod_aboutus_text',$footermod_aboutus["footermod_aboutus_text"],'theme_mentor');
    
    #FOOTER MOD LINKS
    if(isset($footermod_links["footermod_links"]))
        set_config('footermod_links',json_encode($footermod_links["footermod_links"]),'theme_mentor');
    
    #FOOTER MOD CONTACT
    set_config('footermod_contact_address',$footermod_contact["footermod_contact_address"],'theme_mentor');
    set_config('footermod_contact_city',$footermod_contact["footermod_contact_city"],'theme_mentor');
    set_config('footermod_contact_phone',$footermod_contact["footermod_contact_phone"],'theme_mentor');
    set_config('footermod_contact_mail',$footermod_contact["footermod_contact_mail"],'theme_mentor');
    
    #FOOTER MOD IMAGE
    set_config('footermod_image_title',$footermod_image["footermod_image_title"],'theme_mentor');
    set_config('footermod_image_url',$footermod_image["footermod_image_url"],'theme_mentor');
    
    #FRONTPAGE
    set_config('slidermode',$frontpage["slidermode"],'theme_mentor');
    if(isset($frontpage["slideshowdata"]))
        set_config('slideshowdata',json_encode($frontpage["slideshowdata"]),'theme_mentor');
    set_config('sliderpattern',$frontpage["sliderpattern"],'theme_mentor');
    set_config('frontpagesidebar',$frontpage["frontpagesidebar"],'theme_mentor');
    set_config('showfeaturedcourses',$frontpage["showfeaturedcourses"],'theme_mentor'); 
    if(isset($frontpage["featuredcourses"]))
        set_config('featuredcourses',  json_encode($frontpage["featuredcourses"]),'theme_mentor');
    set_config('showlinkboxes',$frontpage["showlinkboxes"],'theme_mentor');
    if(isset($frontpage["linkboxdata"]))
        set_config('linkboxdata',json_encode($frontpage["linkboxdata"]),'theme_mentor');
    
    #SOCIAL
    set_config('social_rss',$social["social_rss"],'theme_mentor');
    set_config('social_twitter',$social["social_twitter"],'theme_mentor');
    set_config('social_dribbble',$social["social_dribbble"],'theme_mentor');
    set_config('social_vimeo',$social["social_vimeo"],'theme_mentor');
    set_config('social_facebook',$social["social_facebook"],'theme_mentor');
    set_config('social_youtube',$social["social_youtube"],'theme_mentor');
    set_config('social_flickr',$social["social_flickr"],'theme_mentor');
    set_config('social_gplus',$social["social_gplus"],'theme_mentor');
    set_config('social_linkedin',$social["social_linkedin"],'theme_mentor');
    set_config('social_tumblr',$social["social_tumblr"],'theme_mentor');
    set_config('social_behance',$social["social_behance"],'theme_mentor');
    set_config('social_wordpress',$social["social_wordpress"],'theme_mentor');
    set_config('social_pinterest',$social["social_pinterest"],'theme_mentor');
    
    redirect('index.php');
?>
