<?php
include_once __DIR__ . '/header.php';
include_once __DIR__.'/FormHandle.php';
include_once __DIR__.'/Score.php';

$form_data = $_POST;

for($i=0;$i<count($form_data['players']);$i++){
    ${'player'.$i+1} = $form_data['players'][$i];
    
}
 
if(isset($form_data['points'])){
    for($i=0;$i<count($form_data['points']);$i++){
        $points[$i] = \DataHandle\Score::calcPoints($form_data)[$i] + $form_data['points'][$i];

    }
}else{
    $points = \DataHandle\Score::calcPoints($form_data);
}

if(max($points)>=3000){
    for($i=0;$i<(count($points));$i++){
        if($points[$i]==max($points)){
            
            header('Location: https://localhost/burako/showWinner.php?winner='.${'player'.$i+1}.'&points='.$points[$i]);
            //header('Location: https://burako.herokuapp.com/showWinner.php?winner='.${'player'.$i+1}.'&points='.$points[$i]);

        }
    }
}else{
    $cant = count($points);
    if($cant==2){
        header('Location: https://localhost/burako/points.php?cant='.$cant.'&points1='.$points[0].'&points2='.$points[1].'&player1='.$player1.'&player2='.$player2);
        //header('Location: https://burako.herokuapp.com/points.php?cant='.$cant.'&points1='.$points[0].'&points2='.$points[1].'&player1='.$player1.'&player2='.$player2);
    }else{
        header('Location: https://localhost/burako/points.php?cant='.$cant.'&points1='.$points[0].'&points2='.$points[1].'&points3='.$points[2].'&player1='.$player1.'&player2='.$player2.'&player3='.$player3);
        //header('Location: https://burako.herokuapp.com/points.php?cant='.$cant.'&points1='.$points[0].'&points2='.$points[1].'&points3='.$points[2].'&player1='.$player1.'&player2='.$player2.'&player3='.$player3);
    }

    exit;
}
 