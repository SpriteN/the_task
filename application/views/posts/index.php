<h2>Skelbimai</h2>
<table class="table table-stripped">
  <thead>
    <th>Pavadinimas</th><th>Kategorija</th><th>Subkategorija</th><th></th>
  </thead>
  <tbody>
<?php foreach ($posts as $post) : ?>
  <tr>
    <th><?php echo $post['pavadinimas']; ?></th>
    <th><?php
      $query = $this->db->query("SELECT * FROM kategorijos WHERE kat_id = ".$post['kategorija']);
      foreach ($query->result() as $row){
        echo $row->kat_pav;
      } ?>
   </th>
   <th><?php
     $query = $this->db->query("SELECT * FROM subkategorijos WHERE sub_id = ".$post['subkategorija']);
     foreach ($query->result() as $row){
       echo $row->sub_pav;
     } ?>
  </th>
    <th><a href="/posts/edit/<?php echo $post['id']; ?>"><button type="button" class="btn btn-default">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Redaguoti
</button></a></th>

  </tr>
<?php endforeach; ?>
</tbody>
</table>

<a href="<?php echo base_url(); ?>posts/create">
  <button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Įdeti skelbimą
</button>
</a>
