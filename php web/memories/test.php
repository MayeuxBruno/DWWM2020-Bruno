    <?php 
    $photo=array();
    $num=1;
    for($a=0;$a<16;$a+=2){
        $photo[$a]=$num;
        $photo[$a+1]=$num;
        $num++;
    }
    var_dump($photo);

    
    /*if(($index=array_search($nombre,$photo))!=NULL)
    {
        echo 'il y est à index '.$index;
        unset($photo[$index]);
    }*/
    for($j=1;$j<10;$j++)
    {
    do{
        $numphoto=rand(1,8);
        $index=array_search($numphoto,$photo);
        echo "\n\n.$numphoto.-.$index.\n\n";
     }while($index==NULL);
     
     unset($photo[$index]);
    }
    var_dump($photo);
