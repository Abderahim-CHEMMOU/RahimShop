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

    const productId = defineProps(['productId']);
    console.log(productId);
    const addToCart = async()  => {
        await axios.get('/sanctum/csrf-cookie');
        await axios.get('/api/user')
            .then(async(res) =>{
                console.log(res);
            })
            .catch(err => console.log(err));
    }
</script>

