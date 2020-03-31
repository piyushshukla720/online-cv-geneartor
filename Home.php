<html>
<body bgcolor=#f5f5f5 style = "font-family:cursive,helvetica;">
<?php 
$servername="localhost";
$username="reshabh";
$password="Reshabhs49@";
try{
$conn=new PDO("mysql:host=$servername;dbname=musicx",$username,$password);
$stmt=$conn->prepare("select * from user where (Mail=:Mail and Password=:Pass)");
$stmt->bindParam(':Mail',$_POST['Mail']);
$stmt->bindParam(':Pass',$_POST['Pass']);
$stmt->execute();
$row=$stmt->fetch();
if($stmt->rowCount()>0){
//echo $row['Image'];
echo "<div id='head-container'>";
echo "<img id='image' src='{$row['Image']}' height=200 width=200 style='border-radius:50%;'/>";
echo "<div id='details'>";
echo "<div id='name'>{$row['Name']}<br><br></div>";
echo "<div id='email'>{$row['Mail']}<br><br></div>";
echo "<div id='mobile'>{$row['Mobile']}<br><br></div>";
echo "</div></div>";
}else{
echo "USER NOT FOUND!";
}
}catch(PDOException $e){
echo "Error!".$e->getMessage();
}
?>
<br>
<style>
#head-container{
position: relative;
}
#details {
margin-left:250px;
/*position: fixed;*/
margin-top:-150px;
}
h3{
background-color:rgb(63,60,65);
color: rgb(253,253,253);
}
h2{
background-color:rgb(100,60,65);
color: rgb(253,253,253);
}
#nextb{
background-color:rgb(63,60,65);
color: rgb(253,253,253);
border-radius:5px;
}
</style>
<form>
<h2 id="ed1">EDUCATION</h2>
<div id="ed2">
<h3>COLLEGE</h3>
<div class="course">
</div>
<input type="button" value="+" class="add" style="background-color:rgb(118,255,3);border-radius:5px;"/>
<script src="jquery-3.4.1.js"></script>
<script type="text/javascript"></script>
<script type="text/javascript">
var courses=0;
var addbutton=$('.add');
$(addbutton).click(function(){
var field=`Course:<select id=course${courses} name="course"><option value="Bachelors in Technology(CSE)">Bachelors in Technology(CSE)</option><option value="Bachelors in Technology(ECE)">Bachelors in Technology(ECE)</option></select><br><br>College:<select id=college${courses} name="college"><option value="IIITM">IIITM</option></select><br><br>CPI:<input type="number" name="cpi" id=cpi${courses} /><br><br><br>`;
$('.course').append(field);
courses++;
});
</script>
<h3>SCHOOL</h3><br>
<b>Senior Secondary<br><br></b>
Board:<select value="course" name="course" id="ssboard">
<option value="CBSE">CBSE</option>
<option value="ICSE">ICSE</option>
</select><br><br>
Score:<select value="score" name="score" id="sstype">
<option value="cgpa">C.G.P.A</option>
<option value="percentage">Percentage</option>
</select>
<input type="number" name="result" id="ssscore" /><br><br>
<b>Higher Secondary<br><br></b>
Board:<select value="course" name="course" id="hsboard">
<option value="CBSE">CBSE</option>
<option value="ICSE">ICSE</option>
</select><br><br>
Score:<select value="score" name="score" id="hstype">
<option value="cgpa">C.G.P.A</option>
<option value="percentage">Percentage</option>
</select>
<input type="number" name="result" id="hsscore" /><br><br><br><br>
</div>
<h2 id="skills1">SKILLS</h2>
<div id="skills2">
<div class='lang'>
<h3>PROGRAMMING LANGUAGES</h3>
<input type="button" style="background-color:#90caf9;border-radius:5px;" class="language1" value="C++"><input type="button" style="background-color:#90caf9;border-radius:5px;" class="language2" value="Python"><input type="button" style="background-color:#90caf9;border-radius:5px;" class="language3" value="Ruby"><input type="button" style="background-color:#90caf9;border-radius:5px;" class="language4" value="PHP"><input type="button" style="background-color:#90caf9;border-radius:5px;" class="language5" value="PeRL"> 
</div>
<script type="text/javascript">
var arr1=[];
$('.language1').click(function(){
var text=$('.language1').val();
var ele="<li>"+text+"</li>";
$('.lang').append(ele);
$('.language1').hide();
arr1.push(text);
}
);
$('.language2').click(function(){
var text=$('.language2').val();
var ele="<li>"+text+"</li>";
$('.lang').append(ele);
$('.language2').hide();
arr1.push(text);
}
);
$('.language3').click(function(){
var text=$('.language3').val();
var ele="<li>"+text+"</li>";
$('.lang').append(ele);
$('.language3').hide();
arr1.push(text);
}
);
$('.language4').click(function(){
var text=$('.language4').val();
var ele="<li>"+text+"</li>";
$('.lang').append(ele);
$('.language4').hide();
arr1.push(text);
}
);
$('.language5').click(function(){
var text=$('.language5').val();
var ele="<li>"+text+"</li>";
$('.lang').append(ele);
$('.language5').hide();
arr1.push(text);
}
);

</script>

<div class="lang1">
<h3>FRAMEWORKS</h3>
<input type="button" style="background-color:#90caf9;border-radius:5px;" class="f1" value="C++"><input type="button" style="background-color:#90caf9;border-radius:5px;" class="f2" value="Python"><input type="button" style="background-color:#90caf9;border-radius:5px;" class="f3" value="Rails"><input type="button" style="background-color:#90caf9;border-radius:5px;" class="f4" value="PHP"><input type="button" style="background-color:#90caf9;border-radius:5px;" class="f5" value="PeRL"> 
</div>
<script type="text/javascript">
var arr=[];
$('.f1').click(function(){
var text=$('.f1').val();
var ele="<li>"+text+"</li>";
$('.lang1').append(ele);
$('.f1').hide();
arr.push(text);
}
);
$('.f2').click(function(){
var text=$('.f2').val();
var ele="<li>"+text+"</li>";
$('.lang1').append(ele);
$('.f2').hide();
arr.push(text);
}
);
$('.f3').click(function(){
var text=$('.f3').val();
var ele="<li>"+text+"</li>";
$('.lang1').append(ele);
$('.f3').hide();
arr.push(text);
}
);
$('.f4').click(function(){
var text=$('.f4').val();
var ele="<li>"+text+"</li>";
$('.lang1').append(ele);
$('.f4').hide();
arr.push(text);
}
);
$('.f5').click(function(){
var text=$('.f5').val();
var ele="<li>"+text+"</li>";
$('.lang1').append(ele);
$('.f5').hide();
arr.push(text);
}
);
</script>
<br><br><br>
</form>
</div>
<script>
$('#ed1').click(function(){
$('#ed2').slideToggle();
}
);
$('#skills1').click(function(){
$('#skills2').slideToggle();
}
);
</script>
<h2 id="per2">PERSONAL DETAILS</h2>
<div id="per1">
<form>
Father's name : <input type="text" id="fname"/><br><br>
Mother's name : <input type="text" id="mname"/><br><br>
Blood Group   : <input type="text" id="bgroup"/><br><br>
</form>
</div>
<script>
$('#per2').click(function(){
$('#per1').slideToggle();
}
);
</script>
<h2 id="exp2">EXPIRIENCE</h2>
<div id="exp1">
<form>
<div class="experience">
</div>
<input type="button" value="+" class="add1" style="background-color:rgb(118,255,3);border-radius:5px;"/>
<script src="jquery-3.4.1.js"></script>
<script src="requirejs.js"></script>
<script type="text/javascript">
var c=0
var addbutton=$('.add1');
$(addbutton).click(function(){
var field1=`Company:<input type="text" id=comp${c} /><br><br>Job:<input type="text" id=job${c} /><br><br>Reference:<input type="text" id=ref${c} /><br><br><br>`;
$('.experience').append(field1);
c++;
});
</script>
</form>
</div>
<script>
$('#exp2').click(function(){
$('#exp1').slideToggle();
}
);
$('#per1').slideUp("fast");
$('#exp1').slideUp("fast");
$('#ed2').slideUp("fast");
$('#skills2').slideUp("fast");
</script>
<input type="submit" name="submit" value="Next->" id="nextb"/>
<script>
$('#nextb').click(function(){
var arr2=[];
var arr5=[];
var arr6=[];
var lang=JSON.stringify(arr1);
var frame=JSON.stringify(arr);
localStorage.setItem('language', lang);
localStorage.setItem('framework', frame);
var schoold=[$("#hsboard").val(),$("#hstype").val(),$("#hsscore").val(),$("#ssboard").val(),$("#sstype").val(),$("#ssscore").val()];
for(i=0;i<courses;i=i+1){
var course=$(`#course${i}`).val();
var college=$(`#college${i}`).val();
var cpi=$(`#cpi${i}`).val();
arr2.push(`${course}`);
arr5.push(`${cpi}`);
arr6.push(`${college}`);
}
var college=JSON.stringify(arr6);
var school=JSON.stringify(schoold);
localStorage.setItem('college',college);
localStorage.setItem('school',school);
var cpi=JSON.stringify(arr5);
localStorage.setItem('cpi',cpi);
var course=JSON.stringify(arr2);
localStorage.setItem('course',course);
var arr3=[];
var arr7=[];
var arr8=[];
for(i=0;i<c;i=i+1){
var company=$(`#comp${i}`).val();
var job=$(`#job${i}`).val();
var ref=$(`#ref${i}`).val();
arr3.push(`${company}`);
arr7.push(`${job}`);
arr8.push(`${ref}`);
}
console.log(arr7);
var job=JSON.stringify(arr7);
localStorage.setItem('job',job);
var ref=JSON.stringify(arr8);
localStorage.setItem('ref',ref);
var experience=JSON.stringify(arr3);
localStorage.setItem('company',experience);
var arr4=[$("#image").attr("src"),$("#name").text(),$("#email").text(),$("#mobile").text(),$("#fname").val(),$("#mname").val(),$("#bgroup").val()];
var personal=JSON.stringify(arr4);
localStorage.setItem('personal',personal);
window.location.href = "info.html";
}
);
</script>
</body>
</html>
