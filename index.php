<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
		.error {
			color:red;
		}
	</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<br><br>
    <div class="container">
        <form action="forms.php" method="post">
            <fieldset>
                <legend>Exercice Ninja</legend>
                <div class="mb-3">
                <label for="disabledSelect" class="form-label">Nom</label>
                <input type="text" class="form-control" placeholder="firstname" require name="firstname">
                </div>
                <div class="mb-3">
                <label for="disabledSelect" class="form-label">Couleur</label>
                <select id="" class="form-select" name="color" require>
                <option value="Blue">Blue</option>
                        <option value="Red">Red</option>
                        <option value="Green">Green</option>
                </select>
                </div>
                <button  name="submit" class="btn btn-primary">Submit</button>
                
            </fieldset>
        </form>
    </div>
</body>
</html>