<?php include_once("chart.php") ?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style type="text/css">
				html,body,#myChart { height:100%; width:100%;}
		</style>
	
		<script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
		<script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
		ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>
	

<script>
var myData=[<?php 
include ('server.php');
session_start();
$uid = $_SESSION['uid'];
$data=mysqli_query($db,"SELECT * FROM tbl_transaction WHERE uid = $uid;");
while($info=mysqli_fetch_array($data))
    echo $info['amount'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
?>];

var myLabels=[<?php 
$data=mysqli_query($db,"SELECT * FROM tbl_transaction WHERE uid=$uid;");
while($info=mysqli_fetch_array($data))
    echo '"'.$info['add_date'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
?>];








window.onload=function(){
zingchart.render({
    id:"myChart",
    width:"100%",
    height:400,
    data:{
    "type":"bar",
    "title":{
        "text":"SPENDING MANAGER EXPESSES"
    },
    "scale-x":{
        "labels":myLabels
    },
    "series":[
        {
            "values":myData
        }
]
}
});
};
</script>
	</head>

	<body><p>
				<button class="h">
					<a href="login.php" style="color: red;">Logout</a>
				</button>
					
			</p>
		<div id='myChart'></div>
		
	</body>
</html>