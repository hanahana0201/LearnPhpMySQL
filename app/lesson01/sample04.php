<?php
date_default_timezone_set('Asia/Tokyo');
echo '現在は、' . date('G時 i分 s秒') . 'です';
echo '現在は、' , date('G時 i分 s秒') , 'です'; // echoの場合は、,でも良い
?>