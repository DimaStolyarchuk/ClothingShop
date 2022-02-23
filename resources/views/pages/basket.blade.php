<!DOCTYPE html>
<html lang="en">

@include('pages.head')

<body>

<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div>
<!--PreLoader Ends-->

@include('pages.header')

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Ваша особиста</p>
                    <h1>Корзина</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- cart -->
<div class="cart-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="cart-table-wrap">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                        <tr class="table-head-row">
                            <th class="product-remove"></th>
                            <th class="product-image">Зображення</th>
                            <th class="product-name">Назва</th>
                            <th class="product-price">Ціна</th>
                            <th class="product-quantity">Кількість</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr class="table-body-row">
                            <td class="product-remove"><a href="{{ route('delete_basket', ['id' => $product->id]) }}"><i class="far fa-window-close"></i></a></td>
                            <td class="product-image"><img src="{{ asset('storage/img/'. $product->product->image) }}" alt=""></td>
                            <td class="product-name">{{ $product->product->name }}</td>
                            <td class="product-price">{{ $product->product->price }}</td>
                            <td class="product-quantity"><input type="number" placeholder="0" value="{{ $product->quantity }}"></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="total-section">
                    <table class="total-table">
                        <thead class="total-table-head">
                        <tr class="table-total-row">
                            <th>Всього</th>
                            <th>Ціна</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="total-data">
                            <td><strong>Сума до сплати: </strong></td>
{{--                            <td>$500</td>--}}
                        </tr>
                        <tr class="total-data">
                            <td><strong>Доставка: </strong></td>
{{--                            <td>$45</td>--}}
                        </tr>
                        <tr class="total-data">
                            <td><strong>Всього: </strong></td>
{{--                            <td>$545</td>--}}
                        </tr>
                        </tbody>
                    </table>
                    <div class="cart-buttons">
                        <a href="cart.html" class="boxed-btn">Відмінити</a>
                        <a href="checkout.html" class="boxed-btn black">Сплатити</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end cart -->

@include('pages.footer')

@include('pages.scripts')

</body>
</html>
