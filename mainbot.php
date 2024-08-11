<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="css/bot.css">
    
</head>
<body>
<?php require '_nav1.php' ?>
    <div id="container">
        <div id="dot1"></div>
        <div id="dot2"></div>
        <div id="screen">
            <div id="header">CHATBOT</div>
            <div id="messageDisplaySection">
                <!-- bot messages -->
                <!-- <div class="chat botMessages">Hello there, how can I help you?</div> -->

                <!-- usersMessages -->
                <!-- <div id="messagesContainer">
                <div class="chat usersMessages">I need your help to build a website.</div>
            </div> -->
        </div>
            <!-- messages input field -->
            <div id="userInput">
                <input type="text" name="messages" id="messages" autocomplete="OFF" placeholder="Type Your Message Here." required>
                <input type="submit" value="Send" id="send" name="send">
            </div>
        </div>
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <!-- Jquery Start -->
    <script>
        $(document).ready(function(){
            $("#messages").on("keyup",function(){

                if($("#messages").val()){
                    $("#send").css("display","block");
                }else{
                    $("#send").css("display","none");
                }
            });
        });
        // when send button clicked
        $("#send").on("click",function(e){
            $userMessage = $("#messages").val();
            $appendUserMessage = '<div class="chat usersMessages">'+ $userMessage +'</div>';
            $("#messageDisplaySection").append($appendUserMessage);

            // ajax start
            $.ajax({
                url: "bot.php",
                type: "POST",
                // sending data
                data: {messageValue: $userMessage},
                // response text
                success: function(data){
                    // show response
                    $appendBotResponse = $appendBotResponse = '<div id="messagesContainer"><a href="musicH.php"><button style="height:auto;width:auto;margin-left: 100px;" class="chat botMessages">'+data+'</button></a></div>';
                    $("#messageDisplaySection").append($appendBotResponse);
                }
            });
            $("#messages").val("");
            $("#send").css("display","none");
        });
    </script>
</body>
</html>