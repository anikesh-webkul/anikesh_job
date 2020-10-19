<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#blockDes{
                   
                     width: auto;
                     margin: 10%;
                     border: green solid 2px;
            }

            #jobTitle{
                        font-size: 2vw;
                        margin-left: 2%;
            }
            #sub{
                margin-left:4%;
                font-size: 1.2vw;
            }
                /*Apply now section */

        #applySection{
        width:auto;
        height:600px;
        margin-left:15%;
        margin-right:15%;
        margin-top:5%;
        border:2px solid green;
        display: none;
    }

    label{
        font-size:1.5vw;
        margin-left:25%;
    }
    input{
        width:25%;
        height:30px;
        border:1px solid green;
        margin-left:25%;
    }

    #applynow{
      
        height:20px;
        padding: 2%;
        border-radius:5px;
        margin-left:40%;
        font-size:1.2vw;
        background-color: green;
        cursor: pointer;
        text-align: center;
        color:white;
        text-decoration:none;
    }
  

    #expLabel{
                margin-left: 8%;
               
            }

            #openLabel{
                margin-left: 40%;

                margin-top: -6.5%;
                
            }
            #ctcLable{
                margin-right: 24%;
                margin-top: -6.5%;
                float:right;
                
            }

            #exp_from{
                            margin-left: 9%;
                            margin-top: 2.2%;
            }

            #exp_to{
                margin-left: 12%;
                margin-top: -2.8%;
              
            }
            #opening{
                margin-left: 43%;
                margin-top: 2%;

            }

            #ctc{
                margin-left:74%;
                margin-top: -3%;
            }

            #prc{
           
               padding:1.3%;
                background:#F2F2F2;
              text-align:center;
              margin-left:4%;
              margin-bottom:7%;
                font-size:1.3vw;
                color:#A296DD;
                display:inline;
            }
            #prc1{
                padding:1.3%;
                background:#F2F2F2;
              text-align:center;
              margin-left:5%;
              margin-top:5%;
                font-size:1.3vw;
                color:#A296DD;
            display:inline;
            }   


            /*menue bar*/
            #web{
                    font-size:2vw;
                    color:blue;
                   }

</style>

</head>
<body>


                <a id="home" href="/"><i class="fa fa-home" style="font-size:48px;color:red"> <span id="web">WEBKUL</span></i></a>
            
                
                <br>

                <hr>

<div id="blockDes">

            <p id="jobTitle">{{$job_id->title}}</p>

            <p id="sub">We are looking for candidates having strong knowledge of prefer domain. Must have passion to learn new technology in IT Sector</p>
            <h3 id="expLabel">Experience </h3>
            <p id="exp_from">{{$job_id->ex_from}}&nbsp&nbspto</p>
            <p id="exp_to">{{$job_id->ex_to}}</p>
            <h3 id="openLabel">Openings</h3>
            <p id="opening">{{$job_id->opening}}</p>
            <h3 id="ctcLable">CTC</h3>
            <p id="ctc">{{$job_id->ctc}}</p><br><br><br>

            <p id="prc">Face to Face Technical Round</p>
            
            <p id="prc1">HR Round</p>

            <br><br><br><br><br>

            <a id="applynow" href="../apply/{{$job_id->id}}">Apply Now</a><br><br><br>

        </div>
</body>
</html>