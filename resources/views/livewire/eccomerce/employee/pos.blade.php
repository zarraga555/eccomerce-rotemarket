<div>
    <div class="py-3">
        {{--                <div class="max-w-full mx-auto sm:px-6 lg:px-8 mb-32">--}}
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <div
                                    class="px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                                    <input wire:model="search" type="text" name="" id=""
                                           placeholder="{{__('Enter product name/SKU/scan barcode')}}"
                                           class="form-input rounded-md shadow-sm mt-1 block w-full">
                                    <input wire:model.lazy="identification" type="text" name="identification"
                                           id="identification"
                                           placeholder="{{__('Enter the NIT/CI/CEX of the client')}}"
                                           class="form-input mx-4 rounded-md shadow-sm mt-1 block w-full">
                                </div>
                            </div>
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider grid-cols-1">
                                        #
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{__('Product')}}
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{__('Quantity')}}
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{__('Unit price')}}
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{__('Subtotal')}}
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($total > 0)
                                    @foreach($cart as $item)
                                        <tr>
                                            <td class="px-6 py-4 ">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        001
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 ">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{$item->name}} [{{$item->sku}}]
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{$item->quantity}} {{$item->unit}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{number_format($item->priceUnit, 2)}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Bs. {{number_format($item->priceUnit * $item->quantity, 2)}}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="px-6 py-4 ">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                    No hay items seleccionados
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    <div class="bg-gray-200 text-white text-center p-4 bottom-0 fixed w-full" style="height: 120px">--}}
    <div class="bg-gray-200 text-white text-center p-4 bottom-0 w-full">
        <!-- Contenido de tu div fijo en la parte inferior -->
        <div class="inline-flex" style="margin-right: -50%">
            <div class="text-start mb-6">
                <p class="text-gray-500">{{__('Total')}}</p>
                <p class="text-4xl font-bold text-green-500"> Bs {{number_format($total, 2)}}</p>
            </div>
            @if($total > 0)
                <div class="flex items-center justify-start  px-6">
                    <button
                        class="px-6 py-2 bg-red-500 text-white rounded-lg shadow-md hover:bg-red-600">{{__('Cancel sale')}}</button>
                </div>
            @endif
            <div class="flex items-center justify-start  px-6">
                <button
                    class="px-6 py-2 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600">{{__('Continue with payment')}}</button>
            </div>
        </div>
    </div>

    <x-confirmation-modal wire:model="modalToggle">
        <x-slot name="title">
            Delete Account
        </x-slot>

        <x-slot name="content">
            Are you sure you want to delete your account? Once your account is deleted, all of its resources and data
            will be permanently deleted.
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                Nevermind
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                Delete Account
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>

</div>
