<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">    
        @layer utilities {  
            .whscreen{
                width: 80vw;
                height: 40vh;
            }         
        }
        
        
    </style>
    <title>Contact</title>
</head>
<main>
        <h2 class="py-4 text-6xl font-bold text-center text-green-800">Envoyez un avis :</h2>
        <!-- Formulaire de contact -->
        <form class="flex justify-center flex-col py-16 test-xl gap-16" action="{{ route('contact-send') }}" method="POST">
            @csrf
            <div class="mx-16 flex flex-wrap flex-row justify-between">
                <div class="flex mx-auto font-bold text-green-600 my-12 items-center">
                    Ton adresse mail :
                    <input class="ml-4 border-4 border-green-600 rounded-lg bg-green-500 placeholder-green-900 px-4 py-1 hover:cursor-text text-green-800" type="email" name="mail" id="mail" placeholder="" required />
                </div>
                <div class="flex mx-auto font-bold text-green-600 my-12 items-center">
                    Ton nom :
                    <input class="ml-4 border-4 border-green-600 rounded-lg bg-green-500 placeholder-green-900 px-4 py-1 hover:cursor-text text-green-800" type="text" name="name" id="name" pattern=".*\S.*" placeholder="" required />
                </div>
            </div>
            <div class="flex justify-center flex-col font-bold text-green-600 items-center">
                Contenu :   
                <input class="whscreen mt-4 border-4 border-green-600 rounded-lg bg-green-500 placeholder-green-900 px-4 py-1 hover:cursor-text text-green-800" type="text" name="message" id="message" pattern=".*\S.*" placeholder="" required />
            </div>
            <input class="mx-auto border-2 border-green-600 rounded-lg bg-green-500 px-4 py-1 hover:cursor-pointer text-green-900" type="submit" value="Envoyer" />
        </form>
    </main>
</html>