<template>
    <Head>
        <title>{{title}}</title>
    </Head>
    <section>
<!--        <h1>-->
<!--            {{like}}-->
<!--        </h1>-->
        <input type="text" name="search" v-model="like" @input="search(like)" placeholder="search">
    </section>
    <section>
        <div></div>
    </section>
    <div>
        <CountriesList :countries="countries"/>
    </div>
</template>

<script setup> //composition API - удобнее, веселее
import {Head, useForm} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import {onMounted, ref} from "vue";
import ConfirmsPassword from "@/Components/ConfirmsPassword.vue";
import CountriesList from "@/Components/CountriesList.vue";
import axios from "axios";

let new_country = ref("");

function set_country(e){
    // new_country.value = "Австралия";
    console.log(e.target.value);
}
 defineProps({
         title: String,
         countries: Object,
 });
// let countries = ref([]);


defineOptions({
    layout: MainLayout,
    inheritAttrs: false,
});

onMounted(() => {
    console.log("I've mounted");
    // countries = [];
})

// let countries = [];



let like = ref("");
function search(like){
    // let values = [];
    axios.get('api/countries/', {params: {search: like}})
        .then(function (response){
            this.countries = response.data.countries;
            console.log(response.data.countries);
            // console.log(response.status);
            // console.log(response.statusText);
            // console.log(response.headers);
            // console.log(response.config);
        })
        .catch(function (error){
            console.log(error);
        });

    // return values;
}

// form.put(route(model_route(model.toLowerCase()) + '.update', {slug: form.slug, id: form.id}), {
//     errorBag: 'updateInformation',
//     preserveScroll: true,
//     onSuccess: () => {
//         Event.emit('form_updated');
//     }
// });

    // components:{
    //     MainLayout,
    // },
    // name: "countries",
    // layout: MainLayout,

</script>

<style scoped>

</style>
