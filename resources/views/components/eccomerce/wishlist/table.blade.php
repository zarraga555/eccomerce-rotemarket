<table class="table table-wishlist">
    <thead>

    <tr class="main-heading">
        <th class="custome-checkbox start pl-30">
            {{--                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="">--}}
            {{--                                    <label class="form-check-label" for="exampleCheckbox11"></label>--}}
        </th>
        <th scope="col" colspan="2">{{__('Product') }}</th>
        <th scope="col">{{__('Price') }}</th>
        <th scope="col">{{__('Stock Status')}}</th>
        <th scope="col">{{ __('Action') }}</th>
        <th scope="col" class="end">{{ __('Remove')}}</th>
    </tr>
    </thead>
    <tbody>
    <tr class="pt-30">
        <td class="custome-checkbox pl-30">
            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
            <label class="form-check-label" for="exampleCheckbox1"></label>
        </td>
        <td class="image product-thumbnail pt-40"><img src="assets/imgs/shop/product-1-1.jpg" alt="#" /></td>
        <td class="product-des product-name">
            <h6><a class="product-name mb-10" href="shop-product-right.html">Field Roast Chao Cheese Creamy Original</a></h6>
            <div class="product-rate-cover">
                <div class="product-rate d-inline-block">
                    <div class="product-rating" style="width: 90%"></div>
                </div>
                <span class="font-small ml-5 text-muted"> (4.0)</span>
            </div>
        </td>
        <td class="price" data-title="Price">
            <h3 class="text-brand">$2.51</h3>
        </td>
        <td class="text-center detail-info" data-title="Stock">
            <span class="stock-status in-stock mb-0"> {{ __('In Stock') }} </span>
        </td>
        <td class="text-right" data-title="Cart">
            <button class="btn btn-sm">{{ __('Add to cart') }}</button>
        </td>
        <td class="action text-center" data-title="Remove">
            <a href="#" class="text-body"><i class="fi-rs-trash"></i></a>
        </td>
    </tr>
    <tr>
        <td class="custome-checkbox pl-30">
            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox4" value="" />
            <label class="form-check-label" for="exampleCheckbox4"></label>
        </td>
        <td class="image product-thumbnail"><img src="assets/imgs/shop/product-4-1.jpg" alt="#" /></td>
        <td class="product-des product-name">
            <h6><a class="product-name mb-10" href="shop-product-right.html">Angie’s Boomchickapop Sweet & Salty </a></h6>
            <div class="product-rate-cover">
                <div class="product-rate d-inline-block">
                    <div class="product-rating" style="width: 90%"></div>
                </div>
                <span class="font-small ml-5 text-muted"> (4.0)</span>
            </div>
        </td>
        <td class="price" data-title="Price">
            <h3 class="text-brand">$3.21</h3>
        </td>
        <td class="text-center detail-info" data-title="Stock">
            <span class="stock-status out-stock mb-0"> {{ __('Out Stock') }} </span>
        </td>
        <td class="text-right" data-title="Cart">
            <button class="btn btn-sm btn-secondary">{{ __('Contact Us') }}</button>
        </td>
        <td class="action text-center" data-title="Remove">
            <a href="#" class="text-body"><i class="fi-rs-trash"></i></a>
        </td>
    </tr>
    </tbody>
</table>
