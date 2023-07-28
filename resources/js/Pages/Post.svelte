<script>
    import {inertia, Link } from '@inertiajs/svelte'
    let stack = "svelte"

    const route = window.route
    export let appName = "LaravelSvelte"
</script>


<svelte:head>
  <title>{appName}</title>
  <meta name="description" content="Your page description" />
</svelte:head>


<main class='p-5'>
    <h1 class="text-xl">
        This is post page
    </h1>
    <h1>
        Welcome to Laravel {stack} stack
    </h1>


    <Link class="btn btn-secondary w-full my-5" href={route("home")}>Back to Home</Link>


</main>
