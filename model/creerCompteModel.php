<?php 

    function newAccount($account) {
        try {
            $db = new PDO('mysql:host=localhost;dbname=banque_php', 'banquePHP', 'banquePHP');
        } catch (PDOExeption $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    
        $query = $db->prepare(
            "INSERT INTO account(account_type, account_number, amount, opening_date/*, user_id*/)
            VALUES(:account_type, :account_number, :amount, :opening_date/*, :user_id*/)"
        );
        $result = $query->execute([
            "account_type" => $account->getAccount_type(),
            "account_number" => $account->getAccount_number(),
            "amount" => $account->getAmount(),
            "opening_date" => $account->getOpening_date(),
            // "user_id" => $_POST["user_id"]
        ]);
    }
