function weblandtk_shortcode_SHORTCODENAME( $atts, $content ) {
    //ATTRIBUTE
  $array_atts = shortcode_atts(
  array(
    'PARAM'   => '',
  ), $atts, 'SHORTCODENAME'
    );
    //USE PARAMS
    $array_atts['PARAM'];
    //USE CONTENT
    $content;
    //RETURN VALUE
    ob_start();
    $outpout = ob_get_clean();
  return $outpout;
}
add_shortcode( 'SHORTCODENAME', 'weblandtk_shortcode_SHORTCODENAME' );
