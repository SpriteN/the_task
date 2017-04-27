<h2>Skelbimo redagavimas</h2>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".add"); //Fields wrapper
        var selection      = $(".kategorija"); //Add button ID
        var vselection =$(".subkategorija");

        var x = 1; //initlal text box count
        $(selection).change(function(e){
          $(vselection).empty();
          if(($(selection).val())=="1")
          $(vselection).append('<option value="1">Iesko</option><option value="2">Siulo</option>');
          if(($(selection).val())=="2")
          $(vselection).append('<option value="3">Butai</option><option value="4">Namai</option>');
          if(($(selection).val())=="3")
          $(vselection).append('<option value="5">Nesiojami</option><option value="6">Staliniai</option>');
        });





});
</script>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
    <div class="input-group">
       <label>Pavadinimas: </label><input type="text" name="pavadinimas" value="<?php echo $post['pavadinimas']; ?>">
     </div>
     <div class="input-group">
       <label>Kategorija:</label><select class="kategorija" name="kat_sel" id="kat_sel">
         <option value="1">Darbas</option>
         <option value="2">Nekilnojamas turtas</option>
         <option value="3">Kompiuteriai</option>
       </select>
     </div>
     <div class="input-group">
       <label>Subkategorija:</label><select class="subkategorija" name="sub_sel" id="sub_sel">
         <option value="1">Iesko</option>
         <option value="2">Siulo</option>
         <option value="3">Butai</option>
         <option value="4">Namai</option>
         <option value="5">Nesiojami</option>
         <option value="6">Staliniai</option>
       </select>
     </div>
     <div class="input-group">
       <label>Komentaras:</label><input type="textarea" name="komentaras" value="<?php echo $post['komentaras']; ?>" size="20" maxlength="100">
        <input type="submit" name="" value="Issaugoti">
      </div>

</form>


<script type="text/javascript">
        document.getElementById('kat_sel').selectedIndex = <?php echo $post['kategorija']; ?>-1;
        document.getElementById('sub_sel').selectedIndex = <?php echo $post['subkategorija']; ?>-1;
</script>
