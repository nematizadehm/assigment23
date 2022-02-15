<html>

<body>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
   
  .flag {
    width: 494px;
    height: 260px;
    margin: 5% auto 1% auto;
    position: relative;
   
  }
  /* Stripe  */
  .stripe {
    height: 20px;
  }
   
  /* Red Stripe  */
  .stripe:nth-child(odd){
    background-color: #B22234; 
  }
  /* White Stripe */
  .stripe:nth-child(even){
    background-color: #FFFFFF;
  }
  /* Canton  */
  .canton {
    position: absolute;
    top: 0;
    left: 0;
    width: 197.6px;
    height: 140px;
    background-color: #3C3B6E;
    padding: 2px 0 3px 0;
    margin: 0;
  }
  /* Star Row  */
  .star-row {
    height: 15px;
    display: flex;
    align-items: center;
  }
  /* Arrangement 1 */
  .star-row:nth-child(odd){
     justify-content: space-around;
  }
  /* Arrangement 2 */
  .star-row:nth-child(even){
      justify-content: space-evenly;
  }
  /* Star */
  .star {
    display: block;
    color: #FFFFFF;
  }
  
    </style>
    <div class="flag">
        <?php for($i=0;$i<14;$i++); ?>
       <?php <div class="stripe"></div> ; ?>
       <div class="canton">
       <?php for($i=0;$i<10;$i++); ?>
       <?php <div class="star-row"></div> ; ?>
       <?php for($i=0;$i<6;$i++); ?>
       <?php <div class="star"></div> ; ?>
    </div>

    </body>
</html>