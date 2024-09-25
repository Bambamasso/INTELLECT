@include('nav')

<div id="content" class="w-full border border-blue-100 flex justify-center pb-8 pt-8" >
 <div id="formulaire" class="max-w-5xl border border-rose-200 p-8 shadow-lg ">
     <form action="">
        
        <div class="mb-4">
            <label for="" class="block text-base p-2 font-medium leading-6 text-gray-900">Email</label>
            <input type="email" name="email" class="block w-full rounded-md border-2 py-1.5 pl-7 pr-20 outline-0">
        </div>
        <div class="mb-4">
            <label for="" class="block text-base p-2 font-medium leading-6 text-gray-900">Mot de passe</label>
            <input type="password" name="motDePasse" class="block w-full rounded-md border-2 py-1.5 pl-7 pr-20 outline-0">
        </div>
        <input type="submit" class="p-2 bg-green-600 mt-4  rounded-xl hover:bg-green-300 active:bg-green-300">
     </form>
 </div>

</div>

@include('footer')