<?php 
session_start();
if(empty($_SESSION["user"]) || !isset($_SESSION["user"])){
  header("location:connection.php");
}

try{
  $db = new PDO('mysql:host=localhost;dbname=banque_php','root');
}catch(PDOException $e){
  print"Erreur !: " . $e->getMessage() . "</br>";
  die();
}

$query = $db->prepare(
  // "SELECT * FROM accounts as a
  // INNER JOIN users as u
  // ON u.id = a.user_id
  // WHERE u.id = :userid"
  "SELECT a.id, a_t.name, a.number, a.montant FROM `account_types` as a_t
  INNER JOIN accounts as a 
  ON a_t.id = a.account_type_id
  INNER JOIN users as u
  ON u.id = a.user_id
  Where u.id = :userid"
);
$query->execute([
  "userid" => $_SESSION["user"]["id"]
]);
$account = $query->fetchAll(PDO::FETCH_ASSOC);

include "template/nav.php";
include "template/header.php";
require_once "acounts.php";
?>

<main class="container">

    <div class="row">

    <?php 
    foreach($account as $key => $value):  
    ?>

      <div class="card mb-4 col-lg-3 mr-4 col-sm-12 col-md-5">
        <div class="card-header">
         <a href="account.php?id=<?php echo $value["id"] ?>"><?php echo $value["name"] ?></a>
        </div>
        <div class="card-body">
          <h5 class="card-title">numeros de compte : <?php echo $value['number'] ?></h5>         
          <button class="btn btn-primary mb-2" type="button" data-toggle="collapse" data-target="#montantCible" aria-expanded="false" aria-controls="collapseExample">
            Montant du compte
          </button>
          <p class="card-text collapse" id="montantCible"><?php echo $value['montant'] ?>€</p>
            <a class="btn btn-primary" href="mouvement.php">Dépôt/Retrait</a>
          <button class="btn btn-danger mt-2" onclick="deleteAccount()">Supprimer le compte</button>
        </div>
      </div>
    <?php endforeach; ?>
    </div>

<?php 
include "template/footer.php";
?> 