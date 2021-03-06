@php
$items = Cart::content();
@endphp
<ul class="header-cart-wrapitem">
    @foreach($items as $item)
    <li class="header-cart-item">
        <div class="header-cart-item-img">
            <img src="upload/image/product/{{$item->options['image']}}" alt="IMG">
        </div>

        <div class="header-cart-item-txt">
            <a href="#" class="header-cart-item-name">
                {{ $item->name }}
            </a>

            <span class="header-cart-item-info">
                {{ $item->quantity }} x {{ $item->name }}
            </span>
        </div>
    </li>
    @endforeach

    
</ul>

<div class="header-cart-total">
    Total: {{ Cart::getTotal() }}
</div>

<div class="header-cart-buttons">
    <div class="header-cart-wrapbtn">
        <!-- Button -->
        <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
            View Cart
        </a>
    </div>

    <div class="header-cart-wrapbtn">
        <!-- Button -->
        <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
            Check Out
        </a>
    </div>
</div>