<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">    
        @layer utilities {      
            .column-auto-fill {        
                grid-template-columns: repeat(auto-fill, 230px);   
                grid-gap: 32px;   
                padding-top: 64px;
            }  
            .max-imag{
                max-width: 230px;
            }  
        }
        
        
    </style>
    <title>Food</title>
</head>
<body>
    <h1 class="py-4 text-6xl font-bold text-center text-green-800">Find recipe ideas</h1>
    <form action="{{route('food.search')}}" class="flex justify-center flex-wrap py-16 test-xl gap-16" method="post">
        <input class="border-4 border-green-600 rounded-lg bg-green-500 placeholder-green-900 px-4 py-1 hover:cursor-text" name="word" type="text" placeholder="Pasta">
        <div class="border-2 border-green-600 rounded-lg bg-green-500 px-4 py-1 mx-8 text-green-900">
            View :
            <select class="border-2 border-green-400 bg-green-500 hover:cursor-cell text-green-900" value="5" name="number_choose" id="search-bar">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
        @csrf
        <input class="border-2 border-green-600 rounded-lg bg-green-500 px-4 py-1 hover:cursor-pointer text-green-900" type="submit">
    </form>
    <?php 
    if (empty($_POST['number_choose'])) {
        $_POST['number_choose'] = 5;
    }
    ?>
    <script type="text/javascript">
        document.getElementById('search-bar').value = "<?php echo $_POST['number_choose'];?>";
    </script>

    <div class="grid column-auto-fill px-12 justify-center">
        <?php $numbers = $food["number"]; ?>

        @for ($i = 0; $i < $numbers; $i++)
        <?php $id_details=$food["results"][$i]["id"]; ?>
            <a class="max-imag text-center p-1 border-4 border-green-600 transition-all rounded-lg hover:shadow-lg hover:shadow-green-600 overflow-hidden hover:scale-105" href="{{route('food.details',[$id_details])}}" >
                <img src='{{$food["results"][$i]["image"]}}' alt='{{$food["results"][$i]["title"]}}_image'/>
                <legend>{{$food["results"][$i]["title"]}}</legend>
            </a>
        @endfor
    </div>
    
</body>
</html>