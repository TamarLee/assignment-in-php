<?php
include_once("data.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>assignment 3</title>
</head>
<body>
	<form action="#" method="post">
		<?php foreach ($fields as $value): ?>
			<?php if($value["type"]=="select"){?>
				<div>
					<select >
						<?php foreach ($value['options'] as $val){ ?>
							<option value="<?=$val['value']?>">
								<?=$val['text']?></option>
						<?php } ?>
					</select>
				</div>
			<?php }else{ ?>
			<div>
				<input type='<?=$value["type"]?>' name='<?=$value["name"]?>' value='<?=$value["value"]?>'>
			</div>
			<?php } ?>
		<?php endforeach ?>
	</form>
</body>
</html>