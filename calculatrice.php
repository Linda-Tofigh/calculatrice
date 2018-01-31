<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="StyleCal.css">
    <title>Calculatrice</title>


    <?php
$formsumbit = $_POST["sumbit"];
$eqution = $_POST["typeofequstion"];
$firstnumber = $_POST["numberone"];
$secoundnumber = $_POST["secoundnumber"];
if ($formsumbit!=""){
    if($eqution=="plus"){
         $awnswer == $firstnumber + $secoundnumber;
    }elseif ($eqution == "minus"){
        $awnswer == $firstnumber - $secoundnumber;
    }elseif ($eqution == "multiply"){
        $awnswer == $firstnumber * $secoundnumber;
    }elseif ($eqution == "divide"){
        $awnswer == $firstnumber / $secoundnumber;
    }
    die("No equation given!");
}

?>

    


     <script language="JavaScript" type="text/javascript">


         function buttonequals_onclick(){
             document.forms["calculator"].submit();
         }



       function buttonplus_onclick() {
           var typeofeqution=document.getElementById("typeofequstion").value;
           if(typeofeqution==""){
               document.getElementById("typeofequstion").value="plus";
               document.getElementById("hiddenequation").value="changetozero";
               document.getElementById("text2").value=document.getElementById("textbox").value;
           }else{
               buttonequals_onclick()
           }
       }
       function buttonmoins_onclick() {
           var typeofeqution=document.getElementById("typeofequstion").value;
           if(typeofeqution==""){
               document.getElementById("typeofequstion").value="minus";
               document.getElementById("hiddenequation").value="changetozero";
               document.getElementById("text2").value=document.getElementById("textbox").value;
           }else{
               buttonequals_onclick()
           }
       }function buttonstar_onclick() {
           var typeofeqution=document.getElementById("typeofequstion").value;
           if(typeofeqution==""){
               document.getElementById("typeofequstion").value="multiply";
               document.getElementById("hiddenequation").value="changetozero";
               document.getElementById("text2").value=document.getElementById("textbox").value;
           }else{
               buttonequals_onclick()
           }
       }function buttonslash_onclick() {
           var typeofeqution=document.getElementById("typeofequstion").value;
           if(typeofeqution==""){
               document.getElementById("typeofequstion").value="divide";
               document.getElementById("hiddenequation").value="changetozero";
               document.getElementById("text2").value=document.getElementById("textbox").value;
           }else{
               buttonequals_onclick()
           }
       }


         
      function button0_onclick(){
          var changeorchange = document.getElementById("hiddenequation").value;
          if (changeorchange==="changetozero"){
              document.getElementById("textbox").value="0";
              document.getElementById("hiddenequation").value="";
          }else{
              document.getElementById("textbox").value = document.getElementById("textbox").value + "0";
          }
      }

      function button1_onclick(){
          var changeorchange = document.getElementById("hiddenequation").value;
          if (changeorchange==="changetozero"){
              document.getElementById("textbox").value="1";
              document.getElementById("hiddenequation").value="";
          }else{
              document.getElementById("textbox").value = document.getElementById("textbox").value + "1";
          }
      }

      function button2_onclick(){
          var changeorchange = document.getElementById("hiddenequation").value;
          if (changeorchange==="changetozero"){
              document.getElementById("textbox").value="2";
              document.getElementById("hiddenequation").value="";
          }else{
              document.getElementById("textbox").value = document.getElementById("textbox").value + "2";
          }
      }

      function button3_onclick(){
          var changeorchange = document.getElementById("hiddenequation").value;
          if (changeorchange==="changetozero"){
              document.getElementById("textbox").value="3";
              document.getElementById("hiddenequation").value="";
          }else{
              document.getElementById("textbox").value = document.getElementById("textbox").value + "3";
          }
      }

      function button4_onclick(){
          var changeorchange = document.getElementById("hiddenequation").value;
          if (changeorchange==="changetozero"){
              document.getElementById("textbox").value="4";
              document.getElementById("hiddenequation").value="";
          }else{
              document.getElementById("textbox").value = document.getElementById("textbox").value + "4";
          }
      }

      function button5_onclick(){
          var changeorchange = document.getElementById("hiddenequation").value;
          if (changeorchange==="changetozero"){
              document.getElementById("textbox").value="5";
              document.getElementById("hiddenequation").value="";
          }else{
              document.getElementById("textbox").value = document.getElementById("textbox").value + "5";
          }
      }

      function button6_onclick(){
          var changeorchange = document.getElementById("hiddenequation").value;
          if (changeorchange==="changetozero"){
              document.getElementById("textbox").value="6";
              document.getElementById("hiddenequation").value="";
          }else{
              document.getElementById("textbox").value = document.getElementById("textbox").value + "6";
          }
      }

      function button7_onclick(){
          var changeorchange = document.getElementById("hiddenequation").value;
          if (changeorchange==="changetozero"){
              document.getElementById("textbox").value="7";
              document.getElementById("hiddenequation").value="";
          }else{
              document.getElementById("textbox").value = document.getElementById("textbox").value + "7";
          }
      }

      function button8_onclick(){
          var changeorchange = document.getElementById("hiddenequation").value;
          if (changeorchange==="changetozero"){
              document.getElementById("textbox").value="8";
              document.getElementById("hiddenequation").value="";
          }else{
              document.getElementById("textbox").value = document.getElementById("textbox").value + "8";
          }
      }

      function button9_onclick(){
          var changeorchange = document.getElementById("hiddenequation").value;
          if (changeorchange==="changetozero"){
              document.getElementById("textbox").value="9";
              document.getElementById("hiddenequation").value="";
          }else{
              document.getElementById("textbox").value = document.getElementById("textbox").value + "9";
          }
      }
     </script>
    <!---------------------------------------Fin de Javascript------------------------------------------------------
    ----------------------------------------------------------------------------------------------------------------
    ---------------------------------------------------------------------------------------------------------------->
</head>

<body>
    <h1>mon premier calculatrice</h1>
<form id="calculator" action="PhpCal.php" method="post">
    <input type="text" style="width: 280px" dir="rtl" readonly="readonly" id="textbox" name="numberone"/><br />
    <input type="button" style="height: 64px; width: 64px;" value="1" id="button1" onclick="return button1_onclick()"/>
    <input type="button" style="height: 64px; width: 64px;" value="2" id="button2" onclick="return button2_onclick()"/>
    <input type="button" style="height: 64px; width: 64px;" value="3" id="button3" onclick="return button3_onclick()"/>
    <input type="button" style="height: 64px; width: 32px;" value="+" id="buttonplus" onclick="buttonplus_onclick()"/>
    <input type="button" style="height: 64px; width: 32px;" value="-" id="buttonminus" onclick="buttonminus_onclick()"/>
    <br />
    <input type="button" style="height: 64px; width: 64px;" value="4" id="button4" onclick="return button4_onclick()"/>
    <input type="button" style="height: 64px; width: 64px;" value="5" id="button5" onclick="return button5_onclick()"/>
    <input type="button" style="height: 64px; width: 64px;" value="6" id="button6" onclick="return button6_onclick()"/>
    <input type="button" style="height: 64px; width: 32px;" value="*" id="buttonstar"  onclick="buttonstar_onclick()"/>
    <input type="button" style="height: 64px; width: 32px;" value="/" id="buttonslash"  onclick="buttonslash_onclick()"/>
    <br/>
    <input type="button" style="height: 64px; width: 64px;" value="7" id="button7" onclick="return button7_onclick()"/>
    <input type="button" style="height: 64px; width: 64px;" value="8" id="button8" onclick="return button8_onclick()"/>
    <input type="button" style="height: 64px; width: 64px;" value="9" id="button9" onclick="return button9_onclick()"/>
    <input type="button" style="height: 64px; width: 32px;" value="0" id="button0" onclick="return button0_onclick()"/>
    <input type="button" style="height: 64px; width: 32px;" value="=" id="buttonequals"  onclick="buttonequals_onclick()"/>
    <br/>
    <input  type="hidden" id="hiddenequation" value="changetozero" />
    <input  type="hidden" id="typeofequstion" name="typeofequstion" />
    <input  type="hidden" id="text2" name="secoundnumber" />
    <input  type="hidden" name="submit" value="Hello"/>
</form>












</body>
</html>