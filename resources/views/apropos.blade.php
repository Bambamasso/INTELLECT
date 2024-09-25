@include('nav')
<div class="w-full">
    
    <div class="flex items-center justify-center m-12 gap-36 wrap">
        <div class="text-lg w-96">
            <h1 class="p-4 text-3xl font-bold">
                Qui somme nous?
             </h1>
            <p>Le Lorem Ipsum est simplement du faux texte utilisé dans la composition et la mise en page
                avant impression. Il est le faux texte standard de l'industrie depuis les années 1500, 
                lorsqu'un imprimeur anonyme a pris une galée de caractères et les a mélangés pour créer
                un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi
                au saut vers la composition électronique, en restant essentiellement inchangé. 
                Il a été popularisé dans les années 1960 avec la publication de feuilles Letraset 
                contenant des passages du LoremIpsum, et plus récemment avec des logiciels de PAO
                comme Aldus PageMaker incluant des versions du Lorem Ipsum.</p>
        </div>
        <div class="text-lg ">
           <img  class="h-80 w-76"  src="{{asset('img/cabinet.jpg')}}" alt="">
           <div class="m-4 shadow-md">
                <p class="font-bold">Boyo kouedan Hervé</p>
                <small>Gérant de l'entreprise</small>
           </div>
        </div>
    </div>
</div>
@include('footer')