<table border="1">
    <tr>
        <th>ta1</th>
        <th>ta2</th>
        <th>ta3</th>
        <th>ta4</th>
        <th>PTA</th>
        <th>EMC</th>
        <th>EF</th>
        <th>PROMEDIO</th>
    </tr>
    <tr>
        @foreach($resultado as $nota)


            <th> @if($nota["ta1"] > 11) style="color: chartreuse" @else style="color: red" @endif>
                {{$nota["ta1"]}}</th>

            <th>
                <?php
                if ($nota["ta2"] > 11){
                    echo "style='color: chartreuse";
                }else {
                    echo "style='color:red'";
                }
                ?>
                >{{$nota["ta2"]}}</th>
            <th @php $color = $nota["ta3"] > 11 ? "style='color: chartreuse'": "style='color: red'"; echo $color @endphp>
            <th>{{$nota["ta3"]}}</th>

            <th>{{$nota["ta4"]}}</th>
            <th>{{$pta=($nota["ta1"]+$nota["ta2"]+$nota["ta3"]+$nota["ta4"])/4}}</th>
            <th>{{$nota["emc"]}}</th>
            <th>{{$nota["ef"]}}</th>
            <th>{{($pta+$nota["emc"]+$nota["ef"])/3}}</th>
        @endforeach
    </tr>
</table>
