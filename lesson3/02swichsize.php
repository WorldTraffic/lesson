<?
	$size = ini_get('post_max_size');
	$letter = $size{strlen($size)-1};
		switch($letter){
			case 'K' : $size *= 1024; brake;
			case 'M' : $size *= 1024 * 1024; brake;
			case 'G' : $size *= 1024 * 1024 * 1024; brake;
		}
?>
<p>Максимальный размер отправляемых данных <?= $size; ?></p>