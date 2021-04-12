<?php
/**
 * Component: Search
 */
?>

<search-complete inline-template>
    <div class="search">
        <button 
            class="btn btn-primary search__show"
            v-if="!searchShow"
            v-on:click.prevent="searchShow = true"
        >
            <span class="material-icons">
                search
            </span>
        </button>

        <form 
            ref="searchform" 
            method="get" 
            class="search__form" 
            action="<?php echo get_home_url(); ?>"
            v-if="searchShow"
            v-bind:style="{ width: searchWidth + 'px', marginLeft: -searchWidth + 'px' }"
        >
            <div class="search__controls">
                <input 
                    type="text" 
                    v-model="search"
                    placeholder="Suchbegriff" 
                    class="search__input form-control" 
                    autocomplete="off"
                    name="s"
                />
                <button 
                    class="btn btn-primary search__submit"
                >
                    <span class="material-icons">
                        search
                    </span>
                </button>
            </div>

            <div 
                class="search__results"
                v-if="suggestionList.length <= 4 && suggestionList.length > 0"            
            >
                <ul class="search__list list-unstyled">
                    <li 
                        class="search__item" 
                        v-for="suggestion in suggestionList" 
                        v-bind:id="suggestion.id"
                        v-on:click.prevent="searchFor(suggestion.name)"
                    >
                        {{ suggestion.name }}
                    </li>
                </ul>
            </div>
        </form>
    </div>
</search-complete>