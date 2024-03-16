<div>
    <h3>
        @switch($mathOperation)
            @case("soma")
                A soma de {{$num1}} + {{$num2}} é {{$num1 + $num2}}
                @break
            @case("subtracao")
                A subtração de {{$num1}} - {{$num2}} é {{$num1 - $num2}}
                @break
            @case("multiplicacao")
                A multiplicação de {{$num1}} x {{$num2}} é {{$num1 * $num2}}
                @break
            @case("divisao")
                @if($num1 == 0 || $num2 == 0){
                    Impossível dividir por 0!
                    @break
                }
                @endif

                A divisão de {{$num1}} / {{$num2}} é {{$num1 / $num2}}
                @break;
            @default
                Essa operação não existe!
        @endswitch
    </h3>
</div>
