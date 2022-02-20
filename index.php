<html>
<head></head>

<style>
#white-lenght td{
    background-color: white;
    width: 450px;
    height: 10px;}
#blue-squar{
    background-color: darkblue;
    width: 150px;
    height: 100px;
    position: absolute;}   
#red-lenght td{
    background-color: darkred ;
    width: 450px;
    height: 10px;
    padding: 0;}
}

</style>

      
    <body>
    <table>
    <div id="blue-squar">
    <?php 
         for($i=0; $i<50; $i++){
         $left = rand(1,100);
         $top = rand(1,100); 
       echo "<span style='color:white;'>*</span>" ;}
                       
    ?>
         </div>
            
        <?php for($i=0; $i<7; $i++): ?>
        <tr id="red-lenght"> <td></td> </tr>
             <?php if($i < 6): ?>
             <tr id="white-lenght"> <td></td> </tr>
            <?php endif; ?>
        <?php endfor; ?>
     </table>
    </body>

</html>