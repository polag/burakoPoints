<?php
namespace DataHandle;

class Score extends FormHandle{
    
    public static function calcPoints($form_data)
    {
        $length = count($form_data['cantMuertos']);
        for($i = 0; $i < $length; $i++)
        {
           /*  $muertos[$i] = $form_data['cantMuertos'][$i] * 100;
            $canLimpias[$i] = $form_data['canLimpias'][$i] * 200;
            $canSucias[$i] = $form_data['canSucias'][$i] * 100;
            $cantUnos[$i] = $form_data['cantUnos'][$i] * 15;
            $cantDos[$i] = $form_data['cantDos'][$i] * 20;
            $cantBajos[$i] = $form_data['cantBajos'][$i] * 5;
            $cantAltos[$i] = $form_data['cantAltos'][$i] * 10;
            $cantComo[$i] = $form_data['cantComo'][$i] * 50;  */

           /*  $points['cantMuertos'][$i] = $form_data['cantMuertos'][$i] * 100;
            $points['canLimpias'][$i] = $form_data['canLimpias'][$i] * 200;
            $points['canSucias'][$i] = $form_data['canSucias'][$i] * 100;
            $points['cantUnos'][$i] = $form_data['cantUnos'][$i] * 15;
            $points['cantDos'][$i] = $form_data['cantDos'][$i] * 20;
            $points['cantBajos'][$i] = $form_data['cantBajos'][$i] * 5;
            $points['cantAltos'][$i] = $form_data['cantAltos'][$i] * 10;
            $points['cantComo'][$i] = $form_data['cantComo'][$i] * 50;
            if (isset($form_data['corte'.$i])){
                $points['corte'][$i] = 1;
            }else{
                $points['corte'][$i] = 0;
            } */
            $points[$i] = $form_data['cantMuertos'][$i] * 100;
            $points[$i] += $form_data['canLimpias'][$i] * 200;
            $points[$i] += $form_data['canSucias'][$i] * 100;
            $points[$i] += $form_data['cantUnos'][$i] * 15;
            $points[$i] +=  $form_data['cantDos'][$i] * 20;
            $points[$i] += $form_data['cantBajos'][$i] * 5;
            $points[$i] += $form_data['cantAltos'][$i] * 10;
            $points[$i] += $form_data['cantComo'][$i] * 50;
            if (isset($form_data['corte'.$i])){
                $points[$i] += 100;
            }
        }
        return $points;
        
    }
}