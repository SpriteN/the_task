<h2>Naujas skelbimas</h2>



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
          if(($(selection).val())=="darbas")
          $(vselection).append('<option value="iesko">Iesko</option><option value="siulo">Siulo</option>');
          if(($(selection).val())=="nekilnojamas_turtas")
          $(vselection).append('<option value="butai">Butai</option><option value="namai">Namai</option>');
          if(($(selection).val())=="kompiuteriai")
          $(vselection).append('<option value="nesiojami">Nesiojami</option><option value="staliniai">Staliniai</option>');
        });





});
</script>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
    <div class="input-group">
       <label>Pavadinimas: </label><input type="text" name="pavadinimas" value="">
     </div>
     <div class="input-group">
       <label>Kategorija:</label><select class="kategorija" name="kat_sel">
         <option value="darbas">Darbas</option>
         <option value="nekilnojamas_turtas">Nekilnojamas turtas</option>
         <option value="kompiuteriai">Kompiuteriai</option>
       </select>
     </div>
     <div class="input-group">
       <label>Subkategorija:</label><select class="subkategorija" name="sub_sel">
         <option value=""></option>
       </select>
     </div>
     <div class="input-group">
       <label>Komentaras:</label><input type="textarea" name="komentaras" value="" size="20" maxlength="100">
        <input type="submit" name="" value="Ideti">
      </div>

</form>
