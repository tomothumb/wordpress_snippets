<?php

/**
 * Show current term name
 * @return string html
 */
function get_term_title($wraptag){
  global $wp_query;
  $currentterm = $wp_query->queried_object;

  $html = array();
  $html[] = sprintf('<%s class="termtitle">',$wraptag);
  if($currentterm->taxonomy == "post_tag"){
    // Case: Tags

    // HTML text
    $html[] = sprintf("<span>%s</span>",$currentterm->name);
  }else{
    // Case: Taxonomy

    // HTML text
    // $html[] = sprintf("<span>%s</span>",$currentterm->name);

    // Use image file which named "slug.png" instead of HTML text.
    $html[] = sprintf('<img src="%s/images/taxonomy/%s.png" alt="%s">',
      get_template_directory_uri(),
      $currentterm->slug,
      $currentterm->name
      );

  }
  $html[] = sprintf('</%s>',$wraptag);
  return implode("\n", $html);
}

/**
 * output
 */
function the_term_title($wraptag){
  echo get_term_title($wraptag);
}
