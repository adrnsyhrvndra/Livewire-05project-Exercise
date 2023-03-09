<div>

    <div class="container mx-auto py-16 px-8">

        <div class="mb-4">

            <input type="text" wire:model.lazy="search" placeholder="Search for Products">

        </div>

        <table class="table-auto w-full">

            <thead>

                <tr>
                    <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">ID</th>
                    <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Image</th>
                    <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Title</th>
                    <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Price</th>
                </tr>

            </thead>

            <tbody>
                @foreach($product as $item)
                    <tr>
                        <td class="py-2 px-3 border-b">{{$item->id}}</td>
                        <td class="py-2 px-3 border-b"><img class="w-16" src="{{$item->image}}"></td>
                        <td class="py-2 px-3 border-b">{{$item->title}}</td>
                        <td class="py-2 px-3 border-b">{{$item->price}}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>

        {{$product->links()}}

    </div>

</div>
