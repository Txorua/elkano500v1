<?php
/**
 * Ver enlace: http://drupal.stackexchange.com/questions/79037/get-translated-term-name/81047#71047
 */
$tree = taxonomy_get_tree($row->taxonomy_term_data_vid);
foreach ($tree as $term) {
  if (module_exists('i18n_taxonomy') && ($term->tid == $row->tid)) {
    $term = i18n_taxonomy_localize_terms($term);
    $output = '<a data-filter=".tid-' . $row->tid . '" href="#">' . $term->name . '</a>';
  }
}
print $output;
?>
