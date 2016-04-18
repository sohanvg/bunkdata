<?php
echo "<body>";
echo '<link rel="stylesheet" type="text/css" href="/laravel/chik/public/style.css">';
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::post('/insert/datainserted', function () {

$db = new mysqli("localhost","root","sohan","bunk");

$a = $_POST["salesid"];
$b = $_POST["cashsales"];
$c = $_POST["netsales"];
$d = $_POST["creditsales"];
$f = $_POST["grandsales"];
$g = $_POST["cashreceived"];
$h = $_POST["openingcash"];
$i = $_POST["balance"];


$qry = sprintf('INSERT INTO sales VALUES("%s","%d","%d","%d","%d","%d","%d","%d",CURRENT_DATE)',$a,$b,$c,$d,$f,$g,$h,$i);
$con = $db->query($qry);


if($con){
	echo "<br><br><center>Sales data inserted</center>";
}else{
	echo "<br><br><center>Sales data not inserted</center>";
}
//echo '<a href="../view1">View</a>';


$j = $_POST["tankno"];
$k = $_POST["densitymeasurement"];
$l = $_POST["afterdecant"];
$m = $_POST["employeeid"];
$when = date("y-m-d");


 
$qry2 = sprintf('INSERT INTO tank VALUES("%s","%f","%f","%s",CURRENT_DATE)',$j,$k,$l,$m);
$con2 = $db->query($qry2);

if($con2){
	echo "<br><center>Tank data inserted</center>";

}else{
	echo "<br><center>Tank data not inserted</center>";
}
	//echo '<a href="../view1">View</a>';

$n = $_POST["othersid"];
$o = $_POST["drops"];
$p = $_POST["ownuse"];
$q = $_POST["expenses"];
$r = $_POST["kebreading"];
$s = $_POST["pumptest"];
$t = $_POST["receipts"];
$u = $_POST["employeeid"];



$qry3 = sprintf('INSERT INTO others VALUES("%s","%f","%f","%f","%f","%f","%s","%s",CURRENT_DATE)',$n,$o,$p,$q,$r,$s,$t,$u);
$con3 = $db->query($qry3);


if($con3){
	echo "<br><center>Others data inserted</center>";
}else{
	echo "<br><center>Others data not inserted</center>";
}
//echo '<a href="../view1">View</a>';


$v = $_POST["meterid"];
$w = $_POST["openingdip"];
$x = $_POST["closingdip"];
$y = $_POST["openingstock"];
$z = $_POST["closingstock"];
$a1 = $_POST["omr"];
$b1 = $_POST["cmr"];

$datee = date ("y-m-d");





$qry4 = sprintf('INSERT INTO meter VALUES("%s","%f","%f","%f","%f","%f","%f",CURRENT_DATE)',$v,$w,$x,$y,$z,$a1,$b1);
$con4 = $db->query($qry4);


if($con4){
	echo "<br><center>HSD1 data inserted</center>";
}else{
	echo "<br><center>HSD1 data not inserted</center>";
}
//echo '<a href="../view1">View</a>';

$d1 = $_POST["meterid"];
$e1 = $_POST["openingdip"];
$f1 = $_POST["closingdip"];
$g1 = $_POST["openingstock"];
$h1 = $_POST["closingstock"];
$i1 = $_POST["omr"];
$j1 = $_POST["cmr"];

$datee = date ("y-m-d");




$qry5 = sprintf('INSERT INTO meter1 VALUES("%s","%f","%f","%f","%f","%f","%f",CURRENT_DATE)',$d1,$e1,$f1,$g1,$h1,$i1,$j1);
$con5 = $db->query($qry5);


if($con5){
	echo "<br><center>HSD2 data inserted</center>";
}else{
	echo "<br><center>HSD2 data not inserted</center>";
}
//echo '<a href="../view1">View</a>';


$l1 = $_POST["meterid"];
$m1 = $_POST["openingdip"];
$n1 = $_POST["closingdip"];
$o1= $_POST["openingstock"];
$p1 = $_POST["closingstock"];
$q1 = $_POST["omr"];
$r1 = $_POST["cmr"];

$datee = date ("y-m-d");



$qry6 = sprintf('INSERT INTO meter2 VALUES("%s","%f","%f","%f","%f","%f","%f",CURRENT_DATE)',$l1,$m1,$n1,$o1,$p1,$q1,$r1);
$con6 = $db->query($qry6);


if($con6){
	echo "<br><center>HSD3 data inserted</center>";
}else{
	echo "<br><center>HSD3 data not inserted</center>";
}
//echo '<a href="../view1">View</a>';


$t1 = $_POST["meterid"];
$u1 = $_POST["openingdip"];
$v1 = $_POST["closingdip"];
$w1 = $_POST["openingstock"];
$x1 = $_POST["closingstock"];
$y1 = $_POST["omr"];
$z1 = $_POST["cmr"];
$datee = date ("y-m-d");



$qry7 = sprintf('INSERT INTO meter3  VALUES("%s","%f","%f","%f","%f","%f","%f",CURRENT_DATE)',$t1,$u1,$v1,$w1,$x1,$y1,$z1);
$con7 = $db->query($qry7);


if($con7){
	echo "<br><center>TURBO1 data inserted</center>";
}else{
	echo "<br><center>TURBO1 data not inserted</center>";
}
//echo '<a href="../view1">View</a>';


$b2 = $_POST["meterid"];
$c2 = $_POST["openingdip"];
$d2 = $_POST["closingdip"];
$e2= $_POST["openingstock"];
$f2 = $_POST["closingstock"];
$g2 = $_POST["omr"];
$h2 = $_POST["cmr"];



$qry8 = sprintf('INSERT INTO meter4 VALUES("%s","%f","%f","%f","%f","%f","%f",CURRENT_DATE)',$b2,$c2,$d2,$e2,$f2,$g2,$h2);
$con8 = $db->query($qry8);


if($con8){
	echo "<br><center>TURBO2 data inserted</center>";
}else{
	echo "<br><center>TURBO2 data not inserted</center>";
}
//echo '<a href="../view1">View</a>';


$j2 = $_POST["meterid"];
$k2 = $_POST["openingdip"];
$l2 = $_POST["closingdip"];
$m2= $_POST["openingstock"];
$n2 = $_POST["closingstock"];
$o2 = $_POST["omr"];
$p2 = $_POST["cmr"];

$datee = date ("y-m-d");



$qry9 = sprintf('INSERT INTO meter5 VALUES("%s","%f","%f","%f","%f","%f","%f",CURRENT_DATE)',$j2,$k2,$l2,$m2,$n2,$o2,$p2);
$con9 = $db->query($qry9);


if($con9){
	echo "<br><center>TURBO3 data inserted</center>";
}else{
	echo "<br><center>TURBO3 data not inserted</center>";
}
echo '<br><center><a href="../view1">View</a></center>';



});

Route::get('/insert',function(){
    //    echo '<center><big><font size="18">UPDATE WHICH FIELD?</font><br><br><br><big></center>';
	// echo '<a href="owner"><th><center><b><big><br>OWNER</big></b></center></th></a>';
	// echo '<a href="supplier"><th><center><b><big><br>SUPPLIER</big></b></center></th></a>';
	// echo '<a href="sales"><th><center><b><big><br>SALES</big></b></center></th></a>';
	// echo '<a href="employee"><th><center><b><big><br>EMPLOYEE</big></b></center></th></a>';
	// echo '<a href="meter"><th><center><b><big><br>METER</big></b></center></th></a>';
	// echo '<a href="others"><th><center><b><big><br>OTHERS</big></b></center></th></a>';
	// echo '<a href="tank"><th><center><b><big><br>TANK</big></b></center></th></a>';

$db = new mysqli("localhost","root","sohan","bunk");
$qry = sprintf("SELECT closing_dip FROM meter WHERE datee = CURRENT_DATE ORDER BY datee DESC LIMIT 1 ");
$qht = $db ->query($qry);
$num = $qht->fetch_assoc();
if(isset($num["closing_dip"])){
	echo 'You have already updated todays work. Please go here!!<br><a href="/laravel/chik/public/first1">Home</a>';
}else{
	$closing_dip = $num["closing_dip"];
	echo '<form method="post" action="insert/datainserted" class="col-parent">

<div class="col">
<h3>Sales</h3>
<input type="string" name="salesid" placeholder="sales id">
<input type="int" name="cashsales" placeholder="cash sales">
<input type="int" name="netsales" placeholder="net sales">
<input type="int" name="creditsales" placeholder="credit sales">
<input type="int" name="grandsales" placeholder="grand sales">
<input type="int" name="cashreceived" placeholder="cash received">
<input type="int" name="openingcash" placeholder="opening cash">
<input type="int" name="balance" placeholder="balance">

</div>
<div class="col"><h3>Tank</h3>
<input type="string" name="tankno" placeholder="tank no">
<input type="float" name="densitymeasurement" placeholder="density measurement">
<input type="float" name="afterdecant" placeholder="after decant">
<input type="string" name="employeeid" placeholder="employee id">
</div>
<div class="col">
<h3> Others </h3>

<input type="string" name="othersid" placeholder="others id">
<input type="float" name="drops" placeholder="drops">
<input type="float" name="ownuse" placeholder="own use">
<input type="float" name="expenses" placeholder="expenses">
<input type="float" name="kebreading" placeholder="keb reading">
<input type="float" name="pumptest" placeholder="pump test">
<input type="string" name="receipts" placeholder="receipts">
<input type="string" name="employeeid" placeholder="employee id">
</div>
<div class="col-parent col-6">
<h2>Meters</h2>
<div class="col">
<h3>HSD 1</h3>
<input type="string" name="meterid" placeholder="meter id">
<input type="float" name="openingdip" placeholder="opening dip">
<input type="float" name="closingdip" placeholder="closing dip">
<input type="float" name="openingstock" placeholder="opening stock">
<input type="float" name="closingstock" placeholder="closing stock">
<input type="float" name="omr" placeholder="omr">
<input type="float" name="cmr" placeholder="cmr">
</div>

<div class="col">
<h3>HSD 2</h3>
<input type="string" name="meterid" placeholder="meter id">
<input type="float" name="openingdip" placeholder="opening dip">
<input type="float" name="closingdip" placeholder="closing dip">
<input type="float" name="openingstock" placeholder="opening stock">
<input type="float" name="closingstock" placeholder="closing stock">
<input type="float" name="omr" placeholder="omr">
<input type="float" name="cmr" placeholder="cmr">
</div>

<div class="col">
<h3>HSD 3</h3>
<input type="string" name="meterid" placeholder="meter id">
<input type="float" name="openingdip" placeholder="opening dip">
<input type="float" name="closingdip" placeholder="closing dip">
<input type="float" name="openingstock" placeholder="opening stock">
<input type="float" name="closingstock" placeholder="closing stock">
<input type="float" name="omr" placeholder="omr">
<input type="float" name="cmr" placeholder="cmr">
</div>

<div class="col">
<h3>TURBO 1</h3>
<input type="string" name="meterid" placeholder="meter id">
<input type="float" name="openingdip" placeholder="opening dip">
<input type="float" name="closingdip" placeholder="closing dip">
<input type="float" name="openingstock" placeholder="opening stock">
<input type="float" name="closingstock" placeholder="closing stock">
<input type="float" name="omr" placeholder="omr">
<input type="float" name="cmr" placeholder="cmr">
</div>


<div class="col">
<h3>TURBO 2</h3>
<input type="string" name="meterid" placeholder="meter id">
<input type="float" name="openingdip" placeholder="opening dip">
<input type="float" name="closingdip" placeholder="closing dip">
<input type="float" name="openingstock" placeholder="opening stock">
<input type="float" name="closingstock" placeholder="closing stock">
<input type="float" name="omr" placeholder="omr">
<input type="float" name="cmr" placeholder="cmr">
</div>


<div class="col">
<h3>TURBO 3</h3>
<input type="string" name="meterid" placeholder="meter id">
<input type="float" name="openingdip" placeholder="opening dip">
<input type="float" name="closingdip" placeholder="closing dip">
<input type="float" name="openingstock" placeholder="opening stock">
<input type="float" name="closingstock" placeholder="closing stock">
<input type="float" name="omr" placeholder="omr">
<input type="float" name="cmr" placeholder="cmr">
</div>


</div>
<input class="big_submit" type="submit">
</form> ';


}
	
});

Route::get('/view',function(){
// echo '<center><big><font size="10">WHICH TABLE PREVIEW?</font><br><br><br><big></center>';
// 	echo '<a href="owner/show"><th><center><b><big><br>OWNER</big></b></center></th></a>';
// 	echo '<a href="supplier/show"><th><center><b><big><br>SUPPLIER</big></b></center></th></a>';
// 	echo '<a href="sales/show"><th><center><b><big><br>SALES</big></b></center></th></a>';
// 	echo '<a href="employee/show"><th><center><b><big><br>EMPLOYEE</big></b></center></th></a>';
// 	echo '<a href="meter/show"><th><center><b><big><br>METER</big></b></center></th></a>';
// 	echo '<a href="others/show"><th><center><b><big><br>OTHERS</big></b></center></th></a>';
// 	echo '<a href="tank/show"><th><center><b><big><br>TANK</big></b></center></th></a>';
});


Route::get('/view1', function () {
echo "<div class=\"wrap\">";
echo "<h2 class=\"mini-title\">Please select a date</h2>";
echo "<form action=\"#\"><input  name=\"need\" type=\"date\"><input type=\"submit\"> </form>";


$db = new mysqli("localhost","root","sohan","bunk");
echo '<div class="mini-title">METER DETAILS</div>';
echo "<table cellpadding=0 cellspacing=0>";
echo "<tr><th>PARTICULARS</th><th>HSD 1</th><th>HSD 2</th><th>HSD 3</th><th>TURBO 1</th><th>TURBO 2</th><th>TURBO 3</th></tr>";
echo "<tr><td>OPENING DIP</td>";

$need_date = (isset($_GET["need"])) ? $_GET["need"] : date("Y-m-d");

for($i=0;$i<=5;$i++){
	$table = "meter";
	$table = ($i>=1) ? $table.$i : $table ;
	$qry = sprintf('SELECT * FROM %s WHERE datee = "%s"',$table,$need_date);
	$r = $db->query($qry);
	$details = $r->fetch_assoc();

echo "<td>".$details["opening_dip"]."</td>";
//echo "<td>".$details["closing_dip"]."</td>";
// echo "<td>".$details["opening_stock"]."</td>";
// echo "<td>".$details["closing_stock"]."</td>";
// echo "<td>".$details["omr"]."</td>";
// echo "<td>".$details["cmr"]."</td>";
}
echo "<tr><td>CLOSING DIP</td>";
for($i=0;$i<=5;$i++){
	$table = "meter";
	$table = ($i>=1) ? $table.$i : $table ;
	$qry = sprintf('SELECT * FROM %s WHERE datee = "%s"',$table,$need_date);
	$r = $db->query($qry);
	$details = $r->fetch_assoc();

//echo "<td>".$details["opening_dip"]."</td>";
echo "<td>".$details["closing_dip"]."</td>";
// echo "<td>".$details["opening_stock"]."</td>";
// echo "<td>".$details["closing_stock"]."</td>";
// echo "<td>".$details["omr"]."</td>";
// echo "<td>".$details["cmr"]."</td>";
}
echo "<tr><td>OPENING STOCK</td>";
for($i=0;$i<=5;$i++){
	$table = "meter";
	$table = ($i>=1) ? $table.$i : $table ;
	$qry = sprintf('SELECT * FROM %s WHERE datee = "%s"',$table,$need_date);
	$r = $db->query($qry);
	$details = $r->fetch_assoc();

//echo "<td>".$details["opening_dip"]."</td>";
// echo "<td>".$details["closing_dip"]."</td>";
 echo "<td>".$details["opening_stock"]."</td>";
// echo "<td>".$details["closing_stock"]."</td>";
// echo "<td>".$details["omr"]."</td>";
// echo "<td>".$details["cmr"]."</td>";
}
echo "<tr><td>CLOSING STOCK</td>";
for($i=0;$i<=5;$i++){
	$table = "meter";
	$table = ($i>=1) ? $table.$i : $table ;
	$qry = sprintf('SELECT * FROM %s WHERE datee = "%s"',$table,$need_date);
	$r = $db->query($qry);
	$details = $r->fetch_assoc();

//echo "<td>".$details["opening_dip"]."</td>";
// echo "<td>".$details["closing_dip"]."</td>";
// echo "<td>".$details["opening_stock"]."</td>";
 echo "<td>".$details["closing_stock"]."</td>";
// echo "<td>".$details["omr"]."</td>";
// echo "<td>".$details["cmr"]."</td>";
}
echo "<tr><td>OMR</td>";

for($i=0;$i<=5;$i++){
	$table = "meter";
	$table = ($i>=1) ? $table.$i : $table ;
	$qry = sprintf('SELECT * FROM %s WHERE datee = "%s"',$table,$need_date);
	$r = $db->query($qry);
	$details = $r->fetch_assoc();

//echo "<td>".$details["opening_dip"]."</td>";
// echo "<td>".$details["closing_dip"]."</td>";
// echo "<td>".$details["opening_stock"]."</td>";
// echo "<td>".$details["closing_stock"]."</td>";
 echo "<td>".$details["omr"]."</td>";
// echo "<td>".$details["cmr"]."</td>";
}
echo "<tr><td>CMR</td>";
for($i=0;$i<=5;$i++){
	$table = "meter";
	$table = ($i>=1) ? $table.$i : $table ;
	$qry = sprintf('SELECT * FROM %s WHERE datee = "%s"',$table,$need_date);
	$r = $db->query($qry);
	$details = $r->fetch_assoc();

//echo "<td>".$details["opening_dip"]."</td>";
// echo "<td>".$details["closing_dip"]."</td>";
// echo "<td>".$details["opening_stock"]."</td>";
// echo "<td>".$details["closing_stock"]."</td>";
// echo "<td>".$details["omr"]."</td>";
 echo "<td>".$details["cmr"]."</td>";
} 


echo "</tr>";
echo "</table>";


$qry2 = sprintf("SELECT * FROM sales   WHERE whenn = '%s'",$need_date);
$con2 = $db->query($qry2);
echo '<div class="mini-title">Sales DETAILS</div>';

echo "<table cellpadding=0 cellspacing=0>";
echo "<tr><th>sales id</th><th>cash sales</th><th>net sales</th><th>credit sales</th>
<th>grand sales</th>
<th>cash received</th>
<th>opening cash</th>
<th>balance</th>";
while($s1 = $con2->fetch_assoc()){

echo  "<tr>";
echo "<td>".$s1["sale_id"]."</td>";
echo "<td>".$s1["cash_sales"]."</td>";
echo "<td>".$s1["net_sales"]."</td>";
echo "<td>".$s1["credit_sales"]."</td>";
echo "<td>".$s1["g_sales"]."</td>";
echo "<td>".$s1["cash_received"]."</td>";
echo "<td>".$s1["opening_cash"]."</td>";
echo "<td>".$s1["balance"]."</td>";
echo "</tr>";
}

echo "</table>";

$qry3 = sprintf("SELECT * FROM others  WHERE whenn = '%s'",$need_date);
$con3 = $db->query($qry3);
echo '<div class="mini-title">Others DETAILS</div>';

echo "<table cellpadding=0 cellspacing=0 >";
echo "<tr><th>others id</th><th>drops</th><th>own use</th><th>expenses</th>
<th>keb reading</th>
<th>pump test</th>
<th>receipts</th>
";
while($s = $con3->fetch_assoc()){

echo  "<tr>";
echo "<td>".$s["others_id"]."</td>";
echo "<td>".$s["drops"]."</td>";
echo "<td>".$s["own_use"]."</td>";
// echo "<td>".$s["expenses"]."</td>";
echo "<td>".$s["keb_reading"]."</td>";
echo "<td>".$s["pump_test"]."</td>";
echo "<td>".$s["receipts"]."</td>";
echo "<td>".$s["emp_id"]."</td>";
echo "</tr>";


}

echo "</table>";

	$qry4 = sprintf("SELECT * FROM tank WHERE whenn = '%s'",$need_date);
$con4 = $db->query($qry4);
echo '<div class="mini-title">tank DETAILS</div>';

echo "<table cellpadding=0 cellspacing=0>";
echo "<tr><th>tank no</th><th>Density measurement</th><th>After decant</th>";
while($s = $con4->fetch_assoc()){

echo  "<tr>";
echo "<td>".$s["tank_no"]."</td>";
echo "<td>".$s["density_measurement"]."</td>";
echo "<td>".$s["after_decant"]."</td>";
echo "</tr>";

}


echo "</table></div?>";


// echo '<a href="../supplier">Insert again</a>';
// echo '<a href="http://localhost/laravel/chik/public/"><br>Home</a>';

});


Route::get('/edit',function(){
	
    echo '<center><big><font size="10">EDIT WHICH TABLE?</font><br><br><br><big></center>';
	echo '<a href="edit"><th><center><b><big><br>OWNER</big></b></center></th></a>';
	echo '<a href="edit"><th><center><b><big><br>SUPPLIER</big></b></center></th></a>';
	echo '<a href="edit"><th><center><b><big><br>SALES</big></b></center></th></a>';
	

	

});

Route::get('/',function(){

if(isset($_GET["u"]) && $_GET["p"]){
	$db = new mysqli("localhost","root","sohan","bunk");
	$qry = sprintf("SELECT * FROM owner WHERE username = '%s' and owner_ph_no = '%s'",$_GET["u"],$_GET["p"]);
	if($db->query($qry)){
		header("Location:http://localhost/laravel/chik/public/first1");
		exit();	
	}
}
	echo "<br><br><br><br><center><h3>LOGIN OR SIGNUP</h3></center>";
	echo '<center><form method="get" action="#" autocomplete="off">
	<input type="text" placeholder="username" value="" name="u">
	<input type="password" placeholder="passsword" value="" name="p">
	<input type="submit" value="login">
	</form></center>';

    echo '<center><a href="http://localhost/laravel/chik/public/owner">Signup</a></center>';
});
Route::get('/first1',function(){
	echo '<header><div href="#nav"id="ham">Menu<div id="nav"><div class="nav-wrap"><ul><li><h2>MENU</h2></li><li><a href="http://localhost/laravel/chik/public/first1">Home</a></li><li><a href="http://localhost/laravel/chik/public/owner/show">Profile</a></li><li><a href="http://localhost/laravel/chik/public/employee/show">Employee</a></li><li><a href="http://localhost/laravel/chik/public/supplier/show">Supplier</a></li><li><a href="../public">Logout</a></li></ul></div></div></div>';
	echo '<center><b><big><font size="18"> PETROL BUNK DATA MANAGEMENT</font></big></b></center></header>';
	echo '<br><br><br><br><br><br><br><br><br><br><div class="home_links"><a style="background:#4fc1e9;color:#fff;" href="insert"><th><center><b><big>UPDATE YOUR DAILY WORK</big></b></center></th></a>';
	echo '<a style="background:#1abc9c;color:#fff;" href="view1"><th><center><b><big>VIEW PREVIOUS UPDATES</big></b></center></th></a>';
	echo '<a style="background:#e67e22;color:#fff;" href="details/edit"><th><center><b><big>EDIT PREVIOUS UPDATES</big></b></center></th></a></div>';
    // echo '<br><center><a href="http://localhost/laravel/chik/public/owner/show">Profile</a> ';
    // echo '<a href="">Your Employee</a> ';
    // echo '<a href="">Your Supplier</a> ';
    // echo '<a href="">Logout</a></center>';
});




// Beginning of owner table

Route::post('/owner/add', function () {


$db = new mysqli("localhost","root","sohan","bunk");

$f = $_POST["string"];
$g = $_POST["text"];
$e = $_POST["double"];
$h = $_POST["email"];


$qry = sprintf('INSERT INTO owner VALUES("%s","%s","%d","%s",CURRENT_DATE)',$f,$g,$e,$h);
$con = $db->query($qry);


if($con){
	echo "Signed In";

}else{
	echo "Data not inserted";
}
	echo '<a href="http://localhost/laravel/chik/public/first1">Next</a>';


});

Route::get('/owner', function () {
    echo "<br><br><br><center><h2>Sign Up</h2></center>";

echo '<center><form method="post" action="owner/add">
<br>
<input type="string" name="string" placeholder="username">
<br>
<input type="text" name="text" placeholder="name">
<br> 
<input type="string" name="double" placeholder="phone number">
<br>
<input type="email" name="email" placeholder="email id">
<input type="submit">
</form> </center>';
});





Route::get('/owner/show',function(){

$db = new mysqli("localhost","root","sohan","bunk");
	$qry1 = sprintf("SELECT * FROM owner");
$con1 = $db->query($qry1);
echo '<th>OWNER DETAILS</th>';
echo "<table border=\"1\">";
echo "<tr><th>username</th><th>name</th><th>Phone</th><th>Email</th>";
while($s = $con1->fetch_assoc()){

echo  "<tr>";
echo "<td>".$s["username"]."</td>";
echo "<td>".$s["owner_name"]."</td>";
echo "<td>".$s["owner_ph_no"]."</td>";
echo "<td>".$s["owner_email_id"]."</td>";
echo "</tr>";

}


echo "</table>";
echo '<a href="http://localhost/laravel/chik/public/first1">Home</a>';


});

//end of owner table



//beginning of Supplier table
Route::post('/supplier/add', function () {

$db = new mysqli("localhost","root","sohan","bunk");

$f = $_POST["string"];
$g = $_POST["text"];
$e = $_POST["phone"];
$h= $_POST["email"];
$i = $_POST["estring"];

echo $f;
echo $g;
echo $e;
echo $h;
echo $i;

$qry = sprintf('INSERT INTO supplier VALUES("%s","%s","%d","%s","%s")',$f,$g,$e,$h,$i);
$con = $db->query($qry);


if($con){
	echo "Data inserted";
}else{
	echo "Data not inserted";
}
echo '<a href="http://localhost/laravel/chik/public/view1">View</a>';





});


Route::get('/supplier', function () {
    echo 'You are in supplier\'sdome ';

echo '<form method="post" action="supplier/add">
<br>
<input type="string" name="string" placeholder="supplier id">
<br>
<input type="text" name="text" placeholder="supplier name">
<br>
<input type="string" name="phone" placeholder="supplier phone no">
<br>
<input type="email" name="email" placeholder="supplier email id">
<br>
<input type="string" name="estring" placeholder="username">
<input type="submit">
</form> ';

});

Route::get('/supplier/show',function(){

$db = new mysqli("localhost","root","sohan","bunk");
	$qry1 = sprintf("SELECT * FROM supplier");
$con1 = $db->query($qry1);
echo '<th>SUPPLIER DETAILS</th>';
echo "<table border=\"1\">";
echo "<tr><th>supplier id</th><th>name</th><th>Phone</th><th>Email</th><th>Ownerid</th>";
while($s = $con1->fetch_assoc()){

echo  "<tr>";
echo "<td>".$s["supplier_id"]."</td>";
echo "<td>".$s["supplier_name"]."</td>";
echo "<td>".$s["supplier_ph_no"]."</td>";
echo "<td>".$s["supplier_email_id"]."</td>";
echo "<td>".$s["owner_id"]."</td>";
echo "</tr>";



}

echo "</table>";
echo '<a href="../supplier">Add Supplier</a>';

});
//end of supplier table


//beginning of sales table
Route::post('/sales/add', function () {

$db = new mysqli("localhost","root","sohan","bunk");

$f = $_POST["string"];
$g = $_POST["text"];
$e = $_POST["phone"];
$h= $_POST["email"];
$i = $_POST["estring"];
$j = $_POST["e1string"];
$k = $_POST["e2string"];
$l = $_POST["e3string"];
$m = $_POST["e4string"];

echo $f;
echo $g;
echo $e;
echo $h;
echo $i;
echo $j;
echo $k;
echo $l;
echo $m;

$qry = sprintf('INSERT INTO sales VALUES("%s","%d","%d","%d","%d","%d","%d","%d","%s")',$f,$g,$e,$h,$i,$j,$k,$l,$m);
$con = $db->query($qry);


if($con){
	echo "Data inserted";
}else{
	echo "Data not inserted";
}
echo '<br><a href="../sales">Insert again</a> OR <a href="../sales/show">View</a>';





});

Route::get('/sales', function () {
    echo 'You are in sales\'sdome ';

echo '<form method="post" action="sales/add">
<br>
<input type="string" name="string" placeholder="sales id">
<br>
<input type="int" name="text" placeholder="cash sales">
<br>
<input type="int" name="phone" placeholder="net sales">
<br>
<input type="int" name="email" placeholder="credit sales">
<br>
<input type="int" name="estring" placeholder="grand sales">
<br>
<input type="int" name="e1string" placeholder="cash received">
<br>
<input type="int" name="e2string" placeholder="opening cash">
<br>
<input type="int" name="e3string" placeholder="balance">
<br>
<input type="string" name="e4string" placeholder="username">
<input type="submit">
</form> ';
echo '<a href="sales/show">View</a>';
echo '<a href="../public"><br>Home</a>';
});

Route::get('/sales/show',function(){

$db = new mysqli("localhost","root","sohan","bunk");
	$qry1 = sprintf("SELECT * FROM sales");
$con1 = $db->query($qry1);
echo '<th>SALES DETAILS</th>';
echo "<table border=\"1\">";
echo "<tr><th>sales id</th><th>cash sales</th><th>net sales</th><th>credit sales</th>
<th>geand sales</th>
<th>cash received</th>
<th>opening cash</th>
<th>balance</th>
<th>Ownerid</th>";
while($s = $con1->fetch_assoc()){

echo  "<tr>";
echo "<td>".$s["sale_id"]."</td>";
echo "<td>".$s["cash_sales"]."</td>";
echo "<td>".$s["net_sales"]."</td>";
echo "<td>".$s["credit_sales"]."</td>";
echo "<td>".$s["g_sales"]."</td>";
echo "<td>".$s["cash_received"]."</td>";
echo "<td>".$s["opening_cash"]."</td>";
echo "<td>".$s["balance"]."</td>";
echo "<td>".$s["username"]."</td>";
echo "</tr>";


}

echo "</table>";
echo '<a href="../sales">Insert again</a>';
echo '<a href="http://localhost/laravel/chik/public/"><br>Home</a>';
});






//end of sales table

//beginning of employee table
Route::post('/employee/add', function () {

$db = new mysqli("localhost","root","sohan","bunk");

$f = $_POST["string"];
$g = $_POST["text"];
$e = $_POST["salary"];
$h= $_POST["phone"];
$i = $_POST["estring"];
$j = $_POST["e1string"];

echo $f;
echo $g;
echo $e;
echo $h;
echo $i;
echo $j;

$qry = sprintf('INSERT INTO employee VALUES("%s","%s","%lf","%s","%s","%s")',$f,$g,$e,$h,$i,$j);
$con = $db->query($qry);


if($con){
	echo "Data inserted";
}else{
	echo "Data not inserted";
}
echo '<br><a href="../employee">Insert again</a> OR <a href="../employee/show">View</a>';





});

Route::get('/employee', function () {
    echo 'You are in employee\'sdome ';

echo '<form method="post" action="employee/add">
<br>
<input type="string" name="string" placeholder="employee id">
<br>
<input type="text" name="text" placeholder="employee name">
<br>
<input type="double" name="salary" placeholder="employee salary">
<br>
<input type="string" name="phone" placeholder="employee phone no">
<br>
<input type="string" name="estring" placeholder="employee address">
<br>
<input type="string" name="e1string" placeholder="username">
<input type="submit">
</form> ';
echo '<a href="employee/show">View</a>';
echo '<a href="../public"><br>Home</a>';
});

Route::get('/employee/show',function(){

$db = new mysqli("localhost","root","sohan","bunk");
	$qry1 = sprintf("SELECT * FROM employee");
$con1 = $db->query($qry1);
echo '<th>EMPLOYEE DETAILS</th>';
echo "<table border=\"1\">";
echo "<tr><th>employee id</th><th>name</th><th>salary</th><th>phone</th><th>address</th><th>Ownerid</th>";
while($s = $con1->fetch_assoc()){

echo  "<tr>";
echo "<td>".$s["emp_id"]."</td>";
echo "<td>".$s["emp_name"]."</td>";
echo "<td>".$s["emp_salary"]."</td>";
echo "<td>".$s["emp_ph_no"]."</td>";
echo "<td>".$s["emp_address"]."</td>";
echo "<td>".$s["owner_id"]."</td>";
echo "</tr>";


}

echo "</table>";
echo '<a href="../employee">Add Employee</a>';

});

//end of employee table

//beginning of meter table
Route::post('/meter/add', function () {

$db = new mysqli("localhost","root","sohan","bunk");

$f = $_POST["string"];
$g = $_POST["text"];
$e = $_POST["phone"];
$h= $_POST["email"];
$i = $_POST["estring"];
$j = $_POST["e1string"];
$k = $_POST["e2string"];
$l = $_POST["e3string"];


echo $f;
echo $g;
echo $e;
echo $h;
echo $i;
echo $j;
echo $k;
echo $l;


$qry = sprintf('INSERT INTO meter VALUES("%s","%f","%f","%f","%f","%f","%f","%s")',$f,$g,$e,$h,$i,$j,$k,$l);
$con = $db->query($qry);


if($con){
	echo "Data inserted";
}else{
	echo "Data not inserted";
}
echo '<br><a href="../meter">Insert again</a> OR <a href="../meter/show">View</a>';





});

Route::get('/meter', function () {
    echo 'You are in meter\'sdome ';

echo '<form method="post" action="meter/add">
<br>
<input type="string" name="string" placeholder="meter id">
<br>
<input type="float" name="text" placeholder="opening dip">
<br>
<input type="float" name="phone" placeholder="closing dip">
<br>
<input type="float" name="email" placeholder="opening stock">
<br>
<input type="float" name="estring" placeholder="closing stock">
<br>
<input type="float" name="e1string" placeholder="omr">
<br>
<input type="float" name="e2string" placeholder="cmr">
<br>
<input type="string" name="e3string" placeholder="employee id">
<input type="submit">
</form> ';
echo '<a href="meter/show">View</a>';
echo '<a href="http://localhost/laravel/chik/public/"><br>Home</a>';
});

Route::get('/meter/show',function(){

$db = new mysqli("localhost","root","sohan","bunk");
	$qry1 = sprintf("SELECT * FROM meter");
$con1 = $db->query($qry1);
echo '<th>METER DETAILS</th>';
echo "<table border=\"1\">";
echo "<tr><th>meter id</th><th>opening dip</th><th>closing dip</th><th>opening stock</th>
<th>closing stock</th>
<th>omr</th>
<th>cmr</th>
<th>employee id</th>";
while($s = $con1->fetch_assoc()){

echo  "<tr>";
echo "<td>".$s["meter_id"]."</td>";
echo "<td>".$s["opening_dip"]."</td>";
echo "<td>".$s["closing_dip"]."</td>";
echo "<td>".$s["opening_stock"]."</td>";
echo "<td>".$s["closing_stock"]."</td>";
echo "<td>".$s["omr"]."</td>";
echo "<td>".$s["cmr"]."</td>";
echo "<td>".$s["emp_id"]."</td>";
echo "</tr>";


}

echo "</table>";
echo '<a href="../meter">Insert again</a>';
echo '<a href="http://localhost/laravel/chik/public/"><br>Home</a>';
});

//end of meter table

//beginning of others table
Route::post('/others/add', function () {

$db = new mysqli("localhost","root","sohan","bunk");

$f = $_POST["string"];
$g = $_POST["text"];
$e = $_POST["phone"];
$h= $_POST["email"];
$i = $_POST["estring"];
$j = $_POST["e1string"];
$k = $_POST["e2string"];
$l = $_POST["e3string"];


echo $f;
echo $g;
echo $e;
echo $h;
echo $i;
echo $j;
echo $k;
echo $l;


$qry = sprintf('INSERT INTO others VALUES("%s","%f","%f","%f","%f","%f","%s","%s",CURRENT_DATE)',$f,$g,$e,$h,$i,$j,$k,$l);
$con = $db->query($qry);


if($con){
	echo "Data inserted";
}else{
	echo "Data not inserted";
}
echo '<br><a href="../others">Insert again</a> OR <a href="../others/show">View</a>';





});

Route::get('/others', function () {
    echo 'You are in others\'sdome ';

echo '<form method="post" action="others/add">
<br>
<input type="string" name="string" placeholder="others id">
<br>
<input type="float" name="text" placeholder="drops">
<br>
<input type="float" name="phone" placeholder="own_use">
<br>
<input type="float" name="email" placeholder="expenses">
<br>
<input type="float" name="estring" placeholder="keb reading">
<br>
<input type="float" name="e1string" placeholder="pump test">
<br>
<input type="string" name="e2string" placeholder="receipts">
<br>
<input type="string" name="e3string" placeholder="employee id">
<input type="submit">
</form> ';
echo '<a href="others/show">View</a>';
echo '<a href="../public"><br>Home</a>';
});

Route::get('/others/show',function(){

$db = new mysqli("localhost","root","sohan","bunk");
	$qry1 = sprintf("SELECT * FROM others");
$con1 = $db->query($qry1);
echo '<th>OTHER DETAILS</th>';
echo "<table border=\"1\">";
echo "<tr><th>others id</th><th>drops</th><th>own use</th><th>expenses</th>
<th>keb reading</th>
<th>pump test</th>
<th>receipts</th>
<th>employee id</th>";
while($s = $con1->fetch_assoc()){

echo  "<tr>";
echo "<td>".$s["others_id"]."</td>";
echo "<td>".$s["drops"]."</td>";
echo "<td>".$s["own_use"]."</td>";
echo "<td>".$s["expenses"]."</td>";
echo "<td>".$s["keb_reading"]."</td>";
echo "<td>".$s["pump_test"]."</td>";
echo "<td>".$s["receipts"]."</td>";
echo "<td>".$s["emp_id"]."</td>";
echo "</tr>";


}

echo "</table>";
echo '<a href="../others">Insert again</a>';
echo '<a href="http://localhost/laravel/chik/public/"><br>Home</a>';
});

//end of others table

//beginning of tank table

Route::post('/tank/add', function () {


$db = new mysqli("localhost","root","sohan","bunk");

$f = $_POST["string"];
$g = $_POST["text"];
$e = $_POST["double"];
$h = $_POST["email"];
$when = date("y-m-d");
echo $f;

echo $g;

echo $e;

echo $h;


$qry = sprintf('INSERT INTO tank VALUES("%s","%f","%f","%s",CURRENT_DATE)',$f,$g,$e,$h);
$con = $db->query($qry);






if($con){
	echo "Data inserted";

}else{
	echo "Data not inserted";
}
	echo '<br><a href="../tank">Insert again</a> OR <a href="../tank/show">View</a>';


});

Route::get('/tank', function () {
    echo 'You are in tanks\'sdome ';

echo '<form method="post" action="tank/add">
<br>
<input type="string" name="string" placeholder="tank no">
<br>
<input type="float" name="text" placeholder="density_measurement">
<br>
<input type="float" name="double" placeholder="after_decant">
<br>
<input type="string" name="email" placeholder="employee id">
<input type="submit">
</form> ';
echo '<a href="tank/show">View</a>';
echo '<a href="../public"><br>Home</a>';
});





Route::get('/tank/show',function(){

$db = new mysqli("localhost","root","sohan","bunk");
	$qry1 = sprintf("SELECT * FROM tank");
$con1 = $db->query($qry1);
echo '<th>TANK DETAILS</th>';
echo "<table border=\"1\">";
echo "<tr><th>tank no</th><th>Density measurement</th><th>After decant</th><th>Employee id</th>";
while($s = $con1->fetch_assoc()){

echo  "<tr>";
echo "<td>".$s["tank_no"]."</td>";
echo "<td>".$s["density_measurement"]."</td>";
echo "<td>".$s["after_decant"]."</td>";
echo "<td>".$s["emp_id"]."</td>";
echo "</tr>";

}


echo "</table>";
echo '<a href="../tank">Insert again</a>';
echo '<a href="http://localhost/laravel/chik/public/"><br>Home</a>';
});

//end of tank table


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});



Route::get("/details/edit",function(){
		echo "<br><br><br><br><center><h2>Please choose a date</h2></center>";
		echo '<center><form method="post" action="http://localhost/laravel/chik/public/details/edit"><select name="field"><option>Choose a field to edit</option><option>Meter</option><option>Tank</option><option>Sales</option><option>Others</option></select><input type="date" name="which_date"><input type="submit" name="submit"></center>'
	;
});

Route::post("/details/edit",function(){
    
	if(isset($_POST["submit"])){
		
			$needed_date = $_POST["which_date"];
			$field = strtolower($_POST["field"]);
			$con = new mysqli("localhost","root","sohan","bunk");
			echo "<h1> You are editing ". $field."</h1>";
			if($con){
				$qry = sprintf('SELECT * FROM %s WHERE whenn="%s" ',$field,$needed_date);
				$query_result = $con->query($qry);

				if($query_result){
					// print_r($query_result->fetch_assoc());
					$s =$query_result->fetch_assoc();
					echo '<form name="" action="http://localhost/laravel/chik/public/details/edit/t?field='.$field.'" method="post">';
					foreach ($s as $key => $value) {
						if($key!="whenn")
						echo '<label> '.$key.'</label><input type="text" name="'.$key.'" value="'.$value.'"><br>';
					}
					echo '<input type="submit"></form>';

			}
		}
}
});

Route::post("/details/edit/t",function(){

print_r($_GET);


	if(isset($_GET["field"]) && !empty($_GET["field"])){
			$incoming_field = $_GET["field"];
			print_r($incoming_field);
			if($incoming_field == "sales")
				$qry = sprintf('UPDATE sales SET  sale_id = "%s"',$_POST["sale_id"]);
			else if($incoming_field == "meter"){
				$qry = sprintf('UPDATE meter SET  ',$f,$g,$e,$h,$i,$j,$k,$l,$m);

			}else if($incoming_field == "tank"){
				$qry = sprintf('UPDATE tank SET ',$f,$g,$e,$h);

			}else if($incoming_field == "others"){
				$qry = sprintf('UPDATE others SET ',$f,$g,$e,$h,$i,$j,$k,$l);
			}

			$db = new mysqli("localhost","root","sohan","bunk");
			if($db->query($qry)){
				echo "you";
			}

		}
});


