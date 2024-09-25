<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css ">
</head>
<body class='box-border p-0 m-0 bg-stone-100 m-full' >
 
<div id='content' class="flex items-center justify-around w-full h-16 bg-yellow-300">
    
  <div id="logo" class="text-emerald-400">Intellect</div>
  <div id="onglets" >
    <ul class="flex ">
      <li class="ml-4"><a href="{{route('Home.welcome')}}">Accueil</a></li>
      <li class="ml-4"><a href="{{route('Home.Apropos')}}">A propos de nous</a></li>
      <li class="ml-4"> <a href="">nos partenaires</a></li>
    </ul>
  </div>
  <div id="connexion">
    <a href="{{ route('Home.sign_up')}}">Connexion</a>/
    <a href="{{route('Home.sign_in')}}">Inscription</a> 
  </div>

</div> 