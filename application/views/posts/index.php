<h2>Skelbimai</h2>
<table class="table table-stripped">
<?php foreach ($posts as $post) : ?>
  <tr>
    <th><?php echo $post['pavadinimas']; ?></th>
    <th><?php echo $post['kategorija']; ?></th>
    <th><?php echo $post['subkategorija']; ?></th>
  </tr>
<?php endforeach; ?>
</table>
