<template>
    <nav aria-label="Page navigation example" v-if="paginationNeeded">
        <ul class="pagination">
            <li class="page-item" v-show="prevUrl"><a class="page-link" href="#" rel="prev" @click.prevent="page--">&laquo; Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
	    <li class="page-item" v-show="nextUrl"><a class="page-link" href="#" rel="next" @click.prevent="page++">Next &raquo;</a></li>
	</ul>
    </nav>
</template>

<script>
    export default {
        props: ['dataSet'],

        mounted() {
            console.log('Paginator component mounted.')
        },

	data() {
	    return {
	        page: 1,
	        prevUrl: false,
		nextUrl: false
	    };
	},

	watch: {
	    dataSet() {
	        this.page = this.dataSet.current_page;
		this.prevUrl = this.dataSet.prev_page_url;
		this.nextUrl = this.dataSet.next_page_url; 
	    },

	    page() {
	        this.broadcast().updateUrl();
	    }
	},

	computed: {
	    paginationNeeded() {
		return !! this.prevUrl || !! this.nextUrl;
	    }
	},

	methods: {
	    broadcast() {
	        return this.$emit('changed', this.page);
	    },

	    updateUrl() {
	        history.pushState(null, null, '?page=' + this.page);
	    }
	}
    }
</script>