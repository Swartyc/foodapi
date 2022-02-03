<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Food</title>
</head>
<body>
    <div>
        <div class="flex flex-col">
        <?php $numbers = count($food["ingredients"]); ?>
            <h1 class="text-2xl font-bold uppercase underline underline-offset-6">Ingredients :</h1>
        @for ($i = 0; $i < $numbers; $i++)
            <div class="py-2" ><span class="text-xl font-bold capitalize">{{$food["ingredients"][$i]["name"]}} : </span><span class="text-lg">{{$food["ingredients"][$i]["amount"]["metric"]["value"]}}{{$food["ingredients"][$i]["amount"]["metric"]["unit"]}}</span><!--<span class="text-lg font-bold"> OR </span><span class="text-lg">{{$food["ingredients"][$i]["amount"]["us"]["value"]}}{{$food["ingredients"][$i]["amount"]["us"]["unit"]}}</span>--></div>
        @endfor
    </div>
    </div>
    
</body>
</html>