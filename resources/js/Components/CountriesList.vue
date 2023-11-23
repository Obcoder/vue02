<template>
    <div>
        <button class="rounded border px-2" @click="toggle">Добавить страну</button>
    </div>
    <div class="container w-3/4 mx-auto">
        <div>
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                <tr>
                    <td>Flag</td>
                    <td>Emblem</td>
                    <td>Name</td>
                    <td>Area</td>
                    <td>Calling code</td>
                    <td>Actions</td>
                    <td>iso3166code</td>
                </tr>
                </thead>
                <tbody>
                <tr v-if="isVisible" class="transition-all transition-collapse">
                    <td>
                        <input type="text" v-model="form.flag" class="rounded px-2 py-1 text-sm w-full">
                    </td>
                    <td>
                        <input type="text" v-model="form.coatofarms" class="rounded px-2 py-1 text-sm w-full">
                    </td>
                    <td>
                        <input type="text" v-model="form.name" class="rounded px-2 py-1 text-sm w-full">
                    </td>
                    <td>
                        <input type="text" v-model="form.area" class="rounded px-2 py-1 text-sm w-full">
                    </td>
                    <td>
                        <input type="text" v-model="form.callingcode" class="rounded px-2 py-1 text-sm w-full">
                    </td>
                    <td>
                        <input type="text" v-model="form.iso3166code" class="rounded px-2 py-1 text-sm w-full" placeholder="iso3166code">
                    </td>
                    <td>
                            <span @click="saveData" class="text-cyan-600">
                                save
                            </span>
                    </td>
                </tr>
                <tr v-for="country in countries" :key="country.id" class="divide-y divide-gray-300 hover:bg-slate-100">
                    <td>
                        <img v-bind:src="'/storage/imgs/flags/' + country.flag" class="w-1/3">
                    </td>
                    <td>
                        <img v-bind:src="'/storage/imgs/coatofarms/' + country.coatofarms" class="w-1/4">
                    </td>
                    <td class="font-sans text-2xl w-1/3">
                        {{country.name}}
                    </td>
                    <td>
                        {{country.area}}
                    </td>
                    <td>
                        {{country.callingcode}}
                    </td>
                    <td>
                        {{country.iso3166code}}
                    </td>
                    <td>
                        <div>
                            <div>edit</div>
                            <div>del</div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script setup>
import {ref} from "vue";
import {useForm} from "@inertiajs/vue3";

defineProps({
    countries: Object,
});
let isVisible = ref(false);
function toggle(){
    isVisible.value = !isVisible.value;
}
let form = useForm({
    flag:"",
    coatofarms:"",
    name:"",
    area:"",
    callingcode:"",
    iso3166code:"",
});
function saveData(){
    form.post(route('country.save'));
    form.reset();
    isVisible.value = false;
}
</script>

<style scoped>

</style>
