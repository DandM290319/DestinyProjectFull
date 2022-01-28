<!DOCTYPE html>
<html>
<head>
	<title>Donation</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="icon" type="image/png" href="favicon.png" />
	<meta content="" name="descriptison">
	  <meta content="" name="keywords">
	  <?php 	
		$connect = mysqli_connect('127.0.0.1','mysql','mysql','project');
		/*запрос в таблицу*/
		$query = mysqli_query($connect,'SELECT * FROM projects');
		$num = mysqli_num_rows($query);
	


 		?>
	 
	  <link rel="stylesheet" type="text/css" href="main.css">

</head>
<body>
	<nav id="menu" class="mx-auto shadow-sm">
        <div style="height: 54px;width: 1200px;" class="mx-auto d-flex text-center py-2">
            <a href="index.html">
                <div style="" class="">
                    <img src="logo.png" style="height: 54px;width: 54px;margin-top: -8px">
                </div>
            </a>
            <div style="width: 1px;height: 40px;background-color: white;"></div>
            <a href="index.html" style="text-decoration: none;">
                <p class="logoP" style="color: white;margin-left: 10px;font-size: 25px">Destiny</p>
            </a>
            <div style="height: 40px; width: 90px; margin-left: 450px;" class="pHover">
                <a href="chat.html" style="text-decoration: none;color: white" target="blank">
                    <p style="margin-top: 5px">Чат</p>
                </a>
            </div>
            <div style="height: 40px;width: 150px;margin-left: 15px" class="pHover">
                <a href="moreprojects.html" style="text-decoration: none;color: white" target="">
                    <p style="margin-top: 5px">Все проекты</p>
                </a>
            </div>

           

           <div class="dropdowns" style="">
			  <button class="btn dropdown-toggle pHover" type="button" id="dropdownMenuButton" style="color: white;font-family: arial;margin-left: 30px;margin-top: -2px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Войти
			  </button>
			  <div class="dropdown-menu py-3 px-3" aria-labelledby="dropdownMenuButton">
			    <form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Почта</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				    <small id="emailHelp" class="form-text text-muted">Мы никогда не передадим ваши данные.</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Пароль</label>
				    <input type="password" class="form-control" id="exampleInputPassword1">
				  </div>
				  <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
				  </div>
				  <button type="submit" class="btn gradient-border dva">Подтвердить</button>
				</form>
			  </div>
			</div>
        </div>
    </nav>

    

	<section class="main1">
		<div class="payBox py-4" style="border-radius: 20px;">
				<h2 class="content text-center py-5">Создание стартапа</h2>
			
			<form action="insert.php" method="GET">
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroupFileAddon01">Выложить</span>
				  </div>
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="inputGroupFile01" name="Img" placeholder="Изображение проекта" aria-describedby="inputGroupFileAddon01">
				    <label class="custom-file-label" for="inputGroupFile01">Выбрать файл</label>
				  </div>
				</div>

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Введите название</span>
				  </div>
				  <input type="text" class="form-control" aria-label="Sizing example input" name="Name" placeholder="Название проекта" aria-describedby="inputGroup-sizing-default">
				</div>

				<div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text">Введите описание</span>
				  </div>
				  <textarea type="text" name="Description" class="form-control" aria-label="Введите описание"></textarea>
				</div>

				<div style="height: 50px; width: 250px; margin-left: auto;margin-right: auto;" class="gradient-border mt-4">
					<button class="newDonateButton ">
						<div class="dva">Создать проект</div>
					</button>
				</div>

			</form>	

			 

			  <?php 	
			 	for ($i=0; $i <$num; $i++) { 
			 		$result = $query->fetch_assoc();		
			 	?>

			 <div class="newProjectsBigBox" style="margin-top: 100px">
                <div style="width: 1200px;" class="">
                     <?php  echo'<img src="'.$result["Img"].'" class="w-100">' ?>
                    <div style="height: 100px; ;width: 1200px; position: relative; top: -100px;background-color: rgba(113,113,113, 0.7);">
                    	<h3 class="newProjectsBoxBigNameText" name="Name"><?php echo $result['Name']; ?></h3>
                        <p class="newProjectsBoxBigDecription" name="Description"><?php echo $result['Description']; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>

	<section class="main3" data-aos="fade-down">
		<div class="footerDiv">
			<div class="footerBox"></div>

		</div>
	</section>


	<a href="#" class="back-to-top text-center" >
		<div style="background-color: rgba(200,162,200,0.7);border-radius:50%;width: 50px;height: 50px;position: fixed;left: 95%;top: 93%;overflow: hidden;" class="gradient-border shadow-sm">
			<div style="width: 50px;height: 50px;background-image: url(25223.png); background-size: 100% 100%;background-repeat: no-repeat;"></div>
		</div>
	</a>


	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>