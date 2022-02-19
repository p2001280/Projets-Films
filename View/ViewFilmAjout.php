
<div id="corpDuForm">
    <form method="POST" action="../Autre/AjoutFilm.php">
    <th>
                    Nom du film
    </th>
    <td><input name="nomFilm" required='required' type=text id="nomFilm"></td>
    <th>
                    Annee
    </th>
<td><input required='required' name="annee" type=number id="annee"></td>


    <table>
        <thead>
            <tr>
                <th>
                    nom
                </th>
                <th>
                    action
                </th>

            </tr>
        </thead>
        <tbody id="tbodytab">
            <tr id="row">

            <td><select name="nomActeur[]" id="acteur">

            <?php 
                foreach($Acteurs as $acteur){
                    echo "<option value='".$acteur->prenom_Acteur()."'>" . $acteur->prenom_Acteur() . "</option>";}
            
            ?>
            
            

            </select></td>
            <td>           <input type='button' name='del' id='del' value='supprimer'></td>
            <tr>
                
                
                
                    
            
            
            

        </tbody>
    </table>

    <input type="button" name="add" id="add" value="Ajouter un acteur">







    <button id="valider">VALIDER</button>
    <a href="./films" id="annuler" >ANNULER</a>
    </form>
</div>

<script type="text/javascript">
    // add row
    $("#add").click(function () {

        var html = "<tr id='row'><td><select name='nomActeur[]' id='acteur'><?php foreach($Acteurs as $acteur){
            echo '<option value='.$acteur->prenom_Acteur().'>' . $acteur->prenom_Acteur() . '</option>';}?></select></td><td><input type='button' name='del' id='del' value='supprimer'></td></tr>";
        

        $('#tbodytab').append(html);
    });
    $(document).on('click', '#del', function () {
        $(this).closest('#row').remove();
    });


</script>
