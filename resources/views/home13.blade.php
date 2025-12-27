<div>
    <x-massage-banner  msg="user login successfully" class="success"/>
    <x-massage-banner  msg="user signup successfully" class="success"/>
        <br>
        <br>
        <br>
<br>
       <x-massage-banner msg="password not correct please try again " class="error"/>
       
       <x-massage-banner msg="password not correct please try again " class="warning"/>
   <br><br>
          <h1>home page</h1>

    <style>
        .success{
            background: lightblue;
            color: green;
            padding: 3px 10px ;
            border-radius: 2px;
            display: inline-block;
            margin: 10px;
        }
    

        .error{
            background: rgb(237, 48, 48);
            color: rgb(246, 249, 250);
            padding: 10px 0px 3px 10px ;
            border-radius: 2px;
            display: inline-block;
            margin: -85px 0px 3px 10px ;
        }

 .warning{
            background: rgb(105, 60, 11);
            color: rgb(250, 251, 244);
            padding: 3px 10px ;
            border-radius: 2px;
            display: inline-block;
            margin: -49px 0px 3px 10px;
        }

    </style>


</div>
