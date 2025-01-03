<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body{
        margin:0;
        padding: 0;
    }
    header{
        width:100%;
        height: 100px;
        background: blue;
        opacity:0.9;
        color: white;
        margin-top: 0;
    
    }
    header .container{
        display: inline-flex;
        flex-wrap: wrap;
    }
    header .container .title{
        text-align: center;
        margin: 0 auto;
        float: center;
        padding-right:100px ;
        padding-left:100px ;
    }
    header .container .profile{
        float:left;
        margin-left: 2px;
        display: block;
    }
    header .container .sl{
        display: inline-flex;
        padding-left: 10px;
        padding-right: 10px;
        float:right;
        margin-right: 0;

    }
    header .container .settings, .logout, .title, .profile{
        padding: 10px;
    }
    header .container .sl i{
        padding: 10px;
    }
</style>
<header>
    <div class="container">
        <div class="profile">
        
            <img src="" alt="your-image" width="20px" height="20px" style="border-radius: 50%;">
            
            <h2>WELCOME Dr.John</h2>
        </div>
        <div class="title">
            <h1>HOUSING MANAGEMENT SYSTEM</h1>
        </div>
        <div class="sl">
            <div class="settings">
                <img sr="./admins/includes/settings.jpg" width="50px" height="50px">
            </div>
            <div class="logout">
                <h1>Logout</h1>
            </div>
        </div>
    </div>

</header>