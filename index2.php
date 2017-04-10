<?php
require_once("config.php");
require_once("data.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
</head>
<body>
    <div id="wrapper">
        <nav  class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">

               <center> <h1 style="color : #ffffff;">ต้นไม้ตัดสินใจในการเลือกเรียนภาษาโปรแกรมมิ่ง ปี 2017</h1></center>
            
        </nav>   
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="https://www.practicepanther.com/wp-content/uploads/2016/12/AI.png" class="user-image img-responsive"/>
          </li>
                    <li>
                        <a class=""  href="index.php"><i class="fa fa-magic fa-3x"></i> ต้นไม้ตัดสินใจ 1</a>
                    </li>
                     <li>
                        <a class="active-menu"  href="index2.php"><i class="fa fa-magic fa-3x"></i> ต้นไม้ตัดสินใจ 2</a>
                    </li>            
                </ul>
               
            </div>
            
        </nav>  
        <div id="page-wrapper" >
               <div class="row">
                <div class="col-md-12">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Form Elements -->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            ต้นไม้ตัดสินใจ 2
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                
                                    <form role="form" method="post" action="data2.php">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No1. Website (Frontend or Backend)</label>
                                            <select class="form-control" name="website">
                                                <option value=""></option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>No2. Desktop App (Windown or Osx)</label>
                                            <select class="form-control" name="desktop">
                                                <option value=""></option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>No3. Mobile App (Andriod.Ios)</label>
                                            <select class="form-control" name="mobile">
                                                <option value=""></option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>No4. Game (Android or Ios)</label>
                                            <select class="form-control" name="game">
                                                <option value=""></option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No5. Salary</label>
                                            <select class="form-control" name="salary">
                                                <option value=""></option>
                                                <option value="LOW">LOW</option>
                                                <option value="MEDIUM">MEDIUM</option>
                                                <option value="HIGHT">HIGHT</option>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>No6. In-Demand Top 9</label>
                                            <select class="form-control" name="demand">
                                                <option value=""></option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>No7. Popular Top 10</label>
                                            
                                            <select class="form-control" name="popular">
                                                <option value=""></option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>No8. Difficulty</label>
                                            <select class="form-control" name="difficulty">
                                                <option value=""></option>
                                                <option value="EASY">EASY</option>
                                                <option value="MEDIUM">MEDIUM</option>
                                                <option value="HARD">HARD</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6"></div>

                                         <div class="col-md-3">
                                        <button type="submit" value="Submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                                        </div>
                                    <div class="col-md-3">
                                    <button type="reset"  class="btn btn-warning btn-block">Reset</button>
                                    </div>
                                    </form>
                                
                                    

                            
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </div>
            </div>  
        </div>
</body>
</html>
<?php
error_reporting(0);
require_once("data2.php");
if($_GET['ANS']!='')
{
    ?>
    <script>
$(window).load(function()
{
$('#myModal').modal('show');
});
</script>
<?php
if($_GET['ANS'] == 'javascript')
{
    $img = 'javascript.png';
}
elseif($_GET['ANS'] == 'php')
{
    $img = 'php.png';
}
elseif($_GET['ANS'] == 'sql')
{
    $img = 'sql.png';
}
elseif($_GET['ANS'] == 'python')
{
    $img = 'python.png';
}
elseif($_GET['ANS'] == 'java')
{
    $img = 'java.png';
}
elseif($_GET['ANS'] == 'swift')
{
    $img = 'swift.png';
}
elseif($_GET['ANS'] == 'html5')
{
    $img = 'html5.png';
}
elseif($_GET['ANS'] == 'c')
{
    $img = 'c.png';
}
elseif($_GET['ANS'] == 'c-plus-plus')
{
    $img = 'c++.png';
}
elseif($_GET['ANS'] == 'c#')
{
    $img = 'c-shap.png';
}
?>
<div class="container">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <center><h1 class="modal-title">คุณควรเลือกศึกษาภาษา</h1></center>
                </div>
                <div class="modal-body">
                    <center><h2><?php echo  $_GET['ANS'];?></h2></center>
                    <center><img src="http://localhost/project_ai/<?php echo $img;?>" class="img-responsive" width="200" height="200"></center>
                </div>
                <div class="modal-footer">
                 <h4><a href="http://www.google.com/search?q=<?echo $_GET['ANS'];?>">รายละเอียดเพิ่มเติม</a></h4>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
}
?>
