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
            .ruby {        
                grid-template-columns: repeat(auto-fill, 230px);   
                grid-gap: 32px;   
                padding-top: 64px;
            }    
        }
        
        
    </style>
</head>
<body>  
        <h1 class="py-4 text-4xl font-bold text-center">{{$summarise["title"]}}</h1>
        <h2 class="uppercase text-2xl font-bold px-12 pt-12 pb-6">Summarise of this recipe :</h2>
        <p class="px-12 text-justify hover:cursor-default">{!!$summarise["summary"]!!}</p>
        <div>
            <?php $numbers = count($food["ingredients"]); ?>
            <table class="border-4 border-black m-auto my-16">
                <tr>
                    <th class="border-4 border-black uppercase text-2xl font-bold px-2" colspan="4">Ingredients</th>
                </tr>
                <tr>
                    <td class="border-4 border-black text-center text-xl font-bold" colspan="2" rowspan="2">Name</td>
                    <td class="border-4 border-black text-center text-xl font-bold" colspan="2">Values</td>
                </tr>
                <tr>
                    <td class="border-4 border-black text-center text-base font-bold">Metric</td>
                    <td class="border-4 border-black text-center text-base font-bold">US</td>
                </tr>
                @for ($i = 0; $i < $numbers; $i++)
                <tr>
                    <td class="border-4 border-black capitalize p-2"><img class="m-auto" src='https://spoonacular.com/cdn/ingredients_250x250/{{$food["ingredients"][$i]["image"]}}'/></td>
                    <td class="border-4 border-black capitalize p-2">{{$food["ingredients"][$i]["name"]}}</td>
                    <td class="border-4 border-black text-center p-2"><span class="text-lg">{{$food["ingredients"][$i]["amount"]["metric"]["value"]}} {{$food["ingredients"][$i]["amount"]["metric"]["unit"]}}</span></td>
                    <td class="border-4 border-black text-center p-2"><span class="text-lg">{{$food["ingredients"][$i]["amount"]["us"]["value"]}} {{$food["ingredients"][$i]["amount"]["us"]["unit"]}}</span></td>
                </tr>
                @endfor
            </table>

            <?php $numbers_equip = count($equipment["equipment"]); ?>
                <h2 class="uppercase text-2xl font-bold px-16">Equipments :</h2>
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
            <li class="py-2">{{$instruction[0]["steps"][$i]["step"]}}</li>
            @endfor
        </ol>
        
</body>
</html>