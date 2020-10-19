<!DOCTYPE html>
<html>

    <head>
        <title>Apply for job</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
                    #applySection{
                        width:auto;
                        height:600px;
                        margin-left:15%;
                        margin-right:15%;
                        margin-top:5%;
                        border:2px solid #FF0000;
                        
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
                    #submit{
                        width:20%;
                        height:70px;
                        padding-top: 1%;
                        border-radius:5px;
                        margin-left:25%;
                        font-size:1.2vw;
                        background-color: green;
                        cursor: pointer;
                        text-align: center;
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

            

                <div id="applySection">
                <form action="../final" method="POST">
                <?php echo csrf_field(); ?>

                <input hidden type="text"  name="title"  value="<?php echo e($jobData->title); ?>"><br><br>
                                <br><br><label>Name</label><br>
                                <input type="text" id="name" name="name"  placeholder="Enter Name.."><br><br>

                                <label>Email</label><br>
                                <input type="text" id="email" name="email"  placeholder="Enter Email.."><br><br>

                                <label>Contact</label><br>
                                <input type="text" id="contact" name="contact" placeholder="Enter Contact.."><br><br>

                                <label>Current CTC</label><br>
                                <input type="text" id="curr_ctc" name="curr_ctc" placeholder="Enter Current CTC.."><br><br>
                                <label>Expected CTC</label><br>
                                <input type="text" id="exp_ctc" name="exp_ctc" placeholder="Enter Expexted CTC.."><br><br>

                              <button type="submit"  id="submit">Submit Application</button>

                </form>
                                </div>

                
    </body>
</html><?php /**PATH C:\xampp\htdocs\Job\resources\views/apply_job.blade.php ENDPATH**/ ?>