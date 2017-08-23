# PHPNote
PHP note - Learning

FILE  -- Mở file: fopen

Các mode khi sử dụng hàm fopen:

'r' - Mở và chỉ đọc; đặt con trỏ file vào vị trí bắt đầu của file

'r+' - Mở cho phép đọc và ghi gile; đặt con trỏ file vào vị trí bắt đầu của file

'w' - Mở và chỉ ghi; đặt con trỏ file vào vị trí bắt đầu của file và cắt file về độ dài bằng 0. Nếu file chưa tồn tại thì tạo ra file mới.

'w+' - Mở để đọc và ghi file; đặt con trỏ file vào vị trí bắt đầu của file và cắt file về độ dài bằng 0. Nếu file chưa tồn tại thì tạo ra file mới.

'a' - Mở và chỉ ghi; đặt con trỏ file vào cuối file. Nếu file chưa tồn tại thì tạo ra file mới. Nội dung được ghi vào cuối file.

'a+' - Mở và cho phép đọc/ghi; đặt con trỏ file vào cuối file. Nếu file chưa tồn tại thì tạo ra file mới. Nội dung được ghi vào cuối file.

'x' - Tạo ra file và mở chỉ để ghi file; đặt con trỏ ở đầu file. Nếu file đã tồn tại, lời gọi fopen() sẽ không được thực hiện và trả về FALSE cùng với một lỗi ở mức E_WARNING. Nếu file chưa tồn tại thì tạo ra file mới.

'x+' - Tạo ra file và mở cho phép đọc/ghi; còn lại tương tự mode 'x'

'c' - Mở file chỉ để ghi. Nếu file chưa tồn tại, tạo ra file. Nếu file đã tồn tại, nó sẽ không bị cắt nội dung (như mode 'w'), hay khiến lời gọi hàm fail (như trường hợp mode 'x'). Con trỏ được đặt ở đầu file. 

'c+' - Mở file để đọc/ghi. Tương tự mode 'c'.

Các hàm sử dụng trong đọc file:
fgetc
fgets
feof
fread

Hàm dùng để ghi file:
fwrite
Đóng file:
fclose

Các hàm xử lý file khác:
file_exists($path)
is_writable ($path) 
file_get_contents($path)
file_put_contents($path, $content)
rename($oldname, $newname)
copy($source, $dest)
unlink($path)
is_dir($path)
mkdir($path)

