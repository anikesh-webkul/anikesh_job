<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

            #job{
                        padding:70px;
                        border: orangered solid 2px;
                        display:inline-block;
                        text-align: center;
                        font-size: 1.3vw;
                        color: #62628D;
                        background-color: #F0EEEE;
                        font-weight:bold;
                        cursor: pointer;
                        margin-left:10.5%;
                        margin-top:5%;
                        text-decoration:none;
            } 
/*job description card*/
            #blockDes{
                     display: none; 
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
                display: none;
                width:auto;
                height:600px;
                margin-left:15%;
                margin-right:15%;
                margin-top:5%;
                border:2px solid green;
                display: none;
    }
            
            #submit1{
                width:10%;
                height:30px;
        padding-top: 1%;
        border-radius:5px;
        margin-left:33%;
        font-size:1.2vw;
        background-color: green;
        cursor: pointer;
        text-align: center;
            }

            


            #ins{
                        color:blue;
                        text-decoration:none;
                        float:right;
                        margin-right:3%;
                        margin-top:1%;
                        font-size:1.5vw;
                        cursor:poiter;
                       
                    }

                   #web{
                    font-size:2vw;
                    color:blue;
                   }

        </style>

    </head>
    <body>
       
       
    
                 <a id="ins" href="applicant">View Applicants</a>
                <a id="ins" href="create">Create Job</a>
               
                <a id="home" href=""><i class="fa fa-home" style="font-size:48px;color:red"> <span id="web">WEBKUL</span></i></a>
            
                
                <br>

                <hr>



        <div id="block1">

                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a id="job" href= "des/<?php echo e($d->id); ?>">
                                        
                                        <?php echo e($d->title); ?>

                            
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

        



       

          


        

        </body>
        </html><?php /**PATH C:\xampp\htdocs\Job\resources\views/home.blade.php ENDPATH**/ ?>