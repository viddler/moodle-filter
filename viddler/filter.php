<?php

/*
  filter_viddler
  The Viddler Moodle filter automatically replaces Viddler's
  Short Code with an iframe embed code.
  
  Example: [viddler id=e453bb4e w=437 h=288]

*/
class filter_viddler extends moodle_text_filter {
    public function filter($text, array $options = array()) {
    
        $viddler_shortcode = '/\\[viddler id=(.*?) w=(.*?) h=(.*?)\\]/';
        $viddler_iframe = '<iframe id="viddler-\1" src="//www.viddler.com/embed/\1/" width="\2" height="\3" frameborder="0" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>';
        
        return preg_replace($viddler_shortcode, $viddler_iframe, $text);
    }
}

?>