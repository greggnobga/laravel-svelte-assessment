<script>
    /** Declare innerWidth and do dynamic statement to determine the value of isMobile. */
    let innerWidth = 0;
    $: isMobile = innerWidth <= 768 ? true : false;

    const carItems = [
        { id: 1, title: 'Item 1', link: 'public/images/visual/slide-01.jpg' },
        { id: 2, title: 'Item 2', link: 'public/images/visual/slide-02.jpg' },
        { id: 3, title: 'Item 3', link: 'public/images/visual/slide-03.jpg' },
    ];

    $: current = 0;
    $: maximum = carItems.length;
    $: left = 1;
    $: direction = 'left';

    /** Next handler.*/
    const nextHandler = () => {
        /** Calculate current value. */
        current = (current + 1) % maximum;

        /** Set direction.*/
        direction = 'right';
    };

    /** Previous handler.*/
    const prevHandler = () => {
        /** Calculate current value. */
        current = (current - 1 + maximum) % maximum;

        /** Set direction.*/
        direction = 'left';
    };
</script>

<!-- Bind window inner width to know the screen size. -->
<svelte:window bind:innerWidth />

{#if isMobile}
    <div class="carousel">
        <div class="carousel-track">
            <div class="carousel-item">
                {#each carItems as image, index (index)}
                    {#if index === current}
                        <img class="carousel-item-center animate-animated animate-fade-in-{direction}" src={image.link} alt="Item" />
                    {/if}
                {/each}
            </div>
        </div>
        <button class="carousel-button prev" type="button" on:click={nextHandler}>
            <svg fill="#FFF" style="width: 2rem; height: 2rem">
                <use xlink:href="public/icons/sprite.svg#chevron-left"></use>
            </svg>
        </button>
        <button class="carousel-button next" type="button" on:click={prevHandler}>
            <svg fill="#FFF" style="width: 2rem; height: 2rem">
                <use xlink:href="public/icons/sprite.svg#chevron-right"></use>
            </svg>
        </button>
    </div>
{:else}
    <div class="carousel">
        <div class="carousel-track">
            <div class="carousel-item">
                {#each carItems as image, index (index)}
                    {#if index === left}
                        <img
                            class="carousel-item-left animate-animated animate-fade-in-left"
                            src={image.link ? image.link : 'public/images/visual/slide-02.jpg'}
                            alt="Item" />
                    {/if}
                {/each}

                {#each carItems as image, index (index)}
                    {#if index === current}
                        <img
                            class="carousel-item-center animate-animated animate-fade-in"
                            src={image.link ? image.link : 'public/images/visual/slide-01.jpg'}
                            alt="Item" />
                    {/if}
                {/each}

                {#each carItems as image, index (index)}
                    {#if index === left}
                        <img class="carousel-item-right animate-animated animate-fade-in-right" src={image.link} alt="Item" />
                    {/if}
                {/each}
            </div>
        </div>
        <button class="carousel-button prev" on:click={nextHandler}>
            <svg fill="#FFF" style="width: 2rem; height: 2rem">
                <use xlink:href="public/icons/sprite.svg#chevron-left"></use>
            </svg>
        </button>
        <button class="carousel-button next" on:click={nextHandler}>
            <svg fill="#FFF" style="width: 2rem; height: 2rem">
                <use xlink:href="public/icons/sprite.svg#chevron-right"></use>
            </svg>
        </button>
    </div>
{/if}
