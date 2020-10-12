<?php 

    function add_new_transfert($db, $typeT, $amount, $account_id){
        $query = $db->prepare(
            "INSERT INTO transferts (type, amount, account_id, date_transfert)
            VALUES (:typeT, :amount, :account_id, current_timestamp())"
        );
        $query->execute([
            "typeT"=>$typeT,
            "amount"=>$amount,
            "account_id"=>$account_id
        ]);
    }

?>