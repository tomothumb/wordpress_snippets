<?php
// This is a part of theme.
?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

<table>
<?php
show_table_row("url","WEB SITE URL");
// -> Output sample
// <tr>
// <th>WEB SITE URL</th>
// <td>http://google.com</td>
// </tr>
?>
</table>

  <?php endwhile; ?>
<?php endif; ?>
