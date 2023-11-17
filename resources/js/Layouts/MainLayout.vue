<template>
    <header>
        <nav>
            <ul>
                <li>
                    <Link href="/">
                        Home
                    </Link>
                </li>
                <li>
                    <Link href="/countries">
                        Страны
                    </Link>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div>
            <div class="container mx-auto">
                <slot />
            </div>
        </div>
    </main>
    <footer></footer>

</template>

<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: "MainLayout",
    components: Link,
}
</script>

<style scoped>

</style>
