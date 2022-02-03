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
        <p class="px-4">{{$summarise["summary"]}}</p>
        <div class="flex flex-wrap justify-center">
            <?php $numbers = count($food["ingredients"]); ?>
            <table class="border-4 border-black m-12">
                <tr>
                    <th class="border-4 border-black uppercase text-2xl font-bold px-2" colspan="3">Ingredients</th>
                </tr>
                <tr>
                    <td class="border-4 border-black text-center text-xl font-bold" rowspan="2">Name</td>
                    <td class="border-4 border-black text-center text-xl font-bold" colspan="2">Values</td>
                </tr>
                <tr>
                    <td class="border-4 border-black text-center text-base font-bold">Metric</td>
                    <td class="border-4 border-black text-center text-base font-bold">US</td>
                </tr>
                @for ($i = 0; $i < $numbers; $i++)
                <tr>
                    <td class="border-4 border-black capitalize">{{$food["ingredients"][$i]["name"]}}</td>
                    <td class="border-4 border-black text-center p-2"><span class="text-lg">{{$food["ingredients"][$i]["amount"]["metric"]["value"]}} {{$food["ingredients"][$i]["amount"]["metric"]["unit"]}}</span></td>
                    <td class="border-4 border-black text-center p-2"><span class="text-lg">{{$food["ingredients"][$i]["amount"]["us"]["value"]}} {{$food["ingredients"][$i]["amount"]["us"]["unit"]}}</span></td>
                </tr>
                @endfor
            </table>

            <?php $numbers_equip = count($equipment["equipment"]); ?>
            <table class="border-4 border-black m-12">
                <tr>
                    <th class="border-4 border-black uppercase text-2xl font-bold px-2">Equipments</th>
                </tr>
                @for ($i = 0; $i < $numbers_equip; $i++)
                <tr>
                    <td class="border-4 border-black text-center p-2 text-lg">{{$equipment["equipment"][$i]["name"]}}</td>
                </tr>
                @endfor
            </table>
        </div>
        <?php $numbers_instru = count($instruction[0]["steps"]); ?>
        <ol class="list-decimal">
            @for ($i = 0; $i < $numbers_instru; $i++)
            <li>{{$instruction[0]["steps"][$i]["step"]}}</li>
            @endfor
        </ol>
        
</body>
</html>