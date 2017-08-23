<?php
//Mo file

	$file = fopen("tho.txt", "r") or exit ("Mo file khong thanh cong");
	echo "Mo file thanh cong";
//Doc file

	while(!feof($file)) { //Kiem tra con tro co o cuoi file hay ko
		echo fgetc($file).PHP_EOL; //Doc tung ky tu
		echo fgets($file).PHP_EOL; //Doc file tung dong
	}
$data = fread($file, filesize('tho.txt'));
echo $data;
fclose($file);

$file = fopen('tho.txt', 'a+'); //Doc file va dat con tro o cuoi file (a+)
$content = "Noi dung moi .Ca dao Tuc ngu";
fwrite($file, $content); // Ghi noi dung moi vao file
fclose($file);

iff (file_exists('tho.txt')) {
	echo "File ton tai";
} else {
	echo "File khong ton tai";
}

echo file_get_contents('tho.txt'); // doc file
file_put_contents('demo.txt', 'Noi dung moi'); //Ghi file ma ko can mo file
