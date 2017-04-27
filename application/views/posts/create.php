<h2>Naujas skelbimas</h2>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".add"); //Fields wrapper
        var selection      = $(".kategorija"); //Add button ID
        var vselection =$(".subkategorija");

        var x = 1; //initlal text box count
        $(vselection).click(function(e){
          $(vselection).empty();
          if(($(selection).val())=="1")
          $(vselection).append('<option value="1">Ieško</option><option value="2">Siūlo</option>');
          if(($(selection).val())=="2")
          $(vselection).append('<option value="3">Butai</option><option value="4">Namai</option>');
          if(($(selection).val())=="3")
          $(vselection).append('<option value="5">Nešiojami</option><option value="6">Staliniai</option>');
        });
        $(selection).change(function(e){
          $(vselection).empty();
          if(($(selection).val())=="1")
          $(vselection).append('<option value="1">Ieško</option><option value="2">Siūlo</option>');
          if(($(selection).val())=="2")
          $(vselection).append('<option value="3">Butai</option><option value="4">Namai</option>');
          if(($(selection).val())=="3")
          $(vselection).append('<option value="5">Nešiojami</option><option value="6">Staliniai</option>');
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
         <option value="1" selected>Darbas</option>
         <option value="2">Nekilnojamas turtas</option>
         <option value="3">Kompiuteriai</option>
       </select>
     </div>
     <div class="input-group">
       <label>Subkategorija:</label><select class="subkategorija" name="sub_sel">
         <option value=""></option>
       </select>
     </div>
     <div class="input-group">
       <label>Komentaras:</label><input type="textarea" name="komentaras" value="" size="20" maxlength="100">
        <input type="submit" name="" value="Įdėti">
      </div>

</form>
