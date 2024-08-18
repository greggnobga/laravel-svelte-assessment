<script>
    /** Declare innerWidth and do dynamic statement to determine the value of isMobile. */
    let innerWidth = 0;
    $: isMobile = innerWidth <= 768 ? true : false;

    let isMenuOpen = false;

    const toggleMenu = () => {
        isMenuOpen = !isMenuOpen;
    };
</script>

<!-- Bind window inner width to know the screen size. -->
<svelte:window bind:innerWidth />

<!-- Check if isMobile and apply style in the head section depending on the result. -->
<svelte:head>
    {#if isMenuOpen}
        <style lang="postcss">
            body {
                overflow: hidden;
            }

            main {
                overflow: hidden;
            }
        </style>
    {/if}
</svelte:head>

<div class="header-bg">
    <ul class="container nav">
        <li class="nav-brand"><a href="/">Dummy</a></li>
        {#if isMobile}
            <li class="nav-link">
                <button type="button" class="hamburger hamburger-spring cursor-pointer" class:is-active={isMenuOpen} on:click={toggleMenu}>
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </li>
        {:else}
            <li class="nav-link">
                <ul class="link-items">
                    <li class="link-item"><a href="#service">Service</a></li>
                    <li class="link-item"><a href="#about">About Us</a></li>
                    <li class="link-item"><a href="#news">News</a></li>
                    <li class="link-item"><a href="#contact">Contact</a></li>
                    <li class="link-item">
                        <a class="btn-white" href="/login">Signin</a>
                    </li>
                </ul>
            </li>
        {/if}
    </ul>
</div>

{#if isMenuOpen}
    <div class="nav-mobile">
        <ul class="mobile-items">
            <li class="mobile-item">
                <a class="mobile-link" on:click={toggleMenu} href="#service">Service</a>
            </li>
            <li class="mobile-item">
                <a class="mobile-link" on:click={toggleMenu} href="#about">About Us</a>
            </li>
            <li class="mobile-item">
                <a class="mobile-link" on:click={toggleMenu} href="#news">News</a>
            </li>
            <li class="mobile-item">
                <a class="mobile-link" on:click={toggleMenu} href="#contact">Contact</a>
            </li>
            <li class="mobile-item mobile-button">
                <a class="btn-white mobile-link" on:click={toggleMenu} href="/login">Signin</a>
            </li>
        </ul>
    </div>
{/if}
