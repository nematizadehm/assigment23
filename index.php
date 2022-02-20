<html>
<style>
#red td{
    background-color: #BF0A30 ;
    width: 400px;
    height: 18px;
    padding: 0;
}
#white td{
    background-color: white;
    width: 400px;
    height: 16px;
    padding: 0;
}
#blue{
    background-color: #002868;
    width: 175px;
    height: 132px;
    position: absolute;
    margin-top: 2px;
}
.checked{
    color: white;
}
span{
    position: absolute;
}
</style>

    <head>
        <title>blood kofr</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <table>
            <div id="blue">
                <?php 
                    for($i=0; $i<50; $i++){
                        $left = rand(1,160); $top = rand(1,117); 
                        echo '<span style="left:' . $left . 'px; top:' . $top . 'px;" class="fa fa-star checked"></span>';
                    }                 
                ?>
            </div>
            
            <?php for($i=0; $i<7; $i++): ?>
                <tr id="red"> <td></td> </tr>
            <?php if($i < 6): ?>
                <tr id="white"> <td></td> </tr>
            <?php endif; ?>
            <?php endfor; ?>
        </table>
        <i class="star"></i>
    </body>

</html>