<?php 
// Подключаю файл 'action.php' (так как в нем уже подключен конфигурационный файл 'db.php' в этом файле его подключать повторно не требуется)
require 'action.php'; 

// Ищу в таблице все записи и сортирую их
$all = R::findAll('list', 'ORDER BY `id` DESC');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Список дел</title>
	<link rel="stylesheet" href="styles/style.css">
</head>
<body>
	<div class="block">
		<div class="content">
			<div class="create">
				<form action="index.php" method="POST">
					<input name="creator" class="creator" type="text" placeholder="Создать список дел"> 
					<button type="submit" name="btn" class="btn">Добавить</button>
				</form>
				<div class="list">
						
						<!-- Прохожу по таблице и вывожу все записи из нее -->
						<? foreach ($all as $key => $value): ?> 
							<!-- Добавляю кнопку 'Удалить' -->
							<? for ($i = 0; $i < 1; $i++): ?> 
								<!-- Вывожу записи из БД -->
								<ul>
									<li class="style_list">
										<b><?php echo $value['task']; ?></b>
										<a class="form_delete" href="/delete.php?id=<?php echo $value['id']; ?>">
											<button class="delete">Удалить</button>
										</a>
									</li>
								</ul>

							<? endfor; ?>

						<? endforeach ;?>
							
						
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>