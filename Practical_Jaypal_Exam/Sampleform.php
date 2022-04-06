<html>
<head> 
<!-- <script type="text/javascript">
  var AFlag = false, BFlag = false;

    $(document).ready(function() {
        $("#A").blur(function() {
            BFlag = false;
            $("#AValidation").empty();
            if ($(this).val() == "") {
                $("#AValidation").html("(*) Required..!!");
               
            } 
            else
              {
                    AFlag = true;
                }
            }
        });
    });
    $(document).ready(function() {
        $("#B").blur(function() {
            BFlag = false;
            $("#BValidation").empty();
            if ($(this).val() == "") {
                $("#BValidation").html("(*)  Required..!!");
            }
            else
             {
                    BFlag = true;
                }
            }
     });
    });

        $("#BtnSubmit").click(function() {
            AFlag = false;
            $("#AValidation").empty();
            if ($("#A").val() == "") {
                $("#AValidation").html("(*)  Required..!!");
            } 
            else {
                    AFlag = true;
                }
            
            BFlag = false;
            $("#BValidation").empty();
            if ($("#B").val() == "") 
            {
                $("#BValidation").html("(*)  Required..!!");
            }
             else {
                    BFlag = true;
                }
            if (AFlag == true && BFlag == true ) 
            {
                alert("DONE..!!");
                document.register.submit();
            } 
            else {
                alert("ERROR..!!");
            }
        });

    });
    </script>
       -->
<body style="font-size:40px;">
<form  action="process1.php" method="GET">
<label><b>Favorite Alphabet:</b></label>

                <br />
                <input id="A" type="checkbox" name="alp[]" value="A"/>A
                <small id="AValidation" ></small>
                <br />
                <input type="checkbox" name="alp[]" value="B"/>B
                <small id="BValidation" ></small>
                <br />
                <input type="checkbox" name="alp[]" value="C"/>C
                <br />
                <input type="checkbox" name="alp[]" value="D"/>D
                <br />
                <input type="checkbox" name="alp[]" value="E"/>E
                <br />
                <input type="checkbox" name="alp[]" value="F"/>F
                <br />
                <input type="checkbox" name="alp[]" value="G"/>G
                <br />
                <input type="checkbox" name="alp[]" value="H"/>H
                <br />
                <input type="checkbox" name="alp[]" value="I"/>I
                <br />
                <input type="checkbox" name="alp[]" value="J"/>J
                <br />
                <center> 
                    <input  type="reset" style="color:black;">
                    <button  type="Submit" name="btn_sb" >Submit</button>
                 </center>
</form>
<script>
$('input[checkbox]').prop('checked',false);
</script>
</body>
</head>
</html>
