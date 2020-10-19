<!DOCTYPE html>
<html>
    <head>
        <title>Products List</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
        <style>
                   

                    table{
                        border:2px green solid;
                        width:60%;
                        margin-left:25%;
                        
                    }
                    th{
                        width:2%;
                        padding:2%;
                        text-align:center;
                        border:1px solid green;
                        font-size:1.5vw;
                    }

                    td, tr{
                        
                        padding:2%;
                        text-align:center;
                        border:1px solid green;
                        font-size:1.1vw;
                        
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

   
                
                <h1>Applicants are:</h1>
                <table>
                <tr>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                  
                </tr>
               <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>

                <td><?php echo e($d->title); ?></td>
                <td><?php echo e($d->name); ?></td>
                <td><?php echo e($d->email); ?></td>
                <td><?php echo e($d->contact); ?></td>
               
               
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <table>

                

              
               
    </body>
</html><?php /**PATH C:\xampp\htdocs\Job\resources\views/applicants.blade.php ENDPATH**/ ?>