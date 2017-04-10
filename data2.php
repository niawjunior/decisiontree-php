<?php
include_once("config.php");
if(isset($_POST['submit']))
{
    error_reporting(0);
    if($_POST['website'] and $_POST['desktop'] and $_POST['mobile'] and $_POST['game'] and $_POST['salary'] and $_POST['demand'] and $_POST['popular'] and $_POST['difficulty'] != '')
    {
       $website = $_POST['website'];
       $desktop = $_POST['desktop'];
       $mobile  = $_POST['mobile'];
       $game    = $_POST['game'];
       $salary  = $_POST['salary'];
       $popular = $_POST['popular'];
       $demand = $_POST['demand'];
       $difficulty = $_POST['difficulty'];

       if($website == "YES")
       {
        if($difficulty == "EASY")
        {
            if($popular == "YES")
            {
                if($mobile == "YES")
                {
                    $ANS = "java";
                }
                else
                {
                    $ANS = "php";
                }
            }
            else
            {
                if($game == "YES")
                {
                    $ANS = "html5";
                }
               else
                {
                    $ANS = "sql";
                }
            }

        }
        if($difficulty == "MEDIUM")
        {
            if($mobile == "YES")
            {
                if($desktop == "YES")
                {
                    $ANS = "python";
                }
                else
                {
                    if($salary == "MEDIUM")
                    {
                        if($popular == "YES")
                        {
                            $ANS = "javascript";
                        }
                        else
                        {
                            $ANS = "python";
                        }
                    }
                    if($salary == "HIGHT")
                    {
                        $ANS = "python";
                    }
                }
            }
            else
            {
                if($game == "YES")
                {
                    $ANS = "python";
                }
                else
                {
                    $ANS = "php";
                }
            }

        }
        if($difficulty == "HARD")
        {
            if($desktop == "YES")
            {
                $ANS = "java";
            }
            else
            {
                $ANS = "javascript";
            }
        }



       }
       if($website == "NO")
       {
            if($difficulty == "EASY")
            {
                if($desktop == "YES")
                {
                    $ANS = "c";
                }
                else
                {
                    $ANS = "javascript";
                }
            }
            if($difficulty == "MEDIUM")
            {
                if($demand == "YES")
                {
                    if($mobile == "YES")
                    {
                        $ANS = "c#";
                    }
                    else
                    {
                        $ANS = "c-plus-plus";
                    }
                }
                else
                {
                    $ANS = "c";
                }
            }
            if($difficulty == "HARD")
            {
                if($demand == "YES")
                {
                    if($mobile == "YES")
                    {
                        $ANS = "swift";
                    }
                    else
                    {
                        $ANS = "java";
                    }
                }
            }
       }

?>
<script>
        window.location.assign("index2.php?ANS=<?php echo $ANS;?>")
        </script>
<?php
    }
    else
    {
        ?>
            <script>
            $(window).load(function()
            {
            $('#myModal').modal('show');
            setTimeout("location.href = 'index2.php';",2000);
            });
            </script>
            <div class="container">
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">มีบางอย่างผิดพลาด!</h4>
                            </div>
                            <div class="modal-body">
                            กรุณาเลือกข้อมูลให้ครบทุกช่อง
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
    }
}
?>




