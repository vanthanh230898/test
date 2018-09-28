
<?php

$users = array(
        0 => array(
                'id' => 10, 
                'name' => 'Messi',
                'email' => array(
                        'gmail' => '10@gmail.com',
                        'yahoo' => '10@yahoo.com',
                ),
        ),                
        1=> array(
                'id' => 7,
                'name' => 'Ronaldo',
                'email' => array(
                        'gmail' => '7@gmail.com',
                        'yahoo' => '7@yahoo.com',
                ),
        ),
        2=> array(
                'id' => 4, 
                'name' => 'Ramos',
                'email' => array(
                        'gmail' => '4@gmail.com',
                        'yahoo' => '4@yahoo.com',
                ),
        ),
        3=> array(
                'id' => 13, 
                'name' => 'Muller',
                'email' => array(
                        'gmail' => '13@gmail.com',
                        'yahoo' => '13@yahoo.com',
                ),
        ),
        4=> array(
                'id' => 11, 
                'name' => 'Neymar',
                'email' => array(
                        'gmail' => '11@gmail.com',
                        'yahoo' => '11@yahoo.com',
                ),
        ),

);      
?>
<html>                                  
        <head>                          
        </head>                         
                                        
        <body>                 
                <table>                 
                        <tr>
                                <td>STT</td>            
                                <td>ID</td>     
                                <td>Name</td>   
                                <td>Gmail</td>
                         </tr>         
                                        
                                <?php for($i = 0; $i <count($users); $i++) :?> 
                                 <tr>
                                        <td><?php echo $i+1;?>;</td>
                                        <td><?php echo $users[$i]['id'];?></td>
                                        <td><?php echo $users[$i]['name'];?></td>
                                        <td><?php echo $users[$i]['email']['gmail'];?></td>
                                        <td><?php echo $users[$i]['email']['yahoo'];?></td>

                                 </tr>       
                                <?php endfor;  ?>             
                </table>  
                <?php