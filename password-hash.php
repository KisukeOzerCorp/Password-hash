<?php

    print"Password-hash v1.0\n";
    sleep(2);
    print"Ce programme à été développer par Kisuke l'Alchimiste\n";
    sleep(3);
    print"[0] Chiffrer votre mot de passe en MD4\n";
    print"[1] Chiffrer votre mot de passe en MD5\n";
    print"[2] Chiffrer votre mot de passe en SHA1\n";
    print"[3] Chiffrer votre mot de passe en SHA256\n";
    print"[4] Chiffrer votre mot de passe en SHA512\n";
    $a = readline("Sélectionnez une option. => ");
    
     if($a == 0){

        print("Option MD4 sélectionnez\n");
        $ms = readline("Votre mot de passe => ");
        print("Processus en cours...\n");
        sleep(3);
        $dz = hash('md4', $ms);
        echo("Votre mot de passe en MD4 => $dz");


     }elseif($a == 1){
        print("Option MD5 séléctionnez\n");
        $md = readline("Votre mot de passe => ");
        print("Processus en cours...\n");
        sleep(3);
        $dd = SHA1(md5($md));
        echo("Votre mot de passe en MD5 => $dd");


    }elseif($a == 2){
        print("Option sha1 séléctionnez\n");
        $ds = readline("Votre mot de passe => ");
        print("Processus en cours...\n");
        sleep(3);
        $chi = sha1($ds);
        echo("Votre mot de passe en SHA1 => $chi");


    }elseif($a == 3){
        print("Option SHA256 séléctionnez\n");
        $sh = readline("Votre mot de passe => ");
        print("Processus en cours...\n");
        sleep(3);
        $az = hash('sha256', $sh);
        echo("Votre mot de passe en SHA256 => $az");

    }elseif($a == 4){

        print("Option SHA512 séléctionnez\n");
        $hs = readline("Votre mot de passe => ");
        print("Processus en cours...\n");
        sleep(3);
        $ak = hash('sha512', $hs);
        echo("Votre mot de passe en SHA512 => $ak");

    }
    
    
?>