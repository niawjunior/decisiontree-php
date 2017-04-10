<?php
include_once("config.php");
if(isset($_POST['submit']))
{
    error_reporting(0);
    if($_POST['website'] and $_POST['desktop'] and $_POST['mobile'] and $_POST['game'] and $_POST['salary'] and $_POST['demand'] and $_POST['popular'] and $_POST['difficulty'] != '')
    {
        
        $lang[100][100];
        $ans[100];
        if($_POST['website']=='YES')
        {
            $lang[0][0] = 0.8; 
            $lang[1][0] = 1; 
            $lang[2][0] = 1;
            $lang[3][0] = 1; 
            $lang[4][0] = 0.666666;  
            $lang[5][0] = 0;  
            $lang[6][0] = 1; 
            $lang[7][0] = 0;
            $lang[8][0] = 0; 
            $lang[9][0] = 0;  
        }
        else
        {
            $lang[0][0] = 0.2;  
            $lang[1][0] = 0;
            $lang[2][0] = 0; 
            $lang[3][0] = 0; 
            $lang[4][0] = 0.333333;  
            $lang[5][0] = 1;
            $lang[6][0] = 0; 
            $lang[7][0] = 1;
            $lang[8][0] = 1; 
            $lang[9][0] = 1;
        }
        if($_POST['desktop']=='YES')
        {
            $lang[0][1] = 0.2; 
            $lang[1][1] = 0;
            $lang[2][1] = 0; 
            $lang[3][1] = 0.166666;  
            $lang[4][1] = 1;
            $lang[5][1] = 1; 
            $lang[6][1] = 0; 
            $lang[7][1] = 1;
            $lang[8][1] = 0.5;  
            $lang[9][1] = 0.5; 
        }
        else
        {
            $lang[0][1] = 0.8; 
            $lang[1][1] = 1;  
            $lang[2][1] = 1; 
            $lang[3][1] = 0.833333; 
            $lang[4][1] = 0; 
            $lang[5][1] = 0; 
            $lang[6][1] = 1;  
            $lang[7][1] = 0; 
            $lang[8][1] = 0.5; 
            $lang[9][1] = 0;
        }

        if($_POST['mobile']=='YES')
        {
            $lang[0][2] = 0.8;
            $lang[1][2] = 0;
            $lang[2][2] = 0;
            $lang[3][2] = 0.833333;
            $lang[4][2] = 0.333333;  
            $lang[5][2] = 0.5;  
            $lang[6][2] = 1;
            $lang[7][2] = 0;
            $lang[8][2] = 0;
            $lang[9][2] = 0.5;
        }
        else
        {
            $lang[0][2] = 0.2; 
            $lang[1][2] = 1;
            $lang[2][2] = 1;
            $lang[3][2] = 0.166666; 
            $lang[4][2] = 0.666666;
            $lang[5][2] = 0;
            $lang[6][2] = 0;
            $lang[7][2] = 1;
            $lang[8][2] = 1;
            $lang[9][2] = 0;
        }

        if($_POST['game']=='YES')
        {
            $lang[0][3] = 0.8; 
            $lang[1][3] = 0;
            $lang[2][3] = 0;
            $lang[3][3] = 0.666666;
            $lang[4][3] = 0.666666;
            $lang[5][3] = 0;
            $lang[6][3] = 1;
            $lang[7][3] = 1;
            $lang[8][3] = 1;
            $lang[9][3] = 1;
        }
        else
        {
            $lang[0][3] = 0.6;
            $lang[1][3] = 1 ;
            $lang[2][3] = 1;
            $lang[3][3] = 0.333333;
            $lang[4][3] = 0.333333 ;
            $lang[5][3] = 1;
            $lang[6][3] = 0;
            $lang[7][3] = 0;
            $lang[8][3] = 0;
            $lang[9][3] = 0;
        }

        if($_POST['salary']=='LOW')
        {
            $lang[0][4] = 0.2;
            $lang[1][4] = 0.333333; 
            $lang[2][4] = 0;
            $lang[3][4] = 0;
            $lang[4][4] = 0; 
            $lang[5][4] = 0;
            $lang[6][4] = 0.5;
            $lang[7][4] = 0;
            $lang[8][4] = 0;
            $lang[9][4] = 0;
        }
        elseif($_POST['salary']=='MEDIUM')
        {
            $lang[0][4] = 0.6;
            $lang[1][4] = 0.333333;
            $lang[2][4] = 0.5;
            $lang[3][4] = 0.166666;
            $lang[4][4] = 0;
            $lang[5][4] = 0;
            $lang[6][4] = 0.5;
            $lang[7][4] = 0.333333;
            $lang[8][4] = 0;
            $lang[9][4] = 0;
        }
        else
        {
            $lang[0][4] = 0.2;
            $lang[1][4] = 0.333333;
            $lang[2][4] = 0.5;
            $lang[3][4] = 0.833333;
            $lang[4][4] = 1;
            $lang[5][4] = 1;
            $lang[6][4] = 0;
            $lang[7][4] = 0.666666;
            $lang[8][4] = 1;
            $lang[9][4] = 1;
        }
         if($_POST['demand']=='YES')
        {
            $lang[0][5] = 0.6;
            $lang[1][5] = 1;
            $lang[2][5] = 1;
            $lang[3][5] = 1;
            $lang[4][5] = 1;
            $lang[5][5] = 1;
            $lang[6][5] = 0;
            $lang[7][5] = 0;
            $lang[8][5] = 1;
            $lang[9][5] = 1;
        }
        else
        {
            $lang[0][5] = 0.4;
            $lang[1][5] = 0;
            $lang[2][5] = 0;
            $lang[3][5] = 0;
            $lang[4][5] = 0;
            $lang[5][5] = 0;
            $lang[6][5] = 1;
            $lang[7][5] = 1;
            $lang[8][5] = 0;
            $lang[9][5] = 0;
        }

         if($_POST['popular']=='YES')
        {
            $lang[0][6] = 1;
            $lang[1][6] = 1;
            $lang[2][6] = 0;
            $lang[3][6] = 0.833333;
            $lang[4][6] = 0.333333;
            $lang[5][6] = 0.5;
            $lang[6][6] = 0;
            $lang[7][6] = 1;
            $lang[8][6] = 1;
            $lang[9][6] = 1;
        }
        else
        {
            $lang[0][6] = 0;
            $lang[1][6] = 0;
            $lang[2][6] = 1;
            $lang[3][6] = 0.166666;
            $lang[4][6] = 0.666666;
            $lang[5][6] = 0;
            $lang[6][6] = 1;
            $lang[7][6] = 0;
            $lang[8][6] = 0;
            $lang[9][6] = 0;
        }

         if($_POST['difficulty']=='EASY')
        {
            $lang[0][7] = 0.6;
            $lang[1][7] = 0.333333;
            $lang[2][7] = 1;
            $lang[3][7] = 0;
            $lang[4][7] = 0;
            $lang[5][7] = 0;
            $lang[6][7] = 1;
            $lang[7][7] = 0.333333;
            $lang[8][7] = 0;
            $lang[9][7] = 0;
        }
        elseif($_POST['difficulty']=='MEDIUM')
        {
            $lang[0][7] = 0.2;
            $lang[1][7] = 0.666666;
            $lang[2][7] = 0;
            $lang[3][7] = 1;
            $lang[4][7] = 0;
            $lang[5][7] = 0;
            $lang[6][7] = 0;
            $lang[7][7] = 0.333333;
            $lang[8][7] = 1;
            $lang[9][7] = 1;
        }
        else
        {
            $lang[0][7] = 0.2;
            $lang[1][7] = 0;
            $lang[2][7] = 0;
            $lang[3][7] = 0;
            $lang[4][7] = 1;
            $lang[5][7] = 1;
            $lang[6][7] = 0;
            $lang[7][7] = 0.333333;
            $lang[8][7] = 0;
            $lang[9][7] = 0;
        }

            $ans[0] = (5 / 30) * ($lang[0][0]) * ($lang[0][1]) * ($lang[0][2]) * ($lang[0][3]) * ($lang[0][4]) * ($lang[0][5]) * ($lang[0][6]) * ($lang[0][7]) * 100;
            $ans[1] = (3 / 30) * ($lang[1][0]) * ($lang[1][1]) * ($lang[1][2]) * ($lang[1][3]) * ($lang[1][4]) * ($lang[1][5]) * ($lang[1][6]) * ($lang[1][7]) * 100;
            $ans[2] = (2 / 30) * ($lang[2][0]) * ($lang[2][1]) * ($lang[2][2]) * ($lang[2][3]) * ($lang[2][4]) * ($lang[2][5]) * ($lang[2][6]) * ($lang[2][7]) * 100;
            $ans[3] = (6 / 30) * ($lang[3][0]) * ($lang[3][1]) * ($lang[3][2]) * ($lang[3][3]) * ($lang[3][4]) * ($lang[3][5]) * ($lang[3][6]) * ($lang[3][7]) * 100;
            $ans[4] = (3 / 30) * ($lang[4][0]) * ($lang[4][1]) * ($lang[4][2]) * ($lang[4][3]) * ($lang[4][4]) * ($lang[4][5]) * ($lang[4][6]) * ($lang[4][7]) * 100;
            $ans[5] = (2 / 30) * ($lang[5][0]) * ($lang[5][1]) * ($lang[5][2]) * ($lang[5][3]) * ($lang[5][4]) * ($lang[5][5]) * ($lang[5][6]) * ($lang[5][7]) * 100;
            $ans[6] = (2 / 30) * ($lang[6][0]) * ($lang[6][1]) * ($lang[6][2]) * ($lang[6][3]) * ($lang[6][4]) * ($lang[6][5]) * ($lang[6][6]) * ($lang[6][7]) * 100;
            $ans[7] = (3 / 30) * ($lang[7][0]) * ($lang[7][1]) * ($lang[7][2]) * ($lang[7][3]) * ($lang[7][4]) * ($lang[7][5]) * ($lang[7][6]) * ($lang[7][7]) * 100;
            $ans[8] = (2 / 30) * ($lang[8][0]) * ($lang[8][1]) * ($lang[8][2]) * ($lang[8][3]) * ($lang[8][4]) * ($lang[8][5]) * ($lang[8][6]) * ($lang[8][7]) * 100;
            $ans[9] = (2 / 30) * ($lang[9][0]) * ($lang[9][1]) * ($lang[9][2]) * ($lang[9][3]) * ($lang[9][4]) * ($lang[9][5]) * ($lang[9][6]) * ($lang[9][7]) * 100;   
            $max=0;
        for ($i=0; $i < 9; $i++) 
        { 
            if($ans[$i]>$max)
            {
                $max = $i;
            }
        }
    }
    else
    {
        ?>
         <script>
$(window).load(function()
{
$('#myModal').modal('show');
setTimeout("location.href = 'index.php';",2000);
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


    if(isset($max))
    {
        if($max==0)
        {
          $answer = 'javascript';
        }
        elseif($max==1)
        {
          $answer = 'php';
        }
        elseif($max==2)
        {
          $answer = 'sql';
        }
        elseif($max==3)
        {
          $answer = 'python';
        }
        elseif($max==4)
        {
          $answer = 'java';
        }
        elseif($max==5)
        {
          $answer = 'swift';
        }
        elseif($max==6)
        {
          $answer = 'html5';
        }
        elseif($max==7)
        {
          $answer = 'c';
        }
        elseif($max==8)
        {
          $answer = 'c-plus-plus';
        }
        else
        {
             $answer = 'c#';
        }



        ?>
       <script>
        window.location.assign("index.php?ANS=<?php echo $answer;?>")
        </script>
        <?php

    } 
}
?>




