<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class heladosController extends Controller
{
    public function helado ($opc){

        //if ( $op>=1 && $opc <=3) {}
        if ($opc == 1 or $opc == 2 or $opc == 3){

            $valorHelado = 3000;
            $valorTopping = 0;
            $topping = '';
            $valorTotal = 0;

        //Se programa la opcion de chocolate
            if($opc == 1){
                $valorTopping = 500;
                $topping = 'Chocolate';
            }

            elseif ($opc == 2){
                $valorTopping = 1000;
                $topping = 'Brownie';
            }

            elseif ($opc == 3){
                $valorTopping = 1500;
                $topping = 'Delicatessen';
            }

            $valorTotal = $valorHelado + $valorTopping;
            return 'El topping escogido es:  ' . $topping . ' Y su precio es  ' . $valorTopping . 'El valor total a pagar es  ' . $valorTotal;

        }
        else{
            'opcion no valida';
        }
    }//cierre del metodo
}//cierre de la clase
