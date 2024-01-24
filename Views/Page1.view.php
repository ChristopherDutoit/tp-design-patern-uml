<h1 class='text-blue-600 text3xl text-center'>Page 1</h1>
<?php foreach($datas as $d) : ?>
<br/>
---------------------------
<br/>
Nom : <?=$d["FirstName"];?>
<br/>
Prenom : <?=$d["LastName"];?>
<br/>
Nom : <?=$d["Age"];?>
<br/>
---------------------------
<br/>

<?php endforeach; ?>