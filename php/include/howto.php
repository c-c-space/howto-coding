<section class="readme">
  <?php
  $included_files = get_included_files()

  foreach ($included_files as $filename) {
    echo "$filename\n";
  }
  ?>
</section>
