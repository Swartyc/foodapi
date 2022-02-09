<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Food</title>
    <style type="text/tailwindcss">    
        @layer utilities {      
            
        }
        
        
    </style>
</head>
<body>  
        <button class="fixed left-6 top-6 w-16 animate-pulse hover:animate-none" onclick="window.history.back();">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 980.05 840.1"><defs><style>.cls-1{font-size:128.68px;fill:#fff;font-family:Inter-Black, Inter;font-weight:800;letter-spacing:-0.01em;}.cls-2{letter-spacing:0em;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path d="M370.55,819.55a70,70,0,0,0,99-99l-230.5-230.5h671a70,70,0,0,0,0-140h-671l230.5-230.5a70,70,0,0,0-99-99l-350,350a69.89,69.89,0,0,0,0,99l350,350Z"/><text class="cls-1" transform="translate(359.28 465.28)">R<tspan class="cls-2" x="84.45" y="0">eturn</tspan></text></g></g></svg>
        </button>
        <h1 class="py-4 text-4xl font-bold text-center text-green-800">{{$summarise["title"]}}</h1>
        <h2 class="uppercase text-2xl font-bold px-12 pt-12 pb-6 text-green-700">Summarise of this recipe :</h2>
        <p class="px-12 text-justify hover:cursor-default text-green-600">{!!$summarise["summary"]!!}</p>
        <div>
            <?php $numbers = count($food["ingredients"]); ?>
            <table class="border-4 border-green-800 m-auto my-16">
                <tr>
                    <th class="border-4 border-green-800 uppercase text-2xl font-bold px-2 text-green-700" colspan="4">Ingredients</th>
                </tr>
                <tr>
                    <td class="border-4 border-green-800 text-center text-xl font-bold text-green-700" colspan="2" rowspan="2">Name</td>
                    <td class="border-4 border-green-800 text-center text-xl font-bold text-green-700" colspan="2">Values</td>
                </tr>
                <tr>
                    <td class="border-4 border-green-800 text-center text-base font-bold text-green-700">Metric</td>
                    <td class="border-4 border-green-800 text-center text-base font-bold text-green-700">US</td>
                </tr>
                @for ($i = 0; $i < $numbers; $i++)
                <tr>
                    <td class="border-4 border-green-800 capitalize p-2 text-green-600"><img class="m-auto" src='https://spoonacular.com/cdn/ingredients_250x250/{{$food["ingredients"][$i]["image"]}}'/></td>
                    <td class="border-4 border-green-800 capitalize p-2 text-green-600">{{$food["ingredients"][$i]["name"]}}</td>
                    <td class="border-4 border-green-800 text-center p-2 text-green-600"><span class="text-lg">{{$food["ingredients"][$i]["amount"]["metric"]["value"]}} {{$food["ingredients"][$i]["amount"]["metric"]["unit"]}}</span></td>
                    <td class="border-4 border-green-800 text-center p-2 text-green-600"><span class="text-lg">{{$food["ingredients"][$i]["amount"]["us"]["value"]}} {{$food["ingredients"][$i]["amount"]["us"]["unit"]}}</span></td>
                </tr>
                @endfor
            </table>

            <?php $numbers_equip = count($equipment["equipment"]); ?>
                <h2 class="uppercase text-2xl font-bold px-16 pb-4 text-green-700">Equipments :</h2>
                <div class="flex flex-wrap px-16">
                    @for ($i = 0; $i < $numbers_equip; $i++)
                        <img  class="m-auto" src='https://spoonacular.com/cdn/equipment_250x250/{{$equipment["equipment"][$i]["image"]}}'/>
                    @endfor
                </div>
            </table>
        </div>
        <?php $numbers_instru = count($instruction[0]["steps"]); ?>
        <ol class="list-decimal px-16 py-16">
            @for ($i = 0; $i < $numbers_instru; $i++)
            <li class="py-2 text-green-600">{{$instruction[0]["steps"][$i]["step"]}}</li>
            @endfor
        </ol>
        
</body>
</html>