<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & HTML</title>
    <style>
        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>สรุป PHP</h2>
    <?php
    print'<h3>คำสั่ง print(),echo()</h3>
    print() มีการส่งกลับมา (return) แต่ echo จะไม่มีการส่งค้ากลับมา (void),ระบุได้ค่าเดียว<br>
    echo() แสดงข้อความ ระบุได้หลายค่า หลายตัว ทำงานเร็วกว่า print<br>
    print_r() แสดงผล array';

    print '<h3>ตัวอย่าง</h3>';
    print "Phet<br>";
    echo "Flim<br>";
    echo '<hr>';

    ////////////////////////////////////////////////////////////////////

    print'<h3>การกำหนดตัวแปร</h3>  
    $ชื่อตัวแปร = ค่าของตัวแปร<br>
    local var = ตัวแปรที่ทำงานอยู่ในfunction<br>
    global var = ตัวแปรที่ทำงานอยู่นอกfunction<br>
    เช่น<br>
    $name = "Kamonphet"<br>
    $age = 19<br>
    $total = $age + 20 <br>
    echo $name;<br>
    echo $total;';
    
    $name = 'Kamonphet';
    $age = 19;
    $total = $age + 20;
    print '<h3>ผลลัพธ์</h3></h>';
    echo $name.'<br>';
    echo $total.'<br>';
    echo '<hr>';

    /////////////////////////////////////////////////////////////////////

    print '<h3>ชนิดข้อมูล</h3>
    integer = จำนวนเต็ม <br> 
    เช่น $n = 50;<br>
    float/double = จำนวนจริง .ทศนิยม<br>
    เช่น $f = 4.5;<br>
    boolean = ตรรกศาสตร์ <br>
    $t = true;<br>
    string = ชุดข้อความ <br>
    $s = name;<br>
    Array = กลุ่มข้อมูลชนิดเดียวกัน <br>
    object = กำหนดตัวแปรให้เก็บคุณสมบัติตามหลัก oop<br>';
    echo '<hr>';

    ///////////////////////////////////////////////////////////////////

    print '<h3>gettype(),settype()</h3>
    gettype() = ดึงชนิดข้อมูลมาแสดงผล<br>  
    เช่น echo gettype($name);<br>
    settype() = กำหนดค่าชนิดข้อมูล <br>
    เช่น echo settype($age,"double";)';
    echo '<hr>';

    /////////////////////////////////////////////////////////////////

    print '<h3>Casting,Constant</h3>
    casting = เปลี่ยนชนิดของข้อมูล echo (type)$_____<br>
    เช่น<br>
    $f = 5.6;<br>
    $lek = 12;<br>
    $price = "1000";<br>
    echo $raka = $lek + $price;<br>
    echo (int)$f;<br>';

    $f = 5.6;
    $lek = 12;
    $price = '1000';

    print '<h3>ผลลัพธ์</h3></h>';
    echo $raka = $lek + $price.'<br>';
    echo (int)$f.'<br>';
    echo '<br>';
    print'constant = การสร้างตัวแปรเพื่อข้อมูลที่ไม่สามารถเปลี่ยนแปลงค่าได้ define("NAME",var)<br>
    เช่น define("PIE", 3.141592653589793);<br>';
    
    define('PIE', 3.141592653589793);

    /* ฟังก์ชันที่เกี่ยวกับตัวแปร
    isset = ตรวจสอบตัวแแปรว่ามีการกำหนดค่าหรือไม่  isset(var); ->True(1) False
    unset = ยกเลิกตัวแปรและคืนค่าหน่วยความจำ      unset(var);
    empty = ตรวจสอบว่าเป็นค่าว่างหรือเลขศูนย์หรือไม่   empty(var); ->True(1) False
    is_null = ตรวจสอบว่าตัวแปรมีค่าว่างหรือไม่       is_null(var); ->True(1) False
    print+r() = แสดงค่าตัวแปร array
    var_dump() = แสดงรายละเอียดตัวแปร           var_dump(var); type
    */

    /* superglobal ตัวแปรที่รับค่าตัวแปรจาก browser กับ web browser
    $GLOBALS = ประกาศให้เป็นตัวแปร global เพื่อให้ทุกส่วนสามารถเรียกใช้งานได้
    $_SERVER = เก็บค้าต่าง ๆ ของ web server ที่กำลังทำงานอยู่
    $_get = ตัวแปรแบบ array ใช้เก็บค่าที่ส่งมากับ url
    $_POST = เก็บค่าที่ส่ง.... form แบบ post method
    $_ENV = ตัวแปรที่จัดเก็บสภาพแวดล้อมทั่วไปและค่าต่าง ๆ ของ server
    $_SESSION = เก็บตัวแปร session
    $_COOKIE = เก็บตัวแปร cookie
    */

    /*ตัวดำเนินการทางคณิตศาสตร์
    + , - , * , / , %
    */

    /*ตัวดำเนินการเปรียบเทียบ
    == เท่ากับ
    === เหมือนกัน -> ชนิด ค่า เหมือนกัน
    != ไม่เท่ากับ
    <> ไม่เท่ากับ
    !== ไม่เหมือนกัน
    > มากกว่า
    < น้องกว่า
    >= , <= มากกว่า,น้อยกว่าเท่ากับ
    <=> spaceship (PHP7ขึ้นไป)
        คำตอบเป็นตัวเลข 
        a<b = -1;
        a=b =  0;
        a>b =  1;

    /*ตัวดำเนินการเปรียบเทียบข้อความ
    ต่อข้อความ $var.'string';
    ต่อข้อความและกำหนดค่า  $var='string';
    */

    /*ตัวดำเนินการเพิ่มค่าลดค่า
    ++(Prefix)  ++a  เพิ่มค่าให้ a ก่อน 1 ค่าแล้วนำไปใช้
    ++(postfix) a++  นำค่าปัจจุบันใน a ไปใช้ก่อนแล้วค่อยเพิ่มค่า
    --(prefix)  --b  เพิ่มค่าให้ b ก่อน 1 ค่าแล้วนำไปใช้
    --(postfix) b--  นำค่าปัจจุบันใน b ไปใช้ก่อนแล้วค่อยเพิ่มค่า
    echo (++,--$var);
    */

    /*โครงสร้างควบคุม
    แบบลำดับ 
    แบบมีเงื่อนไข if
    หลายเงื่อนไข elseif(){}
    แบบทำซ้ำ loop
    */
    echo '<hr>';
    //if
    $balance = 500;
    $withdraw = 100;

    echo 'เงินในบัญชี = ' . $balance . '<br>';
    echo 'จำนวนเงินที่ถอน = ' . $withdraw . '<br>';
    if ($withdraw <= $balance) {
        echo 'สามารถกดเงินได้' . '<br>';
        $balance -= $withdraw;
        echo 'ยอดคงเหลือ = ' . $balance . '<br>';
    } else {
        echo 'ยอดเงินคงเหลือไม่พอ <br>';
    }
    echo 'leave program';
    echo '<hr>';

    /*ตัวดำเนินการทางตรรกศาสตร์
    && and
    || or
    ! not
    */

    // คำนวณพื้นที่ 4 เหลี่ยม
    $width = 30;
    $hight = 30;

    if ($width > 0 && $hight > 0) {
        $area = $width * $hight;
        echo "area squere =" . $area . ' talangnew';
    } else {
        echo 'pls enter > 0';
    };
    echo '<hr>';

    //if...else แบบลดรูป
    $a = 10;
    $b = 5;

    // if ($a > $b) {
    //     echo $a . 'มากกว่า' . $b;
    // } else {
    //     echo $a . 'น้อยกว่า' . $b;
    // }

    //ลดรูป
    $a > $b ? print($a . 'มากกว่า' . $b . '<br>') : print($a . 'น้อยกว่า' . $b . '<br>');
    echo '<hr>';
    /* swich...case
    เหมือน if แต่จะเลือกเพียงหนึ่งทางเลือกออกมาทำงานโดยนำค่าในตัวแปรมากำหนดเป็นทางเลือก
    switch(สิ่งที่ต้องตรวจสอบ){
        case____:___;
            break;
        defalt:
    }
    */
    $mouth = 1;

    switch ($mouth) {
        case 1:
            echo 'january';
            break;
        case 2:
            echo 'febuary';
            break;
        case 3:
            echo 'march';
            break;
        default:
            echo 'Not data';
            break;
    }
    echo '<hr>';
    //loop
    //while loop
    $count = 1;
    $limit = 10;
    /*while ($count<=$limit){
        echo 'round '.$count.'<br>';
        $count++;
    }
    echo 'end';*/

    ?>

    <h2> list food</h2>
    <select name="" id="">
        <?php while ($count <= $limit) { ?>
            <option value="<?php echo $count; ?>">List number <?php echo $count; ?></option>
        <?php
            $count++;
        }
        ?>
    </select>
    <hr>

    <?php
    //for
    /*  for (ค่าเริ่มต้นของตัวแปร;เงื่อนไข,เปลี่ยนแปลงค่าตัวแปร){
        คำสั่งเมื่อเป็ร true;
    }*/
    for ($i = 1; $i <= 10; $i++) {
        echo 'round =' . $i . '<br>';
    }
    echo '<hr>';

    //Do__while = ลองทำ 1 รอบ แล้วตรวจสอบเงื่อนไข ถ้าจริงทำต่อ ถ้าเท็จออกจากลูป
    /*do{
        คำสั่งเมื่อจริงว
    } while(เงื่อนไข);*/

    $num = 1;
    $li = 5;

    do {
        //คำสั่งต่าง ๆ 
        echo 'hello =' . $num . '<br>';
        $num++;
    } while ($num < $li);
    echo '<hr>';

    /*break = หลุดจากการทำงานใน loopทันที,
    continue = หยุดการทำงานแล้วย้อนกลับไปเริ่มต้นที่ต้อนลูปใหม่ , 
    exit = ใหโปรแกรมหยุดทำงาน จะออกจากโปรแกรมทั้หมด
    */

    //function
    function show()
    {
        print('<b>Hello world </b>');
        print('<br>');
    }
    //เรีบกใช้
    show();
    echo '<br>';

    //function รับค่า
    function hello($name = 'world')
    {
        print('<b>hello ' . $name . '</b>');
    }
    //เรียก
    hello('PHP');
    echo '<br>';

    //function ส่งค่า
    function getAddress()
    {
        return 'Bangkok';
    }
    //เรียกใช้
    $city = getAddress();
    print('my address =' . $city);
    echo '<br>';

    /*ฟังก์ชันไฟล์ด้านนอก
    include() = โหลดไฟล์เข้ามาทำงาน ถ้าไม่เจอไฟล์จะแจ้งเตือนและข้ามไปทำงานส่วนอื่น
    include_one() = เหมือน include แต่เรียกใช้งานไฟล์แค่ครั้งเดียว
    require() = โหลดไฟล์เข้ามาทำงาน ถ้าหาไฟล์ไม่เจอจะแจ้งเตือนและหยุดการทำงาน
    require_one() = เหมือน require แต่เรียกใช้งงานไฟล์แค่ครั้งเดียว*/

    /* array = ชุดเก็บข้อมูล สามารถเก็บข้อมูลได้มากกว่า 1 ค่า*/
    // array เดี่ยว
    $number = array(10, 20, 30);
    $number[0] = 30;
    print($number[0].'<br>');
    print_r($number);

    // array จับคุ่ = สามารถกำหนด index เป็นข้อความได้
    $roomown = array('A01' => 'somchai', 'A02' => 'sommai', 'A03' => 'sompong');
    print($roomown['A01'].'<br>');

    //array แบบ range = range(start,stop,step)
    $rnumber = range(1, 20, 2);

    //array แบบ []
    $names = ['phet', 1, 'flim'];
    print($names[0].'<br>');

    //array for loop
    /*count($var) = นับจำนวนสมาชิกใน array
    array_count_values($var) = ใช้นับความถี่ของข้อมูลใน array ที่มีซ้ำกัน*/
    $fruit = ['mamoung', 'som', 'turean', 'tangmo', 'kanoon', 'som'];
    $totals = count($fruit);
    for ($index = 0; $index < $totals; $index++) {
        print($fruit[$index] . '<br>');
    }

    //array foreach
    $colors = ["yellow" => "สีเหลือง", "red" => "สีแดง", "orange" => "สีส้ม"];
    $animal = ['lion' => 'สิงโต', 'cat' => 'แมว', 'pig' => 'หมู', 'rabbit' => 'กระต่าย'];
    
    //แบบเดี่ยว
    foreach($number as $u){
        print($u.'<br>');
    }

    //แบบคู่
    foreach($animal as $key=>$value){
        print($key.' => '.$value.'<br>');
    }

    //array 2 มิติ 
    $products = array(
        array('keyboard','คียบอร์ด',1500),
        array('mouse','เมาส์',900),
        array('speaker','ลำโพง',2500),
    );

    //การเข้าถึง => แถว, คอลัมน์
    print($products[0][0].'<br>');
    print_r($products);
    echo '<br>';

    //array 2 มิติ for loop
    for($row=0;$row<count($products);$row++){
        print('ชิ้นที่ =>'.$row.'<br>');
        for($column=0;$column<count($products[$row]);$column++){
            print($products[$row][$column].'<br>');
        }
    }

    //array 2 มิติ foreach
    foreach($products as $product){
        print('ชื่อสินค้า = '.$product[0].'<br>');
        print('Name = '.$product[1].'<br>');
        print('ราคา = '.$product[2].'<br>');
    }
    echo '<br>';

    //เพิ่ม ลบ สมาชิก array
    /* (ชื่อ array,เพิ่ม หรือ ลบสมาชิกที่ต้องการเปลี่ยนแปลง)
    array_push() = เพิ่มตำแหน่งสุดท้าย
    array_pop() = ลบตำแหน่งสุดท้าย
    array_unshiftt() = เพิ่มตำแหน่งแรก
    array_shift() = เพิ่มตำแหน่งแรก
    */

    //แทรก array 
    /*
    array_splice() = แทรกเพื่อลบและ/หรือเพิ่มตำแหน่งที่ต้องการ
    ลบ = array_splice('ชื่อ array','ตำแหน่ง index','จำนวนที่ต้องการลบ');
    เพิ่ม = array_splice('ชื่อ array','ตำแหน่ง index',0,array());
    */

    //เรียงลำดับ array
    /*
    เดี่ยว
    sort() = น้อยไปมาก
    rsort() = มากไปน้อย
    คู่
    asort() = ข้อมูลน้อยไปมาก
    arsort() = ข้อมูลมากไปน้อย
    ksort() = indexน้อยไปมาก
    krsort() = indexมากไปน้อย
    */

    //สลับค่า array
    /*
    shuffle() = สุ่มค่า
    array_reverse() = คัดลอก array เดิม เพื่อนำไปสร้าง array ใหม่, arrayที่สร้างใหม่จะเรียงย้อนกลับ
    */

    //function ที่เกี่ยวกับ index และ value
    /*
    array_keys() ดึง index ทั้งหมดของ array
    array_value) ดึง value ทั้งหมดของ array
    array_flips() สลับ index กับ value
    array_unique() ลบข้อมูลซ้ำใน array
    array_key_exists(คีย์ที่ต้องการค้น,ชื่อ array) ตรวจสอบว่ามี index นี้ใน array หรือไม่
    in_array(ค่าที่ต้องการค้น,ชื่อ array) ตรวจสอบว่ามี value นี้ใน array หรือไม่
    array_merge() รวม array หากมี index ซ้ำ จะนำค่า array ชุดหลังทับชุดแรก
    array_merge_recursive() รวม array หากมี index ซ้ำ จะนำค่า array ชุดเก่าต่อท้ายชุดแรก
    array_combine() รวม array โดยใช้ array ตัวแรก เป็น index และใช้ array ตัวที่สองเป็น value
    */

    // จัดการ string
    /*
    strcmp() เทียบความสำคัญ ตัวพิมพ์ใหญ่จะมีค่ามากกว่าพิมพ์เล็ก -1 0 1
    strcasecmp() เทียบความสำคัญ ตัวใหญ่ตัวเบ็กมีค่าเท่ากัน
    strspn() หาจำนวนตัวอักษรใน str1 ที่พบใน str2
    strcspn() หาจำนวนตัวอักษรใน str1 ที่ไม่พบใน str2
    strlen(string) หาความยาวของ string
    trim() ตัดช่องว่างซ้าย-ขวาของข้อความ
    ltrim() ตัดช่องว่างด้านซ้าย
    rtrim() ตัดช่องว่างด้านขวา
    strtolower() เปลี่ยนเป็นพิมพ์เล็ก
    strtoupper() เปลี่ยนเป็นพิมพ์ใหญ่
    ucwords() เปลี่ยนตัวแรกของแต่ละคำเป็นพิมพ์ใหญ่
    ucfirst() เลี่ยนตัวแรกของข้อความเป็นพิมพ์ใหญ่
    implode(),join() รวม str ที่อยู่ใน array  ('อักขระพิเศษ',ชื่อ array)
    explode() แยก str แยกเก็บแบบ array มีอักขระพิเศษคั่นคำไว้เพื่อจะแยกคำออก
    substr() ใช้ตัดตัวอักษรที่ไม่ต้องการออกจาก str โดยระบุตำแหน่ง (ชื่อ array,ตำแหน่งที่จะเริ่มตัด,จำนวนตำแหน่งที่ถูกตัดเพิ่ม)
    str_split()แยก str ตามความยาวที่กำหนด (default=1)แล้วแยกเก็บแบบ array
    strstr() ค้นหาตัวอักษร ตัวเล็ก-ใหญ่แตกต่างกัน
    stristr() ค้นหาตัวอักษร ตัวเล็ก-ใหญ่เหมือนกัน
    str_replace() เปลี่ยน str
    strrev() กลับค่า str
    str_repeat() ทำซ้ำ str
    */

    //การเข้าและถอดรหัส string
    /*
    md5()/sha1() เข้ารหัสโดยคำนวณ str และส่งค่า hash กลับมา
    crypt() เข้ารหัสโดยสุ่มเวลามาทำงานร่วมด้วย
    base64_encode() เข้ารหัส str ด้วย base_64
    base64_decode() ถอดรหัส str ด้วย base_6
    */

    $pass = 'Kamonphet2545';
    echo 'รหัส = '.$pass.'<br>';
    echo 'md5 = '.md5($pass).'<br>';
    echo 'sha1 = '.sha1($pass).'<br>';
    echo 'crypt = '.crypt($pass,'po').'<br>'; //..dk เป็นตัวอะไรก็ได้
    echo 'base_64 = '.$resault=base64_encode($pass).'<br>';
    echo 'base_64 = '.base64_decode($resault).'<br>';

    //จัดการตัวเลขและเวลา
    /*
    ceil() ปัดเศษทศนิยมขึ้นทุกกรณี
    floor() ปัดเศษลงทุกกรณี
    round() ปัดเศษแบบมีกรณี
    number_format(var,ใส่หลักทศนิยม) จัดรูปแบบการแสดงผลตัวเลข
    time() แสดงวันที่และเวลาปัจจุบัน แสดงเป็นหน่วยวินาที
    date() แสดงวันที่และเวลา กำหนดรูปแบบลงผ่านพารามิเตอร์
        d = วันที่แบบ 2 หลัก 01-31
        j = วันที่แบบ 1 หลัก  1-31
        D = แสดงวันแบบตัวย่อ 3 ตัวอักษร sun mon
        l = แสดงวันแบบเต็ม
        W = แสดงสัปดาห์ของปี 0-52
        F = แสดงชื่อเดือนแบบเต็ม
        M = แสดงชื่อเดือนแบบย่อ 3 ตัวอักษร
        m = แสดงชื่อเดือนด้วยตัวเลข 2 หลัก
        n = แสดงชื่อเดือนด้วยตัวเลข 1 หลัก
        t = แสดงจำนวนวันของเดือน
        y = แสดงปี ค.ศ เลขท้าย 2 หลัก
        Y = แสดงปี ค.ศ แบบเต็ม
        a = แสดงเวลาช่วงเช้าหรือช่วงบ่าย am pm
        A = แสดงเวลาช่วงเช้าหรือช่วงบ่าย AM PM
        g = แสดงชั่วโมงในรูปแบบ 12 ชม 1-12
        G = แสดงชั่วโมงในรูปแบบ 24 ชม 0-23
        h = แสดงชั่วโมงในรูปแบบ 12 ชม 01-12
        H = แสดงชั่วโมงในรูปแบบ 24 ชม 00-23
        i = แสดงนาที
        s = แสดงวินาที
        c = วันที่และเวลาแบบตามมาตรฐาน ISO-8601
        r = รูปแยยวันที่ในอีเมล RFC 2822
    date_default_timezone_set() เซ็ทไทม์โซน ('asia/Bangkok')
    getdate() แสดงวันเวลาที่ต้องการ
        hours/minutes/second
        mday/wday/mon/year/yday
        weekday/month/timestamp
    checkdate() ตรวจสอบความถูกต้องของวัน
        int month/day/year
        bool checkdate(int mount,int day,int year)
    */

    ?>

    <hr>
    <form action="">
        <label for="">name</label>
        <input type="text" name="" id="" value="<?php echo "Phet" ?>">
        <label for="">sername</label>
        <input type="text" name="" id="" value="<?php echo "Sirirattanasakkul" ?>">

    </form>
</body>

</html>