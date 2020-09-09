<template>
    <div class="container">
        <div class="products">
            <div class="clearfix">
                <product v-for="product in products" :product="product"></product>
            </div>
        </div>
        <div class="shopping-cart">
            <shopping-cart></shopping-cart>
        </div>
    </div>
</template>

<script>
    import ShoppingCart from './components/ShoppingCart.vue'
    import Product from './components/Product.vue'
    export default {
        created () {
            // fetch data from server
            // i m using dummy data for now..
            var dummy = [
                {id: 1, title: 'Producto 1', price: 40, image: '/img/img-product.jpg'},
                {id: 2, title: 'Producto 2', price: 90, image: '/img/img-product.jpg'},
                {id: 3, title: 'Producto 3', price: 10, image: '/img/img-product.jpg'},
                {id: 4, title: 'Producto 4', price: 20, image: '/img/img-product.jpg'}
            ];
            // this.$set('products', dummy)
            this.products = dummy
        },
        data () {
            return {
                products: [
                    // {id: 1, title: 'Name of Product 1', price: 40, image: '/img/img-product.jpg'}
                ]
            }
        },
        components: { Product, ShoppingCart }
    }
</script>

<style>
    * {
        box-sizing: border-box;
    }
    body {
        font-family: Helvetica, sans-serif;
        margin: 0;
    }
    .clearfix:after {
        content: " ";
        visibility: hidden;
        display: block;
        height: 0;
        clear: both;
    }
    .container {
        width: 100%;
        color: #4C5263;
        width: 100%;
        padding: 2em;
    }
    .products {
        width: 75%;
        float: left;
    }
    .shopping-cart {
        width: 25%;
        float: left;
    }
</style>
