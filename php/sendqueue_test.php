<?php
    require_once "sendqueue.php";

    echo "Testing MOPH Connect ticket API";

    $line_id = "U782b7b45ce168aa530163b99f6076f83";

    echo "<br> line id: $line_id";

    sendQueue(
        $line_id,
        'โรงพยาบาลปทุมธานี', //ชื่อโรงพยาบาล
        'กระทรวงสาธารณสุข', //สังกัด
        'จุดคัดกรอง คิวที่ 2221', //เลขคิว
        'นาย ทิชา ล่าสุด', //ชื่อคนไข้
        '2018-04-30', //วันที่นัด
        'เวลานัดหมาย 09:00-09:15 น. กรุณามาก่อนเวลา 10 นาที', //เวลาที่นัด
        'http://pth.ddns.net/', //Link สำหรับดูรายละเอียดเพิ่มเติม
        'http://pth.ddns.net/' //Link สำหรับดูคิวปัจจุบัน
    );                                                                  
?>
