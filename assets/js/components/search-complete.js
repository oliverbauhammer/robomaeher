export default {
    name: 'search-complete',
    data: function() {
        return {
            searchShow: false,
            searchWidth: null,
            search: '',
            suggestions: [
                {id: 0, name: 'Automower 420'},
                {id: 1, name: 'Automower 430 X'},
                {id: 2, name: 'Automower 450 X'},
                {id: 3, name: 'Automower 435 X AWD'},
                {id: 4, name: 'Akku-Gartengeräte'},
                {id: 5, name: 'Beratung'},
                {id: 6, name: 'Garagen'},
                {id: 7, name: 'Husqvarna'},
                {id: 8, name: 'Kundenmeinungen'},
                {id: 9, name: 'Reparatur'},
                // @todo list -> json
            ],
            duration: 300
        }
    },
    created () {
        window.addEventListener('scroll', this.scroll);
    },
    computed: {
        suggestionList() {
            return this.suggestions.filter(suggestion => {
                return suggestion.name.toLowerCase().includes(
                    this.search.toLowerCase()
                );
            });
        }
    },
    methods: {
        searchFor(keyword){
            this.search = keyword;

            setTimeout(() => {
               this.$refs.searchform.submit();
            }, 100);
        },
        scroll(){
            this.searchShow = false;
        }
    },
    watch: {
        searchShow: function(){
            this.searchWidth = document.querySelector('.navigation__wrapper').offsetWidth - 30;
        }
    }
}