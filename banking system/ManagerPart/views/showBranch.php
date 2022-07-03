<?php
include('../controller/header.php');
session_start();
require_once('../model/usersModel.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Branches</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body>
	<center>
    <table border="1">
  	<tr>		
  	<td colspan="3" style="text-align: right;" bgcolor="navyblue"> 
  		<center><h1>Branches</h1></center>	
  		<a href="mHome.php"><button>Home</button></a>
  		<a href="../controller/logout.php"><button>Logout</button></a>
  	</td>
  	</tr>
  	<tr>		
  		<td width="150px" height="80px" >
  			<img width="150px" height="80px" src="logo.png">
  		</td>


  		<td width="700 px" bgcolor="grey">
            <center>
  			 <a href="employee.html"><button>Employee</button></a>
  			<a href="reportAdmin.php"><button>Report Admin</button></a>
  			<a href="lockTransaction.php"><button>Lock Transaction</button></a>
<!--   			<a href="updateSalary.php"><button>Update Salary</button></a>
 -->  			<a href="meeting.php"><button>Call Meeting</button></a>
  			<a href="reports.php"><button>Reports</button></a>
  			<a href="freezeAccount.php"><button>Freeze Account</button></a>
            <a href="payroll.php"><button>Employee Payroll</button></a>
            <a href="requiredExp.php"><button>Required Expenses</button></a>
            <a href="branches.php"><button>Branches</button></a>
<!--   			<a href="empIncentive.php"><button>Employee Incentive</button></a>
 --></center>
  		</td>

  	</tr>
  	<tr>		
  		<td  bgcolor="grey" height="300px"> 
  			<ul>
  			  <li>
  			    <a href="profile.php"><button>Profile</button></a>
  			  </li>
  			   <li>
  			    <a href="updateProfile.php"><button>Update Profile</button></a>
  			  </li>
        </ul> 
  		</td>



  		<td> <!-- ------------------------------------------------------------------------------ -->



    <form method="post">
        <b style="color: black;">Enter Year:</b><input type="text" name="year" value=""><input type="submit" name="submit">
    </form>


<?php
if(isset($_REQUEST['submit'])){

$year = $_REQUEST['year'];
$result = showBranch($year);
//$data=mysqli_fetch_assoc($result);

}

?>

<?php
  
    $data1 = '';
    $data2 = '';
    $data3 = '';

    
    while ($row = mysqli_fetch_array($result)) {

        $data1 = $data1 . '"'. $row['deposit'].'",';
        $data2 = $data2 . '"'. $row['profit'] .'",';
        //$data3 = $data3 . '"'. $row['deposit'] .'",';
    }

    $data1 = trim($data1,",");
    $data2 = trim($data2,",");
    //$data3 = trim($data3,",");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
        <title>Branch Data</title>

        <style type="text/css">         
            body{
                font-family: Arial;
                margin: 80px 100px 10px 100px;
                padding: 0;
                color: white;
                text-align: center;
                background: white;
            }

            .container {
                color: #E8E9EB;
                background: #222;
                border: #555652 1px solid;
                padding: 10px;
            }
        </style>

    </head>

    <body>     
        <div class="container"> 
          <h2>Comparison between different branches in <?php echo $year;?> </h2>       
            <canvas id="chart" style="width: 100%; height: 65vh; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>

            <script>
                var ctx = document.getElementById("chart").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Dhaka","Chattogram","Sylhet","Cumilla","Feni","Rangpur","Barisal"],
                    datasets: 
                    [{
                        label: 'Deposit',
                        data: [<?php echo $data1; ?>],
                        backgroundColor: 'transparent',
                        borderColor:'rgba(255,99,132)',
                        borderWidth: 3
                    },

                    {
                        label: 'Profit',
                        data: [<?php echo $data2; ?>],
                        backgroundColor: 'transparent',
                        borderColor:'rgba(0,255,255)',
                        borderWidth: 3  
                    }
                   ]
                },
             
                options: {
                    scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
                    tooltips:{mode: 'index'},
                    legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
                }
            });
            </script>
        </div>
        
    </body>
</html>





 
       
        </td><!-- ----------------------------------------------------  --> 	

  	</tr>
  </table>
</center>
</body>
</html>
