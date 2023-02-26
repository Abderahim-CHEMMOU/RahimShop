<template> 

    <div class="flex items-center justify-between py-4">
        <button 
            class="bg-indigo-500 text-white p-2"
            v-on:click.prevent="addToCart"
        >Ajouter au panier</button>
    </div>
<h1>AQWERYT</h1>

</template>

<script setup>

    import useProduct from '../composables/products';

    const productId = defineProps(['productId']);
    const { add } = useProduct();
     
    const addToCart = async()  => {
        await axios.get('/sanctum/csrf-cookie');
        await axios.get('/api/user')
            .then(async(res) =>{
                    await add(productId);
            })
            .catch(err => console.log(err));
    }
</script>

