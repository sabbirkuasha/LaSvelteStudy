<script>
    import { inertia, Link,useForm } from "@inertiajs/svelte";

    const route = window.route

    export let posts
    console.log(posts.data)

    $:console.log($form)
    let form = useForm({
        content: null,
    })

    function submit() {
        $form.post(route('home.post.store'),{
            preserveScroll: true,
            onSuccess: () => $form.reset('content'),
        })
    }



</script>

<main class="p-5">


    <Link class="btn btn-primary w-full my-5" href={route("post")}>Post Page</Link>

    <form on:submit|preventDefault={submit}>
        <div class="flex flex-col gap-5">
            <textarea required bind:value={$form.content} class="textarea textarea-info w-full h-36" placeholder="Write your comment..."></textarea>
            {#if $form.errors.content}
                <div class="bg-red-200 text-black">{$form.errors.content}</div>
            {/if}
            <button type="submit" class="btn btn-outline w-full btn-info">Comment</button>
        </div>
    </form>



    <ol class="list-decimal p-5">
        {#each posts.data as post}
            <li>{post.content}</li>
        {/each}
    </ol>

</main>
