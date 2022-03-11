<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorPrecios extends Controller
{

    // Se crea un metodo con el nombre de "Precio"
    // Con un atributo llamado "valor"

    public function precio ($valor){

    // Se crean una variable llamda "descuento" que varia dependiendo el precio del producto
        $descuento = 0;

    // Si el valor es numerico puede continuar con la operación
    // En caso de que no, no haga nada

        if(is_numeric($valor)){

    // Si el valor es menor de 100
    // No tiene un descuento
        if ($valor < 100000 && $valor > 0 ){

         return 'No tiene descuento';
        }

    // Em caso de que el valor este entre 100000 y 150000
    // El descuento sera de un 2%
    elseif ($valor > 100000 && $valor<= 150000){

        $descuento  = 0.02;

    //La operacion para hayar el valor total consite en
    //Multiplicar el valor por el descuento y
    //Restar ese resultado al valor
        return 'El valor es ' .$valor . ' y el descuento es 2 y el valor total ' .   $valor -= $valor * $descuento;

    }

    elseif ($valor >150000 && $valor<= 300000){

        $descuento = 0.03;

        return 'El valor es ' .$valor . ' y el descuento es 3 y el valor total ' .  $valor -= $valor * $descuento;
    }

    elseif ($valor >300000 && $valor<=500000){

        $descuento =  0.04;

        return 'El valor es ' .$valor . ' y el descuento es 4 y el valor total ' .  $valor -= $valor * $descuento;
    }
    elseif ($valor > 500000){

        $descuento = 0.05;

        return 'El valor es ' .$valor . ' y el descuento es 5 y el valor total ' .  $valor -= $valor * $descuento;
    }

    //Esto retorno en caso de que el valor sea una palabra o letra
        }else{
            return 'el  valor digitado no es un numero';
        }


}

    //Se crea otro metodo llamdado getIva que tiene como parametros
    // El nombre del producto "$nombre" y el valor del mismo "$valor"

    public function getIva ($nombre, $valor){

    //Tenemos en cuenta una constante o variable llamada IVA
    //Que es igual al valor multiplicado por el 19%
        $IVA = $valor*0.19;
    //Y se calcula el valor total teniendo el cuenta el valor mas el IVA
        $Vtotal = $IVA+$valor;

        return 'El articulo '.$nombre. ' sin iva cuesta ' .$valor. ' y el precio del IVA ' .$IVA. ' El total a pagar por el articulo es de '.$Vtotal;

    }
}
