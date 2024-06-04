<div class="flex flex-col justify-center items-center">
    <form wire:submit.prevent="store" class="w-full bg-white rounded-lg shadow-md p-6 my-8">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prod_name">
                    Nom du produit
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    type="text" wire:model="prod_name" placeholder="Nom du produit">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prod_price">
                    Prix du produit
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    type="text" wire:model="prod_price" placeholder="Prix du produit">
            </div>
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prod_desc">
                    Description du produit
                </label>
                <textarea
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    wire:model="prod_desc" placeholder="Description du produit"></textarea>
            </div>
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prod_images">
                    Images du produit
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    type="text" wire:model="prod_images" placeholder="Lien de l'image">
            </div>

            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="brand_id">
                    Marque du produit
                </label>
                <select class="appearance
                -none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        wire:model="brand_id">
                    <option value="">Choisir une marque</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="brand_id">
                    Catégorie du produit
                </label>
                <select class="appearance
                -none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        wire:model="brand_id">
                    <option value="">Choisir une catégorie</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prod_flavors">
                    Saveur du produit
                </label>
                <input class="appearance
                -none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                       type="text" wire:model="prod_flavor" placeholder="Saveur du produit">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prod_sizes">
                    Taille du produit
                </label>
                <input class="appearance
                -none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                       type="text" wire:model="prod_flavor" placeholder="Saveur du produit">
            </div>


            <div class="w-full px-3 mt-6">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Ajouter le produit
                </button>
            </div>
        </div>
    </form>
</div>
