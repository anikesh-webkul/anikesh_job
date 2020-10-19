<!DOCTYPE html>
<html>

    <head>
        <title>Apply for job</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
    #jobInsert{
        width:10%;
        height:30px;
        padding-top: 1%;
        border-radius:5px;
        margin-left:90%;
        font-size:1.2vw;
        background-color: papayawhip;
        cursor: pointer;
        text-align: center;
        border: 2px orangered solid;
       
    }
            
            #createJobSec{
                
                width:auto;
                height:600px;
                margin-left:15%;
                margin-right:15%;
                margin-top:5%;
                border:2px solid green;
              
    }
            
            #submit1{
                width:15%;
                height:50px;
                padding-top: 1%;
                border-radius:5px;
                margin-left:30%;
                font-size:1.2vw;
                background-color: green;
                cursor: pointer;
                text-align: center;
            }

            


          

                   #web{
                    font-size:2vw;
                    color:blue;
                   }
                   input{
                        width:25%;
                        height:30px;
                        border:1px solid green;
                        margin-left:25%;
                    }
                    label{
                        font-size:1.5vw;
                        margin-left:25%;
                    }

        </style>
    </head>

<body>

<a id="home" href="/"><i class="fa fa-home" style="font-size:48px;color:red"> <span id="web">WEBKUL</span></i></a>
            
                
            <br>

            <hr>
<div id="createJobSec">

        <form action="submit" method="POST">
        @csrf

            <br><br><label>Job Title</label><br>
            <input type="text" id="title1" name="title" placeholder="Enter Title.."><br><br>
    
            <label>Minimum Experience</label><br>
            <input type="text" id="ex_from1"  name="ex_from"  placeholder="Enter Minimum Experience.."><br><br>

            
            <label>Maximum Experience</label><br>
            <input type="text" id="ex_to1"  name="ex_to"  placeholder="Enter Maximum Experience.."><br><br>
    
            <label>No. of Job</label><br>
            <input type="text" id="opening1" name="opening"  placeholder="Enter No. of Job.."><br><br>
    
            <label> CTC</label><br>
            <input type="text" id="ctc1"  name="ctc" placeholder="Enter CTC.."><br><br>
           
    
          <button type="submit" id="submit1">Create Job</buttton>

                </form>

        </div>
</body>
</html>