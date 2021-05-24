<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ColombiaNet</title>
</head>

<style type="text/css">

#blue_bar{

    height: 50px;
    background-color: #405d9b;
    color: #d9dfeb;

}

#search_box{
    
    width: 400px;
    height: 20px;
    border-radius: 5px;
    border: none;
    padding: 4px;
    font-size: 14px;
    
}    
   
#profile_pic{

    width: 150px;
    margin-top: -200px;
    border-radius: 50%;
    border: solid 2px white;

}

#menu_buttons{

 
    width: 100px;
    display: inline-block;
    margin: 2px;




}

#friends_img{

width: 75px;
float: left;
margin: 4px;

}

#friends_bar{

background-color: white;
min-height: 400px;
margin-top: 20px;
color:#aaa;
padding: 8px;


}

#friends{

    clear: both;
    font-size: 12px;
    font-weight: bold;
    color: #405d9b;

}

textarea{

    width: 100%;
    border: none;
    font-family: tahoma;
    font-size: 14px;
    height: 60px;


}

#post_button{

    float: right;
    background-color : #405d9b;
    border: none;
    color: white;
    padding:4px;
    font-size: 14px;
    border-radius: 2px;
    width: 50px;

}

#post_bar{

margin-top:20px;
background-color:white;
padding: 10px;


}

#post{

padding: 4px;
font-size: 13px;
display: flex;
margin-bottom:20px; 


}


</style>


<body style="font-family: tahoma; background-color: #d0d8e4;">

<!-- top bar-->
    <div id="blue_bar">
        <div style=" width:800px; margin:auto; font-size:30px;">
            ColombiaNet &nbsp &nbsp<input type="text" id="search_box" placeholder="search people">
            <img src="image/user.png" style="width:50px; float:right;">
        </div>
    
    </div>
<!-- cover area-->
<div style="width: 800px; margin:auto;  min-height: 400px;">
    <div style="background-color: white; text-align: center; color: #405d9b">
        <img src="image/portada.jpg" style="width: 100%">
        <img src="image/user.png" id="profile_pic">
        <br>
        <div style="font-size: 20px;">Jorge</div>
        <br>
        <div id="menu_buttons">Timeline</div>
        <div id="menu_buttons">About </div>
        <div id="menu_buttons">Friends </div>
        <div id="menu_buttons">Photos </div>
        <div id="menu_buttons">Settings</div>
    </div>

<!-- below cover area-->
<div style="display: flex;">

    <!-- friends cover area-->
    <div style=" min-height:400px; flex:1;">
    
        <div id="friends_bar">

            Friends <br>

            <div id="friends">
            <img id="friends_img" src="image/user1.png" >
             <br>
             First User
             </div>

             <div id="friends">
            <img id="friends_img" src="image/user2.png" >
             <br>
             Second User
             </div>

             <div id="friends">
            <img id="friends_img" src="image/user3.png" >
             <br>
             third User
             </div>

             <div id="friends">
            <img id="friends_img" src="image/user4.png" >
             <br>
             Fourth User
             </div>
    
        </div>
    
    </div>
    
      
       

    <!-- post cover area-->
    <div style=" min-height:400px;flex:2.5; padding:20px; padding-right: 0px;">
    
        <div style="border: solid thin #aaa; padding: 10px; background-color:white">

            <textarea placeholder="Write your post here"></textarea>
            <input id="post_button" type="submit" value="Post">
            <br>
        </div>
    <!-- posts-->
        <div id="post_bar">
            <!-- posts 1-->
            <div id="post">
                <div>
                <img src="image/user1.png" style= "width:75px; margin-right:10px;">
    
                </div>
                <div>
                <div style="font-weight:bold; color:#405d9b">First Guy</div>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt eaque nihil, itaque quibusdam officia, asperiores natus facilis numquam voluptatem laboriosam libero. Eaque qui quidem quod corporis ab beatae nulla unde.
                <br></br>
                   <a href="#">Like</a> .<a href="#"> Comment </a>.<a href="#"> April 23 2020</a>
                </div>
    
            </div>

             <!-- posts 2-->
             <div id="post">
                <div>
                <img src="image/user2.png" style= "width:75px; margin-right:10px;">
    
                </div>
                <div>
                <div style="font-weight:bold; color:#405d9b">Nino</div>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt eaque nihil, itaque quibusdam officia, asperiores natus facilis numquam voluptatem laboriosam libero. Eaque qui quidem quod corporis ab beatae nulla unde.
                <br></br>
                   <a href="#">Like</a> .<a href="#"> Comment </a>.<a href="#"> April 23 2020</a>
                </div>
    
            </div>

            <!-- posts 3-->
            <div id="post">
                <div>
                <img src="image/user3.png" style= "width:75px; margin-right:10px;">
    
                </div>
                <div>
                <div style="font-weight:bold; color:#405d9b">mujer</div>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt eaque nihil, itaque quibusdam officia, asperiores natus facilis numquam voluptatem laboriosam libero. Eaque qui quidem quod corporis ab beatae nulla unde.
                <br></br>
                   <a href="#">Like</a> .<a href="#"> Comment </a>.<a href="#"> April 23 2020</a>
                </div>
    
            </div>

            
            <!-- posts 4-->
            <div id="post">
                <div>
                <img src="image/user4.png" style= "width:75px; margin-right:10px;">
    
                </div>
                <div>
                <div style="font-weight:bold; color:#405d9b">lentes</div>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt eaque nihil, itaque quibusdam officia, asperiores natus facilis numquam voluptatem laboriosam libero. Eaque qui quidem quod corporis ab beatae nulla unde.
                <br></br>
                   <a href="#">Like</a> .<a href="#"> Comment </a>.<a href="#"> April 23 2020</a>
                </div>
    
            </div>

        </div>
    
    
    </div>

    

</div>


</body>
</html>