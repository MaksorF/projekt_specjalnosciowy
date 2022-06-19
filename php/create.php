<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$pokemon= validate($_POST['nazwa_pociagu']);
	$poziom = validate($_POST['data_odjazdu']);
    $sex = validate($_POST['godzina_odjazdu']);
    $typ1 = validate($_POST['data_przyjazdu']);
    $typ2 = validate($_POST['godzina_przyjazdu']);


	$user_data = 'nazwa_pociagu='.$nazwa_pociagu. '&data_odjazdu='.$data_odjazdu. '&godzina_odjazdu='.$godzina_odjazdu. '&data_przyjazdu='.$data_przyjazdu. '&godzina_przyjazdu='.$godzina_przyjazdu;

	if (empty($nazwa_pociagu)) {
		header("Location: ../dodaj_przejazd.php?error=nazwa pociągu jest wymagana&$user_data");
	}else if (empty($data_odjazdu)) {
		header("Location: ../dodaj_przejazd.php?error=data odjazdu jest wymagany&$user_data");
    }else if (empty($godzina_odjazdu)) {
        header("Location: ../dodaj_przejazd.php?error=godzina odjazdu jest wymagana&$user_data");
    }else if (empty($data_przyjazdu)) {
        header("Location: ../dodaj_przejazd.php?error=data przyjazdu jest wymagany&$user_data");
    }else if (empty($godzina_przyjazdu)) {
        header("Location: ../dodaj_przejazd.php?error=godzina przyjazdu jest wymagany&$user_data");
    }else {

       $sql = "INSERT INTO pokemon(nazwa_pociagu, data_odjazdu, godzina_odjazdu, data_przyjazdu, godzina_przyjazdu,) 
               VALUES('$nazwa_pociagu', '$data_odjazdu', '$godzina_odjazdu', '$data_przyjazdu', '$godzina_przyjazdu')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../home.php?success=successfully created");
       }else {
          header("Location: ../dodaj_pokemona.php?error=unknown error occurred&$user_data");

       }
	}

}