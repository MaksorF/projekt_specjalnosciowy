<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="nazwa_pociagu">Nazwa Pociagu</label>
		     <input type="nazwa_pociagu"
		           class="form-control"
		           id="nazwa_pociagu"
		           name="nazwa_pociagu"
		           value="<?=$row['nazwa_pociagu'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="dzien_odjazdu">Dzień odjazdu</label>
		     <input type="dzien_odjazdu"
		           class="form-control"
		           id="dzien_odjazdu"
		           name="dzien_odjazdu"
		           value="<?=$row['dzien_odjazdu'] ?>" >
		   </div>

            <div class="form-group">
                <label for="godzina_odjazdu">Godzina odjazdu</label>
                <input type="godzina_odjazdu"
                       class="form-control"
                       id="godzina_odjazdu"
                       name="godzina_odjazdu"
                       value="<?=$row['godzina_odjazdu'] ?>" >
            </div>

            <div class="form-group">
                <label for="dzien_przyjazdu">Dzień przyjazdu</label>
                <input type="dzien_przyjazdu"
                       class="form-control"
                       id="dzien_przyjazdu"
                       name="dzien_przyjazdu"
                       value="<?=$row['dzien_przyjazdu'] ?>" >
            </div>
            <div class="form-group">
                <label for="godzina_przyjazdu">Godzina przyjazdu</label>
                <input type="godzina_przyjazdu"
                       class="form-control"
                       id="godzina_przyjazdu"
                       name="godzina_przyjazdu"
                       value="<?=$row['godzina_przyjazdu'] ?>" >
            </div>

		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="home.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>